<div class="col-md-12">
    <div class="col-md-12">
      <h5>RESUMO DO PEDIDO</h5>
      <h6 id="planoName">Nome do plano</h6>
      <input hidden id="id_plano" name="id_plano" value="">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <a href="#">22 Opiniões</a>
    </div>

    <div class="form-group row">
      <div class="col-md-6">
        <div class="col-md-12 wrap">
          <hr id="discount_line">
          <h4 id="planoPrice"> R$ 0</h4>
          <h4 id="planoPriceDiscount"></h4>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-12">
          12x R$<h3 id="planoInstallmentPrice">33,25</h3>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <h6 style="color:green">Possui um cupon de desconto?</h6>
    </div>
    <div class="form-group row">
      <input id="cupom-desconto" type="text" class="form-control col-md-8" name="cupon_desconto">
      <button id="cupomDescontoButton" for="cupom-desconto" type="button" class="col-md-3 col-form-label text-md-center btn btn-secondary">Aplicar</button>
    </div>
    <hr/>
    <div class="form-group row">
      <h6 style="color:gray">Escolha sua forma de pagamento</h6>
      <div class="col-md-12">
        <input id="cartao-radio" type="radio" value="cartao" name="forma_pagamento" required>
        <label for="cartao-radio" class="col-md-9 col-form-label text-md-left">
          <h5>Cartão de crédito</h5>
          <p style="color:gray; font-size:10px;">Em até 12x s/juros</p>
        </label>
      </div>
      <div class="col-md-12">
        <input id="boleto-radio" type="radio" value="boleto" name="forma_pagamento" required>
        <label for="boleto-radio" class="col-md-9 col-form-label text-md-left">
          <h5>Boleto bancário</h5>
          <p style="color:gray; font-size:10px;">Em até 3x s/juros</p>
        </label>
      </div>
    </div>
    <hr/>
    <div class="form-group row">
      <div class="col-md-12">
        <a href="#" id="garantia-devolucao" style="color:green">
          <i class="fa fa-undo"></i> Garantia de devolução
        </a>
      </div>
      <div class="col-md-12">
        <p style="color:gray; font-size:10px;">
          Se em 90 dias não tiver o reultado esperado ou achar difícil de usar, devolvemos 100% do valor investido.
          <br />
          <br />
          Ao finalizar você concorda com os termos de uso.
          <br />
          <a href="#">Ler termos de uso.</a>
        </p>
      </div>
      <div class="col-md-12">
        <button id="finalizar-pedido" class="col-md-6 offset-md-3 btn btn-success">
          <i class="fas fa-check"></i> Finalizar pedido
        </button>
      </div>
    </div>

</div>
