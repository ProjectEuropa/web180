@extends('layouts/app')

@section('title','Bar#180 TOP')

@section('stylesheet')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="{{asset('/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
    
@endsection
    
@section('content')
 {{--SlickSlider--}}
  
 <ul class="slick01 slick-slider">
    <li class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01" style="width: 920px;"><img src="{{asset('image/room1.jpg')}}" alt="slider01"></li>
    <li class="slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02" style="width: 920px;"><img src="{{asset('image/room2.jpg')}}" alt="slider01"></li>
    <li class="slick-slide slick-current slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide03" aria-describedby="slick-slide-control03" style="width: 920px;"><img src="{{asset('image/room3.jpg')}}"></li>
    <li class="slick-slide slick-current slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide04" aria-describedby="slick-slide-control04" style="width: 920px;"><img src="{{asset('image/room4.jpg')}}"></li>
    <li class="slick-slide slick-current slick-active" data-slick-index="5" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide05" aria-describedby="slick-slide-control05" style="width: 920px;"><img src="{{asset('image/room5.jpg')}}"></li>
    <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
    <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
</ul>
{{--SlickSlider-end--}}
{{--service--}}

<div id="service">
    <div class="copy">
        <h2>たまには、一人バーもいかが？</h2>
        <p>美味しいお酒とおつまみと楽しい店主がお待ちしております</p>
    </div>
</div>
{{--service-end--}}

@endsection
@section('script')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('/js/slick.min.js')}}"></script>
    <script>
        $('.slick01').slick({
            autoplay:true,
            autoplaySpeed:1000,
            slidesToShow:2,
            infinit:true,
            }
        );
    </script>
   　<script>
       document.querySelector('.nav1').classList.add('active');
     </script>
    
@endsection




