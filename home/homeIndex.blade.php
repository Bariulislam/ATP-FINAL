@extends('home.mainLayout')
@section('content')

  <div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <div class="swiper-container images-carousel">
	
		
        <div class="swiper-wrapper">
		
			<div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">movies</h2>
                   <a href="{{route('home.movies')}}" class="btn btn-outline-white py-2 px-4">More Movies</a>
                </div>
                <img src="{{asset('home_asset/images/img_9.jpg')}}" alt="Image">
              </div>
			</div>
		
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">Softwares</h2>
                  <a href="{{route('home.gallary', 'softwares')}}" class="btn btn-outline-white py-2 px-4">More Softwares</a>
                </div>
                <img src="{{asset('home_asset/images/2.jpg')}}" alt="Image">
              </div>
            </div>
			
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">TVseries</h2>
                  <a href="{{route('home.gallary', 'TVseries')}}" class="btn btn-outline-white py-2 px-4">More TVseries</a>
                </div>
                <img src="{{asset('home_asset/images/3.jpg')}}" alt="Image">
              </div>
            </div>
			
            
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
    </div>
  </div>

  @endsection

@section('title')
	Home Page
@endsection