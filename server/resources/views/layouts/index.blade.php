@extends('layouts.app')

@section('content')
<div class="slider">
    <div class="sliderWrapper">
        @foreach($gymAccessories as $accessory)
            <div class="sliderItem">
                <img src="{{ $accessory['imageURL'] }}" alt="{{ $accessory['name'] }}" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">{{ strtoupper($accessory['name']) }}</h1>
                <h2 class="sliderPrice">{{ number_format($accessory['price'], 2) }} DH</h2>
                <a href="#product">
                    <a href="/products/details/{{$accessory['id']}}" class="buyButton">BUY NOW!</a>
                </a>
            </div>
        @endforeach
    </div>
</div>

<div class="features">
    <div class="feature">
        <img src="./img/shipping.png" alt="" class="featureIcon">
        <span class="featureTitle">LIVRAISON GRATUITE</span>
    </div>
    <div class="feature">
        <img class="featureIcon" src="./img/return.png" alt="">
        <span class="featureTitle"> BON D'ACHAT</span>
    </div>
    <div class="feature">
        <img class="featureIcon" src="./img/gift.png" alt="">
        <span class="featureTitle">CADEAU À L'ACHAT</span>
    </div>
    <div class="feature">
        <img class="featureIcon" src="./img/contact.png" alt="">
        <span class="featureTitle"> SOUTIEN CLIENT 24H/24!</span>
    </div>
</div>




<div class="product" id="product">
    <img src="{{ $gymAccessories[0]['imageURL'] }}" alt="" class="productImg">
    <div class="productDetails">
        <h5 class="productTitle">{{ $gymAccessories[0]['name'] }}</h5>
        <h2 class="productPrice">{{ $gymAccessories[0]['price'] }} DH</h2>

        <a  href="/products/details/{{$accessory['id']}}" class="productButton">BUY NOW!</a>
    </div>
</div>

<div class="relative w-full mt-6 bg-white p-4 rounded-lg shadow-lg overflow-hidden">
    <img src="img/gymAccess.jpeg" alt="" class="w-full h-auto object-cover rounded-md transition-transform transform hover:scale-105 duration-300">
</div>




<!-- Gallery -->
<section class="py-8">
    <div class="max-w-7xl mx-auto px-4">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Gallery Item 1 -->
        <div class="relative group">
          <h1 class="absolute top-4 left-4 text-white text-2xl font-bold bg-black bg-opacity-50 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
            Be Yourself!
          </h1>
          <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fae01.alicdn.com%2Fkf%2FUTB8iw_eOSnEXKJk43Ubq6zLppXay%2F1-Pair-Gym-Gloves-Weight-Lifting-Training-Gloves-Women-Men-Fitness-Sports-Body-Building-Gymnastics-Grips.jpg&f=1&nofb=1&ipt=7db59b8f90259dfee9d20c465d05c70b35a7f844ce3d0d0db5cc075246a547ce&ipo=images" 
          alt="" class="w-full h-auto object-cover rounded-lg shadow-md">
        </div>
        <!-- Gallery Item 2 -->
        <div class="relative group">
          <h1 class="absolute top-4 left-4 text-white text-2xl font-bold bg-black bg-opacity-50 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
            This is the First Day of Your New Life
          </h1>
          <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2F79%2F23%2Fa0%2F7923a02a292883a741bfa115374bacff.jpg&f=1&nofb=1&ipt=93f20b2423e57833ec55aafd8d63f23abf5e19e3f877ef146e390c65d59acfc5&ipo=images" 
          alt="" class="w-full h-auto object-cover rounded-lg shadow-md">
        </div>
        <!-- Gallery Item 3 -->
        <div class="relative group">
          <h1 class="absolute top-4 left-4 text-white text-2xl font-bold bg-black bg-opacity-50 p-2 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
            Just Do it!
          </h1>
          <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpixahive.com%2Fwp-content%2Fuploads%2F2020%2F08%2FMan-working-out-in-a-gym-with-a-mask-on-11416-pixahive.jpg&f=1&nofb=1&ipt=d05c94b3ea44c06087abfa574fc71fb766da83c2026b9b6baa5b0160c9ff48f3&ipo=images" 
          alt="" class="w-full h-auto object-cover rounded-lg shadow-md">
        </div>
      </div>
    </div>
  </section>
@endsection
