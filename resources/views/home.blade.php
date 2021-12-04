@extends('pages.customer.main')
@section('content')
 <!-- slide trình chiếu -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to=""></li>
        </ul>
            @foreach($slides as $key => $item)
            <div class="carousel-item {{ $key == 1 ? 'active' : '' }} ">
                <img class="d-block w-100" src="public/upload/{{ $item->slide1 }}">
            </div>
            @endforeach
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
 </div>
 <!-- kết thúc slide -->
 <a href="{{route('test')}}">Gửi mail</a>
@endsection