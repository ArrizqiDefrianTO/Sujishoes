@extends('layouts.ecommerce')

@section('title','Sujishoes')

@section('content')
    <!--================Home Banner Area =================-->
	
	<!--================End Home Banner Area =================-->

	<!--================Checkout Area =================-->
	<section class="checkout_area section_gap mt-5">
		<div class="container ">
			<div class="billing_details">
				<div class="row">
					<div class="col-lg-8 ">
            <h3 class="mb-3">Informasi Pengiriman</h3>          
              @if (session('error'))
                  <div class="alert alert-danger">{{ session('error') }}</div>
              @endif
                        
              
            	<!-- REMOVE DULU VALUE ACTION-NYA JIKA INGIN MELIHATNYA DI BROWSER -->
            	<!-- KARENA ROUTE NAME front.store_checkout BELUM DIBUAT -->
              <form class="row contact_form" action="{{ route('front.store_checkout') }}" method="post" novalidate="novalidate">
                            @csrf
                      
                            <div class="bo4 col-11  size15 m-b-20">
                                <input class="sizefull s-text7 p-l-22 p-r-22" type="text"  id="first" name="customer_name" placeholder="Full Name">
                                <p class="text-danger">{{ $errors->first('customer_name') }}</p>
                            </div>

                        <div class="col-md-5 bo4  size15 m-b-20 mr-5">
                         
                            <input type="text" class="form-control sizefull s-text7 p-l-22 p-r-22" id="number" name="customer_phone" required placeholder="No Telp">
                            <p class="text-danger">{{ $errors->first('customer_phone') }}</p>
                        </div>
                        <div class="col-md-5 bo4  size15 m-b-20 mr-3">
                           
                            <input type="email" class="form-control sizefull s-text7 p-l-22 p-r-22" id="email" name="email" required  placeholder="email">
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        </div>
                        <div class="col-md-11 bo4  size15 m-b-20 mr-5">
                     
                            <input type="text" class="form-control sizefull s-text7 p-l-22 p-r-22" id="add1" name="customer_address" required placeholder="customer_address">
                            <p class="text-danger">{{ $errors->first('customer_address') }}</p>
                        </div>
                        <div class="col-md-8 form-group p_star">
                            <label for="">Propinsi</label>
                            <select class="form-control" name="province_id" id="province_id" required>
                                <option value="">Pilih Propinsi</option>
                              	<!-- LOOPING DATA PROVINCE UNTUK DIPILIH OLEH CUSTOMER -->
                                @foreach ($provinces as $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            <p class="text-danger">{{ $errors->first('province_id') }}</p>
                        </div>
                
                  <!-- ADAPUN DATA KOTA DAN KECAMATAN AKAN DI RENDER SETELAH PROVINSI DIPILIH -->
                        <div class="col-md-8 form-group p_star">
                            <label for="">Kabupaten / Kota</label>
                            <select class="form-control" name="city_id" id="city_id" required>
                                <option value="">Pilih Kabupaten/Kota</option>
                            </select>
                            <p class="text-danger">{{ $errors->first('city_id') }}</p>
                        </div>
                        <div class="col-md-8 form-group p_star">
                            <label for="">Kecamatan</label>
                            <select class="form-control" name="district_id" id="district_id" required>
                                <option value="">Pilih Kecamatan</option>
                            </select>
                            <p class="text-danger">{{ $errors->first('district_id') }}</p>
                        </div>
                <!-- ADAPUN DATA KOTA DAN KECAMATAN AKAN DI RENDER SETELAH PROVINSI DIPILIH -->
                    
					</div>
					<div class="col-lg-4 ">
						<div class="">
							<h3>Ringkasan Pesanan</h3>
					

                <table class="table m-2">
                    <thead class="thead-dark ">
                      <tr>
                       
                        <th scope="col">Product</th>
                  
                        <th scope="col">Qty</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $cart)
                      <tr>
                        <td>{{ \Str::limit($cart['product_name'], 10) }}</td>
                        
                        <td>*  {{ $cart['qty'] }}</td>
                        <td>Rp {{ number_format($cart['product_price']) }}</td>
                    </tr>
                    @endforeach
                      <tr>
                      
                        <td class="font-weight-bold">Subtotal</td>
                        <td></td>
                        <td>Rp {{ number_format($subtotal) }}</td>
                      </tr>
                      <tr>
                      <tr>
                      
                        <td class="font-weight-bold">Pengiriman</td>
                        <td></td>
                        <td>Rp <span>0</span></td>
                      </tr>
                      <tr>
                      
                        <td class="font-weight-bold">Total</td>
                        <td></td>
                        <td class="font-weight-bold">Rp {{ number_format($subtotal) }}</td>
                      </tr>
                    </tbody>
                  </table>
                
               
					<div class="size9 trans-0-4 m-t-10 m-b-10 ml-auto">	
              <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 bg-success">pay for orders</button></div>
              </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Checkout Area =================-->
@endsection

@section('js')
    <script>
        //KETIKA SELECT BOX DENGAN ID province_id DIPILIH
        $('#province_id').on('change', function() {
            //MAKA AKAN MELAKUKAN REQUEST KE URL /API/CITY
            //DAN MENGIRIMKAN DATA PROVINCE_ID
            $.ajax({
                url: "{{ url('/api/city') }}",
                type: "GET",
                data: { province_id: $(this).val() },
                success: function(html){
                    //SETELAH DATA DITERIMA, SELEBOX DENGAN ID CITY_ID DI KOSONGKAN
                    $('#city_id').empty()
                    //KEMUDIAN APPEND DATA BARU YANG DIDAPATKAN DARI HASIL REQUEST VIA AJAX
                    //UNTUK MENAMPILKAN DATA KABUPATEN / KOTA
                    $('#city_id').append('<option value="">Pilih Kabupaten/Kota</option>')
                    $.each(html.data, function(key, item) {
                        $('#city_id').append('<option value="'+item.id+'">'+item.name+'</option>')
                    })
                }
            });
        })

        //LOGICNYA SAMA DENGAN CODE DIATAS HANYA BERBEDA OBJEKNYA SAJA
        $('#city_id').on('change', function() {
            $.ajax({
                url: "{{ url('/api/district') }}",
                type: "GET",
                data: { city_id: $(this).val() },
                success: function(html){
                    $('#district_id').empty()
                    $('#district_id').append('<option value="">Pilih Kecamatan</option>')
                    $.each(html.data, function(key, item) {
                        $('#district_id').append('<option value="'+item.id+'">'+item.name+'</option>')
                    })
                }
            });
        })
    </script>
@endsection