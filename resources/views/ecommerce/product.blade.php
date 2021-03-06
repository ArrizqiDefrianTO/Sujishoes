@extends('layouts.ecommerce')
@section('title','Shop SujiShoes')
@section('content')




<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url({{ asset('user/images/banner4.jpg') }});">
	<h2 class="l-text2 t-center">
		Women
	</h2>
	<p class="m-text13 t-center">
		New Arrivals Women Collection 2018
	</p>
</section>


<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					<!--  -->
					<h4 class="m-text14 p-b-7">
						Categories
					</h4>
					<a href="{{url ('/Products')}}" class="font-weight-bold">All</a>
					<ul class="list" >
						@foreach ($categories as $category)
						<li>
						  
							  <!-- MODIFIKASI BAGIAN INI -->
							<strong><a href="{{ url('/category/' . $category->slug) }}" class="font-weight-bold">{{ $category->name }}</a></strong>
						  <!-- MODIFIKASI BAGIAN INI -->
	
							@foreach ($category->child as $child)
						  
							  <!-- MODIFIKASI BAGIAN INI -->
							<ul class="list" style="display: block">
							<!-- MODIFIKASI BAGIAN INI -->
							  
								<li>
									<a href="{{ url('/category/' . $child->slug) }}" class="ml-4">{{ $child->name }}</a>
								</li>
							</ul>
							@endforeach
						</li>
						@endforeach
					</ul>
				
					<h4 class="m-text14 p-b-32 mt-4">
						Filters
					</h4>



					<div class="filter-color p-t-22 p-b-50 bo3">
						<div class="m-text15 p-b-12">
							Color
						</div>

						<ul class="flex-w">
							<li class="m-r-10">
								<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
								<label class="color-filter color-filter1" for="color-filter1"></label>
							</li>

							<li class="m-r-10">
								<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
								<label class="color-filter color-filter2" for="color-filter2"></label>
							</li>

							<li class="m-r-10">
								<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
								<label class="color-filter color-filter3" for="color-filter3"></label>
							</li>

							<li class="m-r-10">
								<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
								<label class="color-filter color-filter4" for="color-filter4"></label>
							</li>

							<li class="m-r-10">
								<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
								<label class="color-filter color-filter5" for="color-filter5"></label>
							</li>

							<li class="m-r-10">
								<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
								<label class="color-filter color-filter6" for="color-filter6"></label>
							</li>

							<li class="m-r-10">
								<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
								<label class="color-filter color-filter7" for="color-filter7"></label>
							</li>
						</ul>
					</div>

					<form class="form-inline my-2 my-lg-0" method="get" action="{{url('/search')}}">
					<div class="search-product pos-relative bo4 of-hidden">
						<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

						<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
							<i class="fs-12 fa fa-search" aria-hidden="true"></i>
						</button>
					</div>
					</form>
				</div>
			</div>

			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				<!--  -->
				<div class="flex-sb-m flex-w p-b-35">
					<div class="container">
						<!-- Search -->
						<div class="">
							<form action="" method="post">
								<div class="row mt-2 ">
									<div class="form-group col">

										<select name="kategori_id" id="kategori_id" class="form-control">
											<option value="">Default Sorting</option>
											<option>Default Sorting</option>
											<option>Popularity</option>
											<option>Price: low to high</option>
											<option>Price: high to low</option>


										</select>
									</div>
									<div class="form-group col">

										<select name="kategori_id" id="kategori_id" class="form-control">
											<option>Price</option>
											<option>$0.00 - $50.00</option>
											<option>$50.00 - $100.00</option>
											<option>$100.00 - $150.00</option>
											<option>$150.00 - $200.00</option>
											<option>$200.00+</option>


										</select>
									</div>


									<div class="col ml-5">

										<span class="s-text8 p-t-5 p-b-5">
											Showing 1–12 of 16 results
										</span>
									</div>
							</form>
						</div>
					</div>


				</div>


				<!-- Product -->
				<div class="row mt-3">
					<!-- Block2 -->
					@forelse($products as $product)
					<div class="col-sm-12 col-md-6 col-lg-4 p-b-50 ">
						<div class="block2 ">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="{{asset('storage/products/'. $product->image )}}" alt="IMG-PRODUCT">
								@csrf
								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
									
										<a href="{{ url('/product/' . $product->slug) }}" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Add to Cart</a>

								
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">

								
								<a href="{{ url('/product/' . $product->slug) }}" class="block2-name dis-block s-text3 p-b-5">{{$product->name}}
								</a>


								<span class="block2-price m-text6 p-r-5">
									Rp. {{ number_format($product->price) }}
								</span>
							</div>
						</div>
					</div>
					@empty
					<div class="col-md-12">
						<div class="container-fluid mr-5">
							
							<img src="{{asset('user/images/nothing.png' )}}" alt="" width="250px" height="240px" class="ml-5">
							<h4 class="text-center">Produk tidak ditemukan</h4>
							<p>Mohon coba kata kunci yang lain atau yang lebih umum</p>
					
						</div>
					</div>
					@endforelse





				</div>

				<!-- Pagination -->
				<div class="pagination flex-m flex-w p-t-26">
					{{ $products->links() }}
					
					
				</div>
			</div>
		</div>
	</div>
</section>

@endsection