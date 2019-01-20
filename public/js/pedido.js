$(function(){
  $('#discount_line').hide();
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  //pega o plano no db
  $.ajax({
    type: "GET",
    url: '/getPlano/1',
  }).done(function(data){
    console.log(data);
    $('#planoName').html(data.name);
    $('#id_plano').attr('value', data.id);
    $('#planoPrice').html('R$: ' + data.price.toFixed(2));
    $('#planoInstallmentPrice').html(data.price.toFixed(2)/12);
  });


  $('#cupomDescontoButton').click(function(){
    var cupom = $('#cupom-desconto').val();

    $.ajax({
      type: "GET",
      url: 'checkCupom',
      data: {code: cupom},
      success: function(response)
      {
        if($.isEmptyObject(response))
        {
          alert('Cupom não encontrado');
        }
        else{
          console.log(response);
          var price = $('#planoPrice').html().slice(3);
          preco = parseFloat(price);
          var discount = price * response.discount_percentage / 100;
          price = price - discount;
          var installmentPrice = price / 12;
          console.log(price);
          $('#cupom-desconto').prop('disabled', true);
          $('#discount_line').show();
          $('#planoPriceDiscount').html('R$: ' + price.toFixed(2));
          $('#planoInstallmentPrice').html(installmentPrice.toFixed(2));
        }
      }
    });
  });
  $('#finalizar-pedido').click(function(){
    var payment = $('input[name=forma_pagamento]:checked').val();
    var idPlano = $('#id_plano').val();
    var cupom   = $('#cupom-desconto').val();

    $.ajax({
      type: "GET",
      url: '/createPedido',
      data: {
        id_plano: idPlano,
        cupom: cupom,
        payment_chosen: payment,
      },
      success: function(response)
      {
        console.log(response);
        $('.modal-header-message').hide(300);
        $('.modal-header-message').html('Pedido criado com sucesso. (Mais detalhes no console)');
        $('.modal-header-message').show(300);
      },
      error: function(msg){
        $('#register-validation').html();
        for(var k in msg.responseJSON) {
          console.log(msg.responseJSON[k]);
        }
      }
    });
  });
})
