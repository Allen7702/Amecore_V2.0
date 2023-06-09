@extends('layout.navbar')

@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 d-none d-lg-block">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

       @foreach($sliders as $slider)
         <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img class="w-100 vh-100" src="{{$slider->image }}" alt="Image">
            <div class="carousel-caption d-flex flex-column justify-content-center">
                <div class="pp-3 slide-animation" style="max-width: 900px;">
                  <h1 class="display-3 text-white mb-3 nunito">
                    <span class="text-primary">{{ $slider->title_red }}</span>
                    {{ $slider->title_white }}
                   </h1>
                 <h5 class="text-white mb-3 d-none d-sm-block" style="width:600px;">
                    {{ $slider->description }}
                 </h5>
                 @if($slider->show_button)
                    <a href="#book" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4 mr-3">{{ $slider->button_text }}</a>
                 @endif
                 </div>
             </div>
         </div>
        @endforeach
       </div>
         <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
             <div class="btn btn-secondary rounded" style="width: 45px; height: 45px;">
                  <span class="carousel-control-prev-icon mb-n2"></span>
             </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
             <div class="btn btn-secondary rounded" style="width: 45px; height: 45px;">
              <span class="carousel-control-next-icon mb-n2"></span>
             </div>
        </a>
    </div>
</div>
<!--Carousel End -->

    <!-- Carousel Start 
    <div class="container-fluid p-0 d-none d-lg-block">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

            <div class="carousel-item active">
                    <img class="w-100  vh-100 "  src="{{asset('website/img/camerax2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column  justify-content-center">
                        <div class="pp-3 slide-animation" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3 nunito" ><span class="text-primary">CCTV</span> Camera Installation Services </h1>
                            <h5 class="text-white mb-3 d-none d-sm-block" style="width:600px;">CCTV camera installation services provide enhanced security 
                                through the setup and configuration of surveillance cameras in homes, businesses, and public places. </h5>
                            <a href="#book" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4 mr-3">Start Now</a>
                            {{-- <a href="#learn-more" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100 vh-100 " src="{{asset('website/img/customerx.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column  justify-content-center">
                        <div class="pp-3 slide-animation" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3 nunito"><span class="text-primary">Customer</span>-Centric Solutions</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block" style="width:600px;">Customer-centric solutions are services or products designed with the customer's needs, preferences, and feedback in mind.</h5>
                            <a href="#book" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4 mr-3">Start Now</a>
                            {{-- <a href="#learn-more" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a> --}}
                        </div>
                    </div>
                </div>
                  <div class="carousel-item">
                    <img class="w-100 vh-100 " src="{{asset('website/img/cyberx.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column justify-content-center">
                        <div class="pp-3 slide-animation" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3 nunito"><span class="text-primary">Security</span> Consultation on Cyber Security</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block" style="width:600px;">A security consultation on cyber security is a process where a professional evaluates an organization's digital security posture and provides recommendations to enhance their protection against cyber threats.</h5>
                            <a href="#book" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4 mr-3">Start Now</a>
                            {{-- <a href="#learn-more" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100 vh-100 " src="{{asset('website/img/lanx.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column justify-content-center">
                        <div class="pp-3 slide-animation" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3 nunito"><span class="text-primary">Local Area</span> Network LAN Installation</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block" style="width:600px;"> This involves installing and configuring network hardware, such as routers, switches, and cables, and software components like operating systems and applications.</h5>
                            <a href="#book" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4 mr-3">Start Now</a>
                            {{-- <a href="#learn-more" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100 vh-100 " src="{{asset('website/img/telecom.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column justify-content-center">
                        <div class="pp-3 slide-animation" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3 nunito"><span class="text-primary">Telecom</span>munication Systems Installation</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block" style="width:600px;">Telecommunication systems installation provides organizations with reliable and efficient communication channels, facilitating collaboration and productivity while reducing costs associated with outdated communication methods.</h5>
                            <a href="#book" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4 mr-3">Start Now</a>
                            {{-- <a href="#learn-more" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100 vh-100 " src="{{asset('website/img/soft.jpeg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column  justify-content-center">
                        <div class="pp-3 slide-animation" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3 manrope"><span class="text-primary">Software</span> Design for Web Applications</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block" style="width:600px;">Software design for web applications involves the development and implementation of custom software solutions that run on web browsers.</h5>
                            <a href="#book" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4 mr-3">Start Now</a>
                            {{-- <a href="#learn-more" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
     Carousel End -->

    <!-- About Start -->
    
        <div class="container flex-container mb-4" style="margin-top:100px;" id="about">
            <div class="flex-item-1">
                @php
                $firstSection = $aboutSections->first();
            @endphp
                <h1 class="mb-2 text-setting-1 manrope"> <span class="text-secondary">{{$firstSection->title_primary }}</span><span class="text-primary"> {{$firstSection->title_sec}}</span></h1>
               @foreach($aboutSections as $section)
                <h6 class="text-setting-2 text-dark"> {!! $section->description !!}</h6>
                @endforeach    
            </div>
            <div class="flex-item-2 ">
                        <img class="image-setting" src="{{asset('website/img/' .  $firstSection->image )}}" alt="">
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


    <!-- Features Start -->
   
    <div class="container mt-4 mb-4" style="background:url({{asset('website/img/' . $featureHeading->main_image)}}) !important;max-width:100%;">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-75 " style="opacity: 0.8;" src="{{asset('website/img/' . $featureHeading->second_image)}}" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5 ">
                <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                    <h4 class="text-light mb-3">{!! $featureHeading->heading !!}</h4>
                    <h1 class="display-4 mb-4 text-light">{!! $featureHeading->subheading !!}</h1>
                  <p class="mb-4 text-setting-about1-2 text-light">{!! $featureHeading->description !!}</p>
                  <div class="row py-2">
                    @foreach($features as $feature)
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1><img class="hetero" src="{{asset('website/icons/' . $feature->icon)}}"></h1>
                                <h5 class="text-truncate text-light m-0">{{ $feature->title }}</h5>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features End -->


        <!--Booking-->
    <div class="container-fluid bg-light mt-5 " >
        
            <div class="flex-container"    >
                
                    <div class="bg-primary  form-setting" >
                      <a name="form-top"></a>
            
                        <form class="py-5" method="POST"  action ="/home" >
                        @csrf
                            <div class="form-group">
                                <input type="text" class="form-control size-form border-0 p-4" placeholder="Your Name" name="name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control size-form border-0 p-4" placeholder="Your Email" name ="email" required="required" />
                            </div>
                            <div class="form-group">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" class="form-control size-form border-0 p-4 datetimepicker-input" placeholder="Reservation Date" name="date" data-target="#date" data-toggle="datetimepicker"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" class="form-control size-form border-0 p-4 datetimepicker-input" placeholder="Reservation Time" name="time" data-target="#time" data-toggle="datetimepicker"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select size-form border-0 px-4" aria-placeholder="Your Service" name="service" style="height: 47px;">
                                    <option selected></option>
                                    <option value="Consultation">Consultation</option>
                                    <option value="Installation">Installation</option>
                                    <option value="Solution">Solution</option>
                                    <option value="Software Development">Software Development</option>
                                </select>
                            </div>
                            <div>
                                 <input type="hidden" name="booking_form" value="1">
                                <button class="btn btn-dark btn-block border-0 py-3 size-form" type="submit">Book Now</button>
                            </div>
                        </form>
                    </div>

                  
                    <div class="pl-5">
                @if($bookingSections->count() > 0)
                    @php
                        $firstContent = $bookingSections->first();
                    @endphp
                    <h4 class="text-secondary mb-3 text-setting-about1-2">{{ $firstContent->section_title }}</h4>
                    <h1 class="display-4 mb-4">{{ $firstContent->section_subtitle }} </h1>
                    <p class="text-setting-about1-2">{{ $firstContent->section_description }}</p>
                    
                    <div class="row py-2">
                        @foreach($bookingSections as $content)
                            <div class="col-sm-6">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <h1><img class="hetero" src="{{ asset('website/icons/' . $content->icon_path) }}"></h1>
                                        <h5 class="text-truncate m-0 text-setting-about1-2">{{ $content->icon_title }}</h5>
                                    </div>
                                    <p class="text-setting-about1-2">{{ $content->icon_description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                </div>
                

               
                {{-- <div class="pl-5">
                    <h4 class="text-secondary mb-3 text-setting-about1-2">In need of a solution?</h4>
                    <h1 class="display-4 mb-4">Book <span class="text-primary">Now!</span></h1>
                    <p class="text-setting-about1-2">Get the best service for your business from the very best! At Amecore, our customers are our priority.</p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1><img  class="hetero" src="{{asset('website/icons/working.png')}}"></h1> 
                                    <h5 class="text-truncate m-0 text-setting-about1-2">Consultation</h5>
                                </div>
                                <p class="text-setting-about1-2">Tailored end-to-end solutions to transform your business</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1><img  class="hetero" src="{{asset('website/icons/wrench.png')}}"></h1> 
                                    <h5 class="text-truncate m-0 text-setting-about1-2">Installation</h5>
                                </div>
                                <p class="text-setting-about1-2">Tailored end-to-end solutions to transform your business</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1><img  class="hetero" src="{{asset('website/icons/solution.png')}}"></h1> 
                                    <h5 class="text-truncate m-0 text-setting-about1-2">Solution</h5>
                                </div>
                                <p class="m-0 text-setting-about1-2">Tailored end-to-end solutions to transform your business</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1><img  class="hetero" src="{{asset('website/icons/graphic-design.png')}}"></h1> 
                                    <h5 class="text-truncate m-0 text-setting-about1-2">Software Design</h5>
                                </div>
                                <p class="m-0 text-setting-about1-2">Tailored end-to-end solutions to transform your business</p>
                            </div>
                        </div>
                    </div>
                 --}}
            </div>
       
    </div>
<!--Booking End-->
@endsection
   
