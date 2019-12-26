@extends('layouts.ecommerce')

@section('title','Chekout')

@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area mt-3">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Pesanan Diterima</h2>
					<div class="page_link">
            <a href="{{ url('/') }}">Home</a>
						<a href="">Invoice</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Order Details Area =================-->
	<section class="order_details p_120 mt-3">
		<div class="container">
			<h5 class="title_confirmation text-center mb-4 text-success">Terima kasih, pesanan anda telah kami terima.</h5>
			<div class="row order_d_inner">
				<div class="col">
					<div class="details_item">
						<table class="table ">
							<thead>
							 <h3>Informasi Pemesanan</h3>
							</thead>
							<tbody>
							  <tr>
								<th scope="row">Invoice</th>
								<td>{{ $order->invoice }}</td>
								
							  </tr>
							  <tr>
								<th scope="row">Tanggal</th>
								<td>{{ $order->created_at }}</td>
							
							  </tr>
							  <tr>
								<th scope="row">Total</th>
								<td>Rp {{ number_format($order->subtotal) }}</td>
								
							  </tr>
							  <tr>
								<th scope="row">Alamat</th>
								<td>{{ $order->customer_address }}</td>
								
							  </tr>
							  <tr>
								<th scope="row">Kota</th>
								<td>{{ $order->district->city->name }}</td>
								
							  </tr>
							  <tr>
								<th scope="row">Country</th>
								<td>Indonesia</td>
								
							  </tr>
							</tbody>
						  </table>
						
						  <div class="size10 trans-0-4 m-t-10 m-b-10 ml-auto">
							<!-- Button -->
							<a href="{{ route('front.product') }}"class="flex-c-m sizefull bg-primary bo-rad-23 hov1 s-text1 trans-0-4">Continue Shoping</a>
					 
							   
						   
						</div>
					
					
					</div>
				</div>
				
			</div>
		</div>
	</section>
  <!--================End Order Details Area =================-->
    
@endsection