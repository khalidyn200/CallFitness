<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
            rel="stylesheet">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/product.css' ,'resources/css/card.css' ,'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Styles -->
        @livewireStyles
        <style>

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #ffce00;
  color: white;
  font-weight: bolder;
  font-size: 1.1rem;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
        </style>
    </head>
    <body class="font-sans antialiased">
<div class="topnav" id="myTopnav">
  <a href="/" 
  @if(Route::is('home'))
      class="active"
      @endif 
  >Home</a>

  <a href="/products/gym-accessories"
  @if(Route::is('products.gym-accessories'))
  class="active"
  @endif 
    >produits</a>
  <a href="#about">Contact</a>
  <a href="#about">Que somme Nous</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

@yield('content')

<!-- Footer -->
<footer class="bg-gray-100 py-8 w-full" style="width: 100vw; overflow: auto; ">
  <div class="container mx-auto grid w-full grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4" style="width: 100vw !important">
    <!-- About Us -->
    <div class="space-y-4">
      <h1 class="text-xl font-bold mb-4" id="about">À propos de nous</h1>
      <p class="text-gray-700" style="word-wrap: break-word;">
          Découvrez notre passion pour l'innovation et l'excellence. Nous nous engageons à offrir des produits de qualité et un service client irréprochable.     
      </p>
    </div>
    
    <!-- Products -->
    <div class="space-y-4">
      <h1 class="text-xl font-bold mb-4">Products</h1>
      <ul class="list-disc pl-5 space-y-2">
          @foreach($gymAccessories as $gymAccessory)
          <li class="text-gray-700"><a href="/products/details/{{$gymAccessory['id']}}"> {{$gymAccessory['name']}} </a></li>
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
          <img src="/img/facebook.png" alt="" class="fIcon">
          <img src="/img/twitter.png" alt="" class="fIcon">
          <img src="/img/instagram.png" alt="" class="fIcon">
          <img src="/img/whatsapp.png" alt="" class="fIcon">
        </div>
      </div>
    </div>
  </div>
</footer> 

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
    </body>
</html>
