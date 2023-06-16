
<?php include_once("header.php");?>
    

<section>
    <div class="container" id="destaque-produtos-container" ng-controller="destaque-controller">

        <div id="destaque-produtos">

            <div class="item" ng-repeat="produto in produtos">
                <div class="row align-items-start">

                    <div class="col-sm-6 col-imagem">
                        <img src="../png/produtos/{{produto.foto_principal}}" height="350px" alt="{{produto.nome_prod_longo}}">
                    </div>

                    <div class="col-sm-6 col-descricao" >
						<h2>{{produto.nome_prod_longo}}</h2>
                        <div class="box-valor">
                            <div class="text-avista text-arial-cinza">À vista</div>
                            <div class="text-por text-arial-cinza">por</div>
                            <div class="text-reais text-azul">R$</div>
                            <div class="text-valor text-azul">{{produto.preco}}</div>
                            <div class="text-valor-centavos text-azul">,{{produto.centavos}}</div>
                            <div class="text-parcelas text-arial-cinza">ou até 8x de R$ {{produto.parcela}} sem juros</div>
                        </div>
                        <a href="#" class="btn btn-comprar text-azul"><i class="fa fa-shopping-cart"></i>Comprar</a>

                    </div>

                </div>
                
            </div>


        </div>
				
    </div>

    <div id="promocoes" class="container">
		
		<div class="row">
			<div class="col-md-2">
				
				<div class="box-promocao box-1">
					<p>escolha por desconto</p>
				</div>

			</div>
			<div class="col-md-10">
                <div class="row align-items-start">
                    
                    <div class="row-fluid">
                        <div class="row align-items-start">
                            <div class="col-md-3">
                                <div class="box-promocao">
                                    <div class="text-ate">até</div>
                                    <div class="text-numero">40</div>
                                    <div class="text-porcento">%</div>
                                    <div class="text-off">off</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box-promocao">
                                    <div class="text-ate">até</div>
                                    <div class="text-numero">60</div>
                                    <div class="text-porcento">%</div>
                                    <div class="text-off">off</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box-promocao">
                                    <div class="text-ate">até</div>
                                    <div class="text-numero">80</div>
                                    <div class="text-porcento">%</div>
                                    <div class="text-off">off</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box-promocao">
                                    <div class="text-ate">até</div>
                                    <div class="text-numero">85</div>
                                    <div class="text-porcento">%</div>
                                    <div class="text-off">off</div>
                                </div>
                            </div>
                        </div>
                    </div>

			</div>
		</div>

	</div>

    <div id="mais-buscados" class="container">
		
		<div class="row text-center title-default-roxo">
			<h2>os mais buscados</h2>
			<hr>	
		</div>

		<div class="row">
			
			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img src="../png/produtos/camisa1.png" height="300px" alt="camisa" class="produto-img">
						<h3>CAMISETA CRUZEIRO ADIDAS</h3>
						<div class="estrelas" data-score="3"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor text-roxo">R$ 179,90</div>
						<div class="text-parcelado text-arial-cinza">4x de R$ 45,00 sem juros</div>
					</a>
				</div>

			</div>

			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img src="../png/produtos/caneca.png" height="300px" alt="caneca" class="produto-img">
						<h3>CANECA CRUZEIRO BRANCA E AZUL - BRANCO</h3>
						<div class="estrelas" data-score="5"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor text-roxo">R$ 74,90</div>
						<div class="text-parcelado text-arial-cinza">3x de R$ 24,99 sem juros</div>
					</a>
				</div>

			</div>

			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img src="../png/produtos/moletom.png" height="300px" alt="moletom" class="produto-img">
						<h3>MOLETOM CRUZEIRO 23/24 COMISSÃO TÉCNICA ADIDAS MASCULINO</h3>
						<div class="estrelas"  data-score="4"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor text-roxo">R$ 349,99</div>
						<div class="text-parcelado text-arial-cinza">até {{produto.parcelas}}x de R$ 43,75 sem juros</div>
					</a>
				</div>

			</div>

			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img src="../png/produtos/jaqueta.png" height="300px" alt="jaqueta" class="produto-img">
						<h3>JAQUETA CRUZEIRO PORTLET MARINHO</h3>
						<div class="estrelas"  data-score="5"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor text-roxo">R$ 329,90</div>
						<div class="text-parcelado text-arial-cinza">8x de R$ 41,24 sem juros</div>
					</a>
				</div>

			</div>

		</div>

	</div>

</section>

<?php include_once("footer.php");?>

<script>
angular.module("shop", []).controller("destaque-controller", function($scope, $http){

$scope.produtos = [];

$http({
  method: 'GET',
  url: '../png/produtos'
}).then(function successCallback(response) {

	$scope.produtos = response.data;


  }, function errorCallback(response) {
	// called asynchronously if an error occurs
	// or server returns response with an error status.
  });
	  

	$scope.produtos.push({
		nome_prod_longo: "CAMISA CRUZEIRO I 23/24 S/N° TORCEDOR ADIDAS MASCULINA - AZUL",
		foto_principal:"camisacruzeiro.png",
		preco:"349",
		centavos:"99",
		parcelas:"8",
		parcela:"49,75"
	});
});


$(function(){
  	$('.estrelas').each(function(){

  		$(this).raty({
	  		starHalf    : '../lib/raty/lib/images/star-half.png',                                // The name of the half star image.
			starOff     : '../lib/raty/lib/images/star-off.png',                                 // Name of the star image off.
			starOn      : '../lib/raty/lib/images/star-on.png',
			score		: parseFloat($(this).data("score"))
	  	});

  	});

});
</script>

