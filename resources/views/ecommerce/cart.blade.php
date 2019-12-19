@extends('layouts.ecommerce')
@section('title','cart')
@section('content')

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url({{ asset('user/images/banner4.jpg') }});">
    <h2 class="l-text2 t-center">
        Cart
    </h2>
</section>

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
        <!-- Cart item -->
        <form action="{{ route('front.update_cart') }}" method="post">
            @csrf
        
        <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">
                <table class="table-shopping-cart">
                    <tr class="table-head">
                        <th class="column-1"></th>
                        <th class="column-2">Product</th>
                        <th class="column-3">Price</th>
                        <th class="column-4 p-l-70">Quantity</th>
                        <th class="column-5">Total</th>
                    </tr>
                    @forelse ($carts as $row)
                    <tr class="table-row">
                        <td class="column-1">
                            <div class="cart-img-product b-rad-4 o-f-hidden">
                                <img src="{{ asset('storage/products/' . $row['product_image']) }}" width="100px" height="100px" alt="{{ $row['product_name'] }}">    
                            </div>
                        </td>
                        <td class="column-2">{{ $row['product_name'] }}</td>
                        <td class="column-3">Rp {{ number_format($row['product_price']) }}</td>
                        <td class="column-4">


                            <div class="flex-w bo5 of-hidden w-size17">

                                
                            

                                <input class="size16 m-text18 t-center num-product" name="qty[]" id="sst{{ $row['product_id'] }}"type="number"  maxlength="12" value="{{ $row['qty'] }}">
                                <input type="hidden" name="product_id[]" value="{{ $row['product_id'] }}" class="form-control">
                              
                            </div>
                        </td>
                        <td class="column-5">Rp {{ number_format($row['product_price'] * $row['qty']) }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">Tidak ada belanjaan</td>
                    </tr>
                    @endforelse
                </table>
            </div>
        </div>

        <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
        

            <div class="size10 trans-0-4 m-t-10 m-b-10 ml-auto">
                <!-- Button -->
                <a href="{{ route('front.product') }}"class="flex-c-m sizefull bg-warning bo-rad-23 hov1 s-text1 trans-0-4">Continue Shoping</a>
         
                   
               
            </div>
            <div class="size10 trans-0-4 m-t-10 m-b-10 ml-3">
                <!-- Button -->
              
              <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">Update Cart</button>
                   
               
            </div>
        </div>

        <!-- Total -->
        <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
            <h5 class="m-text20 p-b-24">
                Cart Totals
            </h5>
           

            <!--  -->
            <div class="flex-w flex-sb-m p-b-12">
                <span class="s-text18 w-size19 w-full-sm">
                    Subtotal: 
                </span>

                <span class="m-text21 w-size20 w-full-sm">
                    Rp {{ number_format($subtotal) }}
                </span>
            </div>

            <!--  -->
            <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
               
            </div>

            <!--  -->
        

            <div class="size15 trans-0-4">
                <!-- Button -->
                <a href="{{ route('front.checkout') }}"class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">Proceed to Checkout</a>
               
            </div>
        </div>
    </form>
    </div>
</section>
@endsection