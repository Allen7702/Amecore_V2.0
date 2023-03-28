@extends('layout.navbar')

@section('content')
    <!--Head section -->
<div class="container-fluid  py-5 bg-header" style="margin-bottom: 90px;background:url(img/camerax.jpg) center center no-repeat;height:35rem;">
   <div class="row py-5 ">
       <div class="col-12 pt-lg-5 mt-lg-5 text-center ">
           <h1 class="display-4 text-white animated zoomIn nunito">Services</h1>
           <a href="" class="h5 text-white nunito">Home</a>
           <i class="far fa-circle text-white px-2"></i>
           <a href="" class="h5 text-white nunito">Solution</a>
       </div>
   </div>
</div>

    <!-- Detail Start -->
   <div style="padding-left:170px;">
   <div class=" text-left ">
    <h1 class="mb-3 text-setting-solution-1 nunito"><span class="text-primary">Products </span>and solutions</h1>
    </div>
                    
   <h2> DEVELOPMENT AND INTEGRATION OF API's</h2>
   <div class="flex-container mb-5 " style="max-width:90%;justify-content: space-evenly;">
      <div> 
         
         <ul class="list-inline list-setting">
            <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>Socket API & Integration( ISO 8583)<p>: A Socket API is a low-level interface that enables communication between networked applications. ISO 8583 is a standard for financial transaction messaging.</p> </li>
            <li class="text-setting-about1-2" ><i class="fa fa-check-double text-secondary mr-3"></i>REST APIs & Integrations <p> : REST (Representational State Transfer) is a software architectural style that uses HTTP methods (GET, POST, PUT, DELETE) to communicate between systems. REST APIs provide a standard way for systems to exchange data and integrate with each other over the internet.  </p> </li>
            <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>SOAP APIs & Integrations <p>: SOAP (Simple Object Access Protocol) is a messaging protocol that allows applications to exchange structured data. SOAP APIs provide a more standardized approach to messaging than REST APIs, with built-in security and transactional support. </p> </li>
             <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>Flat File Integrations <p>: Flat file integrations involve exchanging data between systems using flat files, which are simple text files containing data in a specific format. Flat file integrations are commonly used in situations where more complex integrations are not necessary. </p> </li>
              <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>ISO 20022 Financial Systems Integrations <p> : ISO 20022 is a global standard for financial transaction messaging. Integrating financial systems with ISO 20022 allows financial institutions to exchange messages in a standardized format, improving interoperability and reducing costs.</p> </li>
         </ul>
       </div>
      <div>
         <img class="image-setting  wow zoomIn" data-wow-delay="0.2s" src="img/solution.jpg" style="object-fit: cover;">
      </div>
   </div> 
   
   <h2 class="mb-4">CUSTOMIZABLE ENTERPRISE SERVICE BUS</h2>
   <div class="flex-container mb-6" style="max-width:90%;justify-content: space-evenly;">
      <div> 
         <img class="image-setting  wow zoomIn" data-wow-delay="0.2s" src="img/solution.jpg" style="object-fit: cover;">
      </div> 
      <div>
         <ul class="list-inline list-setting ml-5">
            <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>Internet & Mobile Banking <p>A service offered by banks that allows customers to perform banking transactions through a secure website.</p> </li>
            <li class="text-setting-about1-2" ><i class="fa fa-check-double text-secondary mr-3"></i>Utility Payments (TV,Airtime, LUKU etc)<p> Easily manage your monthly utility payments for TV, airtime, LUKU, and more. Pay securely online or through mobile apps for ultimate convenience.  </p> </li>
            <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>SWIFT & EFT Systems <p>SWIFT and EFT systems provide secure and efficient electronic transfer of funds domestically and internationally, saving time and reducing errors. </p> </li>
             <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>Customer Engagements Systems<p>Customer engagement systems enable businesses to interact and build relationships with their customers through various channels, providing personalized experiences and improving customer satisfaction. </p> </li>
              <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>ATMs & POS Systems <p> ATMs and POS systems provide convenient and secure methods for customers to access and manage their finances,.</p> </li>
              <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>Government Payments Systems (GePG, MUSE)<p>Government payment systems such as GePG and MUSE offer citizens a fast and secure way to pay taxes, fines, and other government-related fees, promoting transparency and accountability.</p> </li>
              
            </ul>
      </div>
   </div>    

   <div class="flex-container  " style="max-width:90%;justify-content: space-evenly;">
      <div> 
         
         <ul class="list-inline list-setting">
            <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>Mobile Money Wallets (MPESA,TIGOPESA, AIRTELMONEY,HALOPESA, T-PESA) <p>Mobile money wallets offer secure and convenient digital payment options using mobile devices..</p> </li>
              <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>Back office Reconciliation System <p>Back office reconciliation systems ensure accurate and efficient matching and verification of financial transactions.</p> </li>
              <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>e-KYC platform for remote account opening <p> e-KYC platforms enable remote and secure account opening processes by using digital identification and verification methods.</p> </li>
              <h2 class="mb-1">CUSTOMIZABLE BANKING SOLUTIONS</h2>
            <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>Internet Banking <p>Internet banking provides customers with 24/7 access to their accounts, allowing them to manage their finances from anywhere, anytime, and empowering them.</p> </li>
            <li class="text-setting-about1-2" ><i class="fa fa-check-double text-secondary mr-3"></i>Agency Banking Solution & Merchant Solution using Android POS <p> Agency banking solutions and merchant solutions using Android POS provide businesses with flexible and efficient payment processing options.  </p> </li>
            <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>NIDA e-KYC Solution : Contactless Fingerprint Scanner using Smart Phone <p>NIDA e-KYC solution, featuring contactless fingerprint scanning technology using smartphones, offers a secure and efficient way to verify customer identities remotely. </p> </li>
             <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>Instant Card Issuing Solution – Normal EMV Cards & VISA cards <p>Instant card issuing solutions for normal EMV and VISA cards offer customers a convenient and fast way to receive and activate their payment cards. </p> </li>
              <li class="text-setting-about1-2"><i class="fa fa-check-double text-secondary mr-3"></i>MNOs Digital Lending and Insurance Digital Lending <p> MNOs digital lending and insurance services provide accessible and convenient financial solutions to customers through digital channels.</p> </li>
         </ul>
       </div>
      <div>
         <img class="image-setting  wow zoomIn" data-wow-delay="0.2s" src="img/solution.jpg" style="object-fit: cover;margin-top:100px;">
      </div>
   </div> 
   
   
   </div>
      @endsection


      {{--  <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-12">
                <div class="d-flex flex-column text-left mb-4">
                    <!--h4 class="text-secondary mb-3"><span class="text-primary">Ame</span>core Detail</h4-->
                    <h1 class="mb-3"><span class="text-primary">Products </span>and solutions</h1>

                </div>

                <div class="mb-5">
                    <!--img class="img-fluid w-100 mb-3" src="img/api.jpg" alt="Image"-->
                    <h3> DEVELOPMENT AND INTEGRATION OF API's</h3>
             
                    <ul class="list-inline">
  <li><i class="fa-solid fa-circle-small"></i>Socket API & Integration( ISO 8583)</li>
  <li><i class="fa fa-check-double text-secondary mr-3"></i>REST APIs & Integrations</li>
  <li><i class="fa fa-check-double text-secondary mr-3"></i>SOAP APIs & Integrations</li>
   <li><i class="fa fa-check-double text-secondary mr-3"></i>Flat File Integrations</li>
    <li><i class="fa fa-check-double text-secondary mr-3"></i>ISO 20022 Financial Systems Integrations</li>
   
</ul>  
                    <h3 class="mb-4">CUSTOMIZABLE ENTERPRISE SERVICE BUS</h3>
                    <img class="img-fluid w-50 float-left mr-4 mb-3" src="img/ENT.png" alt="Image">
                   <p>Our Enterprise Service Bus provides you with a capability to connect</p>
                  <p> <ul class="list-inline">
                   <li><i class="fa fa-check-double text-secondary mr-3"></i>Internet & Mobile Banking </li>
                   <li><i class="fa fa-check-double text-secondary mr-3"></i> Utility Payments (TV,Airtime, LUKU etc)</li>
                      <li><i class="fa fa-check-double text-secondary mr-3"></i>SWIFT & EFT Systems </li>
                         <li> <i class="fa fa-check-double text-secondary mr-3"></i>Customer Engagements Systems</li>
                            <li><i class="fa fa-check-double text-secondary mr-3"></i> ATMs & POS Systems</li>
                               <li> <i class="fa fa-check-double text-secondary mr-3"></i>Government Payments Systems (GePG, MUSE)</li>
                                  <li><i class="fa fa-check-double text-secondary mr-3"></i> Mobile Money Wallets (MPESA,TIGOPESA, AIRTELMONEY,HALOPESA, T-PESA )</li>
                                     <li><i class="fa fa-check-double text-secondary mr-3"></i> Back office Reconciliation System</li>
                                        <li> <i class="fa fa-check-double text-secondary mr-3"></i>e-KYC platform for remote account opening</li>
                                          </ul></p>
                    <h3 class="mb-4">CUSTOMIZABLE BANKING SOLUTIONS</h3>Internet Banking
                    <!--img class="img-fluid w-50 float-right ml-4 mb-3" src="img/pbank.jpg" alt="Image"-->
                     <ul class="list-inline">
                   <li><i class="fa fa-check-double text-secondary mr-3"></i></li>
                   <li> <i class="fa fa-check-double text-secondary mr-3"></i>Agency Banking Solution & Merchant Solution using Android POS</li>
                      <li><i class="fa fa-check-double text-secondary mr-3"></i>Mobile Banking Solution – On Smart Device & USSD </li>
                         <li> <i class="fa fa-check-double text-secondary mr-3"></i>NIDA e-KYC Solution : Contactless Fingerprint Scanner using Smart Phone</li>
                            <li> <i class="fa fa-check-double text-secondary mr-3"></i>Instant Card Issuing Solution – Normal EMV Cards & VISA cards</li>
                               <li> <i class="fa fa-check-double text-secondary mr-3"></i>Instant Mobile Banking Activation Solution</li>
                                  <li><i class="fa fa-check-double text-secondary mr-3"></i>MNOs Digital Lending Solution </li>
                                     <li><i class="fa fa-check-double text-secondary mr-3"></i>Insurance Digital Lending Solution </li>

                                          </ul>
                </div> --}}