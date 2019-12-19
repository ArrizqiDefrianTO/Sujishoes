@extends('layouts.ecommerce')
@section('title','Shop SujiShoes')
@section('content')

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="{{asset('storage/products/'. $product->image )}}">
							<div class="wrap-pic-w">
								<img src="{{asset('storage/products/'. $product->image )}}" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="{{asset('storage/products/'. $product->image )}}">
							<div class="wrap-pic-w">
                                          
								<img src="{{asset('storage/products/'. $product->image )}}" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="{{asset('storage/products/'. $product->image )}}">
							<div class="wrap-pic-w">
                            <img src="" alt="IMG-PRODUCT">
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<div class="w-size14 p-t-30 respon5">
				@if (session('success'))
				<div class="alert alert-success">{{ session('success') }}</div>
			@endif
	
			@if (session('error'))
				<div class="alert alert-danger">{{ session('error') }}</div>
			@endif
				<h4 class="product-detail-name m-text16 p-b-13">
					{{ $product->name }}
				</h4>

				<span class="m-text17">
				Rp. {{ number_format($product->price) }}
				</span>

				<p class="s-text8 p-t-10">
				#SepatuMurah#shoes
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
				

				

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<form action="{{ route('front.cart') }}" method="POST">
								@csrf
								 
								<div class="flex-w bo5 w-size17 of-hidden m-r-22 m-t-10 m-b-10">


								
										<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="size8 m-text18 t-center num-product">
										
										<!-- BUAT INPUTAN HIDDEN YANG BERISI ID PRODUK -->
										<input type="hidden" name="product_id" value="{{ $product->id }}" class="form-control">
								  
								  <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
								  class="btn-num-product-down color1 flex-c-m size7 bg8 eff2" type="button">
								  <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								  </button>
								  <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
								  class="btn-num-product-up color1 flex-c-m size7 bg8 eff2" type="button">
								  <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								  </button>
								</div>
								<div class="card_area">
								  
								  <!-- UBAH JADI BUTTON -->
								  <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								  <button class="main_btn flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">Add to Cart</button>
								  <!-- UBAH JADI BUTTON -->
								</div>
								</div>
							  </form>
							  
							

						
						</div>
					</div>
				</div>

				<div class="p-b-45">
					<span class="s-text8 m-r-35">weight : {{ $product->weight }}</span>
					<span class="s-text8">Made in: Indonesia</span>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							{{ $product->description }}
						</p>
					</div>
				</div>

				

				
			</div>
		</div>
	</div>



@endsection