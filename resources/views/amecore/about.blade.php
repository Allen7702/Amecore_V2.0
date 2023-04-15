@extends('layout.navbar')

@section('content')
<!--Head section -->
<div class="container-fluid  py-5 bg-header" style="margin-bottom: 90px;background:url({{asset('website/img/' . $firstSection->title_image)}}) center center no-repeat;height:35rem;">
    <div class="row py-5 ">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center ">
            <h1 class="display-4 text-white animated zoomIn nunito">{{ $firstSection->title ?? "blaa" }}</h1>
            <a href="" class="h5 text-white nunito">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white nunito">About</a>
        </div>
    </div>
</div>

 <!-- About Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
   
        <div class="container flex-container ">
        
            <div >
             

                <div class="section-title position-relative pb-3 mb-2">
                    <h5 class="fw-bold text-primary text-uppercase nunito">{{ $firstSection->title }}</h5>
                    <h1 class=" mb-0 text-setting-about-1 nunito">{{ $firstSection->heading }}</h1>
                </div>
                @foreach($abouts as $about)
                <p class="mb-4 text-setting-about-2">{{ $about->description }} </p>
           @endforeach
                 <div class="row py-2">
                    @foreach($abouts as $about)
                <div class="col-6">
                    <div class="d-flex align-items-center mb-4 wow zoomIn" data-wow-delay="0.2s">
                        <h1><img  class="hetero" src="{{asset('website/icons/' . $about->icon)}}"></h1>
                        <h5 class="text-truncate m-0">{{ $about->icon_name }}</h5>
                    </div>
                </div>
                @endforeach
            </div>
                <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">{{$firstSection->button_text}}</a>
            </div>
            <div >
               
                    <img class="image-setting  wow zoomIn" data-wow-delay="0.9s" src="{{asset('website/img/' . $firstSection->image)}}" style="object-fit: cover;">
                
            </div>
        </div>
   
</div>
<!-- About End -->
 <!-- Services Start -->
 <div class=" pt-5   " style="max-width:90%;margin:auto;" id="learn-more" >
        
    <div class="d-flex flex-column text-center mb-5 ">
        <h4 class="text-primary mb-3 nunito" style="font-size:30px;">Our Services</h4>
        <h1 class="display-4 m-0 nunito"><span class="text-primary">Premium</span> Technological Services</h1>
    </div>

    <div class="flex-container-1">
        @foreach($services->take(3) as $service)
        <div class="mb-4 mr-5">
            <div class="card text-center bg-dark p-4 ball-item">
                <h3 class="mt-4"><img class="hetero" src="{{ asset('website/icons/' . $service->image) }}"></h3>
                <h3 class="card-text mb-3 text-white" >{{ $service->title }}</h3>
                <p class="text-white">{{ $service->description }}</p>
                {{-- <a class="text-uppercase font-weight-bold" href="#"  onclick="toggleText(this); return false;">Read More</a> --}}

            </div>
        </div>
        @endforeach
    </div>

    <div class="flex-container-1">
        @foreach($services->skip(3) as $service)
        <div class="mb-4 mr-5">
            <div class="card text-center bg-dark p-4 ball-item">
                <h3 class="mt-4"><img class="hetero" src="{{ asset('website/icons/' . $service->image) }}"></h3>
                <h3 class="mb-3 text-white">{{ $service->title }}</h3>
                <p class="text-white">{{ $service->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Services End -->




@endsection