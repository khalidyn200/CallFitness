@extends('layouts.app')
@section('content')

<main class="main mb-12">
    <!-- Cart Section -->
    <section class="cart container" id="cart">
          <article class="cart-content">
             <div class="cart-image">
                <img src="https://i.postimg.cc/50JrR8Vn/product-image-2.png" alt="product">
             </div>
             <div class="cart-detail">
                <h3 class="text-base font-semi">Nike Air Motion One</h3>
                <p class="text-small font-medium">$199.00</p>
                <div class="cart-counter">
                   <div class="cart-block">
                      <button class="cart-button" role="button">
                         <i class="bx bx-minus"></i>
                      </button>
                      <span class="cart-amount">1</span>
                      <button class="cart-button" role="button">
                         <i class="bx bx-plus"></i>
                      </button>
                   </div>
                   <div class="cart-remove">
                      <button class="cart-button" role="button">
                         <i class="bx bx-trash"></i>
                      </button>
                   </div>
                </div>
             </div>
          </article>
       </div>
       <div class="cart-checkout">
          <div class="cart-total">
             <p class="text-base font-medium">Total:</p>
             <p class="text-medium font-semi">$398.00</p>
          </div>
          <button class="btn btn-darken" disabled>
             Checkout <i class="bx bx-chevron-right"></i>
          </button>
       </div>
    </section>
    <!-- Wrapper Section -->
    <section class="section wrapper wrapper-section">
       <div class="container wrapper-column">
          <div class="wrapper-bgimage">
             <img src="{{$accessorie['imageURL']}}" class="wrapper-image" alt="product">
          </div>
          <div class="wrapper-content">
             <div class="wrapper-inform">
                <span class="badge badge-darken">gym accessories</span>
                <h1 class="display-medium font-bold">{{$accessorie['name']}}</h1>
                <p class="text-base font-normal">
                   The combine of breathable mesh without seams for wonderful traditional
                   and modern style to add the perfect amount of flash to make you shine.
                </p>
             </div>
             <div class="wrapper-detail">
                <div class="price">
                   <span class="text-base font-medium">Prix:</span>
                   <h3 class="text-large font-semi">{{$accessorie['price']}} DH</h3>
                </div>
             </div>
             <div class="wrapper-action">
                <button class="btn btn-darken" >Acheter</button>
             </div>
          </div>
       </div>
    </section>
 </main>

@endsection