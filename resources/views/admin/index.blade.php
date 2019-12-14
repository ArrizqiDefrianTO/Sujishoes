@extends('layout.main')
@section('title','Shop SujiShoes')
@section('content')




<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(user/images/banner4.jpg);">
	<h2 class="l-text2 t-center">
		Women
	</h2>
	<p class="m-text13 t-center">
		New Arrivals Women Collection 2018
	</p>
</section>


    <!-- Tambah Data -->
    <div class="row">
        <div class="col-5">
            <a href="/admin/create" class="btn btn-primary">Tambah Barang</a>
        </div>
    </div>


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
					@foreach($products as $product)
					<div class="col-sm-12 col-md-6 col-lg-4 p-b-50 ">
						<div class="block2 ">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="user/images/{{$product->image}}" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Add to Cart
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">

								{{$product->name}}
								<a href="/Products/{{$product->id}}" class="block2-name dis-block s-text3 p-b-5">detail
								</a>


								<span class="block2-price m-text6 p-r-5">
									$75.00
								</span>
							</div>
						</div>
					</div>
					@endforeach





				</div>

				<!-- Pagination -->
				<div class="pagination flex-m flex-w p-t-26">
					<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
					<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection