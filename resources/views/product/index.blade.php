@extends('layouts.app')

@section('content')
<div id="container">
  <div id="tj_container" class="tj_container">
    <div class="tj_nav"> <span id="tj_prev" class="tj_prev">Previous</span> <span id="tj_next" class="tj_next">Next</span> </div>
    <div class="tj_wrapper">
      <ul class="tj_gallery" style="margin:0; padding:0">
        
@foreach ($products as  $product)
<li>
  <!--<img src="{{Voyager::image($product->avatar)}}" > -->
  <img src="{{asset('img/logo.png')}}">
<div class="img_overley" >
    <div class="text">{{$product->name}} <br> {{$product->initial_price}} <br> voir plus <a href=></a> </div>
  </div>
</li>
<div class="hvrbox">
	<img src="logo.png"  class="hvrbox-layer_bottom">
	<div class="hvrbox-layer_top hvrbox-layer_scale">
		<div class="hvrbox-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
      Fusce porttitor ligula porttitor, lacinia sapien non.</div>
	</div>
</div>


    
@endforeach

@endsection