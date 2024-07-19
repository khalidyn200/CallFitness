@extends('layouts.app')

@section('content')
<div class="slider">
    <div class="sliderWrapper">
        @foreach($gymAccessories as $accessory)
            <div class="sliderItem">
                <img src="{{ $accessory['imageURL'] }}" alt="{{ $accessory['name'] }}" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">{{ strtoupper($accessory['name']) }}<br>NEW<br>SEASON</h1>
                <h2 class="sliderPrice">${{ number_format($accessory['price'], 2) }}</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
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
        <h2 class="productPrice">{{ $gymAccessories[0]['price'] }}</h2>

        <button class="productButton">BUY NOW!</button>
    </div>
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


<!-- Footer -->
<footer class="bg-gray-100 py-8 w-full" style="width: 100vw; overflow: auto; ">
    <div class="container mx-auto grid w-full grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4" style="width: 100vw !important">
      <!-- About Us -->
      <div class="space-y-4">
        <h1 class="text-xl font-bold mb-4">À propos de nous</h1>
        <p class="text-gray-700" style="word-wrap: break-word;">
            Découvrez notre passion pour l'innovation et l'excellence. Nous nous engageons à offrir des produits de qualité et un service client irréprochable.     
        </p>
      </div>
      
      <!-- Products -->
      <div class="space-y-4">
        <h1 class="text-xl font-bold mb-4">Products</h1>
        <ul class="list-disc pl-5 space-y-2">
            @foreach($gymAccessories as $gymAccessory)
            <li class="text-gray-700"><a href=""> {{$gymAccessory['name']}} </a></li>

            @endforeach
        </ul>
      </div>
  
      <!-- Subscribe & Follow Us -->
      <div class="space-y-8">
        <div class="space-y-4">
          <h1 class="text-xl font-bold mb-4">Subscribe to our newsletter</h1>
          <div class="flex gap-2">
            <input type="text" placeholder="your@email.com" class="flex-1 border border-gray-300 px-4 py-2 rounded-lg">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Join!</button>
          </div>
        </div>
        <div class="space-y-4">
          <h1 class="text-xl font-bold mb-4">Follow Us</h1>
          <div class="flex space-x-4">
            <img src="./img/facebook.png" alt="Facebook" class="w-8 h-8">
            <img src="./img/twitter.png" alt="Twitter" class="w-8 h-8">
            <img src="./img/instagram.png" alt="Instagram" class="w-8 h-8">
            <img src="./img/whatsapp.png" alt="WhatsApp" class="w-8 h-8">
          </div>
        </div>
      </div>
    </div>
  </footer>  
@endsection
