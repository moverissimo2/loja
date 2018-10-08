<!-- New Product -->
<div ng-app="myApp">
   <div ng-controller="produtosCrtl">

<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Destaques
				</h3>
			</div>

			<!-- Slide2 -->
			<table class='table table-striped table-bordered' ng-table='tableParams'>
			<tbody ng-repeat="data in filtered = (list | filter:search:strict | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo: 15">	
			<tr>
			 <td>
			 <div class="wrap-slick2">
				<div class="slick2">
			
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="{{data.foto}}" alt="imagem">

								<div class="block2-overlay trans-0-4">
									<a href="detalhe.php?id={{data.id_produto}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Comprar
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
									{{data.nm_produto}}
								</a>

								<span class="block2-price m-text6 p-r-5">
									{{data.vl_produto}}
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			</td>
			</tr>
    	</tbody>

		</div>
	</section>
  </div>
 </div>

<script src="../modelo/js/angular.min.js"></script>
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="../modelo/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.8.1.min.js"></script>
<script src="../modelo/app/app.js"></script>
<script src="../modelo/app/listaProdutos.js"></script>     

