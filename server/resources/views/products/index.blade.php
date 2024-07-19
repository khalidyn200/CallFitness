@extends('layouts.app')
@section('content')

<div>
  <div class="my-12">
  <form class="search_form" action="">
    <input  class="search_input" type="search" required>
    <i class="fa fa-search"></i>
    <button class="search_button" onclick="clearInput()">Clear</a>
  </form>
  
</div>

<div class="flex flex-wrap m-12 gap-3 justify-center items-center">
    @foreach($gymAccessories as $accessory)
    <div class="card">
        <div class="imgBox">
          <img src="{{ $accessory['imageURL'] }}" alt="{{ $accessory['name'] }}" class="mouse">
        </div>
      
        <div class="contentBox">
          <h3>{{ $accessory['name'] }}</h3>
          <h2 class="price">{{ number_format($accessory['price'], 2) }} DH</h2>
          <a href="/products/details/{{$accessory['id']}}" class="buy">Buy Now</a>
        </div>
      
      </div>
    @endforeach
</div>
<div class="center m-12">
    <div class="pagination">
    <a href="#">&laquo;</a>
    <a href="#">1</a>
    <a href="#" class="active">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">&raquo;</a>
    </div>
  </div>

</div>

@endsection