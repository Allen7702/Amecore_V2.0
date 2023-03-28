@extends('layout.navbar')

@section('content')
    <!--Head section -->
<div class="container-fluid  py-5 bg-header" style="margin-bottom: 90px;background:url(img/camerax.jpg) center center no-repeat;height:35rem;">
    <div class="row py-5 ">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center ">
            <h1 class="display-4 text-white animated zoomIn nunito">Contact Us</h1>
            <a href="" class="h5 text-white nunito">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white nunito">Contact</a>
        </div>
    </div>
</div>

   
     <!-- Contact Start -->
     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container ">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto " style="max-width: 750px;">
                <h5 class="fw-bold text-primary text-uppercase nunito">Contact Us</h5>
                <h1 class="mb-0 text-setting-about-1 nunito">If You Have Any Query, Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4 mb-2">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+255 713 999 934</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email to get free quote</h5>
                            <h4 class="text-primary mb-0">info@amecore.co.tz</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Visit our office</h5>
                            <h4 class="text-primary mb-0">Plot 672 Mwai Kibaki Road,Mikocheni</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d36679.76827385266!2d39.233757676728644!3d-6.772551524333188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2stz!4v1679959317857!5m2!1sen!2stz"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    
@endsection

{{--  <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-2">
            <h1 class="display-4 m-0">Contact For <span class="text-primary">Any Query</span></h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    
                    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
                    <div class="success-message d-none d-lg-block"><strong>Your message has been sent. </strong></div>
                    <script>
                         // Hide the success message after 5 seconds
                          setTimeout(function() {
                          document.querySelector('.success-message').remove();
                         }, 5000);
                     </script>
                    <?php } ?>
                    <form method="POST" action="connection.php">
                        <div class="control-group">
                           
                            <input type="text" class="form-control p-4" id="name" placeholder="Your Name" name="name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control p-4" id="email" placeholder="Your Email" name="email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="subject" placeholder="Subject" name="subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" name="message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <input type="hidden" name="contact_form" value="1">
                            <button class="btn btn-secondary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
         
        </div>
    </div> --}}