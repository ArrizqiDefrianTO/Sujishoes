@extends('layout.main')
@section('title','Blog')
@section('content')

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(user/images/banner4.jpg);">
    <h2 class="l-text2 t-center">
        Contact
    </h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 p-b-30 ">

                <div class="hov-img-zoom mt-5">
                    <img src="user/images/about.png" alt="IMG-ABOUT">
                </div>


            </div>

            <div class="col-md-6 p-b-30">
                <form method="post" action="contact" class="leave-comment">

                    @csrf
                    <h4 class="m-text26 p-b-36 p-t-15">
                        Send us your message
                    </h4>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22 @error('name') is-invalid @enderror" type="text" id="name" value="{{old('name')}}" name="name" placeholder="Full Name">

                        @error('name')

                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22 @error('no_telp') is-invalid @enderror" type="text" name="no_telp" value="{{old('no_telp')}}" placeholder="Phone Number">
                        @error('no_telp')

                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
                        @error('email')

                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="description" placeholder="Message"></textarea>
                    @error('description')

                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    <div class="w-size25">
                        Button -->
                        <button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                            Send
                        </button> -->
                     </div>
                </form>

              
            </div>
        </div>
    </div>
    
</section>



<section>
    <div class="container">
        <div class="row">
            <div class="col-4">

        <div class="card" style="width: 18rem;">
        @foreach ($contacts as $Contact)
            <div class="card-body">
                <h5 class="card-title">{{$Contact->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
    </div>
    </div>
    </div>
</section>
@endsection