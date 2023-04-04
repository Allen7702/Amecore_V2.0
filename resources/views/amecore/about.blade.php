@extends('layout.navbar')

@section('content')
<!--Head section -->
<div class="container-fluid  py-5 bg-header" style="margin-bottom: 90px;background:url({{asset('website/img/camerax.jpg')}}) center center no-repeat;height:35rem;">
    <div class="row py-5 ">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center ">
            <h1 class="display-4 text-white animated zoomIn nunito">About Us</h1>
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
                    <h5 class="fw-bold text-primary text-uppercase nunito">About Us</h5>
                    <h1 class=" mb-0 text-setting-about-1 nunito">The Best IT Solution With 10 Years of Experience</h1>
                </div>
                <p class="mb-4 text-setting-about-2">Having 10 years of experience in the IT industry is a significant accomplishment. It demonstrates that the company has had the opportunity to develop and refine its skills, knowledge, and expertise in the field.
                 <br> With such a wealth of experience, the company is likely to have encountered and overcome a wide range of challenges, which has helped it to develop robust and effective solutions for its clients. .</p>
            <div class="row py-2">
                <div class="col-6">
                    <div class="d-flex align-items-center mb-4 wow zoomIn" data-wow-delay="0.2s">
                        <h1><img  class="hetero" src="{{asset('website/icons/best-seller.png')}}"></h1>
                        <h5 class="text-truncate m-0">Best In Industry</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center mb-4 wow zoomIn " data-wow-delay="0.2s">
                        <h1><img  class="hetero" src="{{asset('website/icons/solution (1).png')}}"></h1>
                        <h5 class="text-truncate m-0">Effective Solutions</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center wow zoomIn" data-wow-delay="0.4s">
                        <h1><img  class="hetero" src="{{asset('website/icons/24-hours-support.png')}}"></h1>
                        <h5 class="text-truncate m-0">Reliable Services</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex align-items-center wow zoomIn" data-wow-delay="0.4s">
                        <h1><img  class="hetero" src="{{asset('website/icons/customer-service.png')}}"></h1>
                        <h5 class="text-truncate m-0" id="book">Customer Support</h5>
                    </div>
                </div>
                
            </div>
                <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Book Now</a>
            </div>
            <div >
               
                    <img class="image-setting  wow zoomIn" data-wow-delay="0.9s" src="{{asset('website/img/solution.jpg')}}" style="object-fit: cover;">
                
            </div>
        </div>
   
</div>
<!-- About End -->


@endsection