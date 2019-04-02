@extends('layouts.app') 
@section('content')


<main>
  <section class="heading-banner">
      <img class="img-fluid" src="{{asset('img/front/Banner.jpg')}}" alt="">
    <div class="logo-container">
        <img src="{{asset('img/front/CBR_Logo.jpg')}}" alt="">

    </div>
  </section>

  <section class="section2">
    <div class="row">
      <div class="col-12 col-md-8 d-flex flex-column justfiy-content-center align-items-center">
        <p>
          Coined as one of the superfoods of the era, Flaxseeds are loaded with nutrients, such as Omega-3 fatty acids, lignans and
          dietary fiber, and offer multiple health benefits including weight loss, lowering cholesterol levels, alleviating
          allergic reactions and reducing the risk of cancer.
        </p>
        <p>
            Take advantage of all these benefits by adding Flaxseeds to your diet daily!  
        </p>
      </div>
      <div class="col-12 col-md-4 d-flex justify-content-end">
        <img src="{{asset('img/front/img1.jpg')}}" alt="">
      </div>
    </div>
  </section>

  <div class="comming-soon w-100 text-center">
    <h1>website coming soon</h1>
  </div>
  <section class="section3">
    <div class="row">
      <div class="col-12 col-md-5 order-1 order-md-2 d-flex justfiy-content-center align-items-center">
        <p>
          At Canada B&R, all of our Flaxseeds products are made with cold-pressed techniques which helps to retain nutrients for added
          benefit.
        </p>
      </div>
      <div class="col-12 col-md-7 order-2 order-md-1 d-flex justify-content-end">
        <img src="{{asset('img/front/img2.jpg')}}" alt="">

      </div>
    </div>
  </section>

  <section class="section4">
    <div class="row">
      <div class="col-12 col-md-7 d-flex justfiy-content-center align-items-center">
        <p>
            Our website with online shopping and recipes is coming soon. Please contact our office at 
            <a href="tel:604-271-8618">604.271.8618</a> or <a href="mailto:info@canbrfood.com">info@canbrfood.com</a>.
        </p>
      </div>
      <div class="col-12 col-md-5 d-flex justify-content-end">
        <img src="{{asset('img/front/img3.jpg')}}" alt="">

      </div>

    </div>
    <img class="products-img" src="{{asset('img/front/Products.png')}}" alt="">

  </section>

  <section class="section5">
    <div class="row">
      <div class="col-12 col-md-7">
        <p>
          Canada B&R is dedicated to providing premium quality Canadian Flaxseed products to consumers.
        </p>
      </div>
      <div class="col-12 col-md-5">

        <img class="scope-img" src="{{asset('img/front/Scope.png')}}" alt="">
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-content d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
      <h1>Canada B&R</h1>

      <div class="text-left text-md-right">


        <span><img class="scope-img" src="{{asset('img/front/canadaFlag.png')}}" alt="">Product of Canada</span>
        <p> 
         <a href="https://www.google.com/maps/place/11860+Hammersmith+Way+Unit+168,+Richmond,+BC+V7A+5G1/@49.12859,-123.1016987,17z/data=!3m1!4b1!4m5!3m4!1s0x5485e072f407a52d:0x371d9513b577d2fa!8m2!3d49.12859!4d-123.09951" target="_blank">
          168-11860 Hammersmith Way, Richmond, BC Canada
        </a> 
        Tel.
          <a href="tel:604-271-8618">
         1.604.271.8618
      </a>
        </p>
      </div>
    </div>
    <p class="copy-right text-center text-md-right"> &copy; 2019 Canada B&R. All rights reserved.
    </p>

  </footer>


</main>
@endsection