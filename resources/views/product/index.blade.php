@extends('layouts.app')

@section('content')
<div id="container">
  <div id="tj_container" class="tj_container">
    <div class="tj_nav"> <span id="tj_prev" class="tj_prev">Previous</span> <span id="tj_next" class="tj_next">Next</span> </div>
    <div class="tj_wrapper">
      <ul class="tj_gallery" style="margin:0; padding:0">
        
@foreach ($products as  $product)
<li>
   
 

<div class="hvrbox">
<img src="{{Voyager::image($product->avatar)}}" width=200px height=200px >
	<div class="hvrbox-layer_top hvrbox-layer_slideup">
		<div class="hvrbox-text">
    {{$product->name}}
  <br>
    {{$product->initial_price}}
  <br>
    <a href="{{}}">See more</a>
    </div>
	</div>
</div>
</li>

    
@endforeach

@endsection