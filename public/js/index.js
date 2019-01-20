$(function(){
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
   $(".cadastro-button").click(function () {
      $(this).text(function(i, text){
          return text === "Já tenho cadastro" ? "Ainda não tenho cadastro" : "Já tenho cadastro";
      })
      if($(this).text() == "Já tenho cadastro"){
        $('.card-register').show();
        $('.card-login').hide();
      } else {
        $('.card-register').hide();
        $('.card-login').show();
      }
   });

   //validation
   $('.validation-error-container').hide();

   //register ajax
   $("#submit-register").click(function(){
     $("#register-form").submit();
   });
   $("#register-form").submit(function(e){
     e.preventDefault();
     var data = $(this).serialize();
     var url = $(this).attr("action");
     console.log(data);

     $.ajax({
         type: "POST",
         url: url,
         data: data,
         success: function( login ) {
           console.log(login)
           $('.card-register').html('Seja bem vindo ' + login.name + '!');
           $('.card-register').append('<a href="" id="logout-button"> Sair </a>');
           $('.cadastro-button ').hide();
         },
         error: function(error){
           console.log(error.responseJSON.errors);
           $('#register-validation').html();
           for(var k in error.responseJSON.errors) {
             $('#register-validation').append('<div class="col-md-12">' + error.responseJSON.errors[k][0] + '</div>');
          }
           $('#register-validation').show(300);
         }
     });
   });

   //Login ajax
   $("#submit-login").click(function(){
     $("#login-form").submit();
   });
   $("#login-form").submit(function(e){
     e.preventDefault();
     var data = $(this).serialize();
     var url = $(this).attr("action");
     console.log(data);
     $.ajax({
         type: "POST",
         url: url,
         data: data,
         success: function(login) {
           console.log(login)
           $('.card-login').html('Seja bem vindo ' + login.name + '!')
           $('.card-login').append('<a href="" id="logout-button"> Sair </a>')
           $('.cadastro-button ').hide();
         },
         error: function(error){
           console.log(error.responseJSON.errors);
           $('#login-validation').html();
           for(var k in error.responseJSON.errors) {
             $('#login-validation').append('<div class="col-md-12">' + error.responseJSON.errors[k][0] + '</div>');
          }
           $('#login-validation').show(300);
         }
     });
   });
   $(document).on('click', '#logout-button', function(){
     $.ajaxSetup({
       headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
     });
      $.ajax({
        type:"GET",
        url:"/logout",
        success:function(response){
          console.log('deslogado');
        }
      })
   })
})
