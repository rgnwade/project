@extends('layouts.app')


@section('css')

@endsection

@section('content')
	<div class="home-image no-gap">
   <img class="homepage"  src="{{url('public/uploads/homepage.jpg')}}" />
   </div>


   <div class="slider-event no-gap">

 
  <div class="owl-carousel-2 owl-carousel ">
   <img class="carousel1" src="{{url('public/uploads/events1.jpg')}}" />
    <img class="carousel2" src="{{url('public/uploads/events2.jpg')}}" />
 
   
  </div>

<div class="event-now-open" style="color: white;">
  <div class="event-title">
   	<center><a style="color: white;" href="#">EVENT & NOW OPEN</a></center>
   </div>

   <div class="desc-event no-gap">
   <center>	This Bali Event is expecting over 6000 guests during a fantastic weekend, feauturing over 20 top-of-the-line EDM and House artist. The DJ's will perform at a mesmerizing stage with 360 paradise kind of view.</center>
   </div>
   </div>

 </div>


 <div class="food-drink">
 	<div class="fd-title no-gap">
 		<center>FOOD & DRINK</center>
 	</div>

 	<div class="fd-desc">
   <center>	This Bali Event is expecting over 6000 guests during a fantastic weekend, feauturing over 20 top-of-the-line EDM and House artist. The DJ's will perform at a mesmerizing stage with 360 paradise kind of view.</center>
   </div>

   <div class="fd-icon">
   	<img class="fd-icon-1" src=" "/><a href=" ">RESTO</a>
 </div>

 </div>


 <div class="nightlife no-gap">
 	<img class="nightlife-img"  src="{{url('public/uploads/nightlife.jpg')}}" />

 	<div class="nght-title">
 		NIGHTLIFE
 	</div>

  <div class="nght-cat">
    <a style="border-right: 1px solid; padding-right: 4px;" href="#">Nice Bar </a>
    <a style="border-right: 1px solid; padding-right: 4px; padding-left: 4px;" href="#">Nice Club </a>
    <a style="padding-left: 4px;href="#">Good DJ</a>
  </div>

</div>


@endsection
