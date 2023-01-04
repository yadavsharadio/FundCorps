@extends('masterLayout/master')
@push('title')
  <title>home</title>
@endpush
@section('content')
<!-- Carousel Section -->
<link rel="stylesheet" href="{{url('carousel/carousel.css')}}">
<div id="carouselExampleInterval" class="carousel slide carouselcss" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="100">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="100%" height="100vh" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="10%" y="50%" fill="#555" dy=".3em">Title1</text><text x="10%" y="60%" fill="#555" dy=".3em">subtitle</text></svg>
            </div>
            <div class="carousel-item" data-bs-interval="200">
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="100%" height="100vh" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="10%" y="50%" fill="#444" dy=".3em">Title2</text><text x="10%" y="60%" fill="#555" dy=".3em">subtitle</text></svg>
            </div>
            <div class="carousel-item" data-bs-interval="300" >
              <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="100%" height="100vh" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="10%" y="50%" fill="#333" dy=".3em">Title3</text><text x="10%" y="60%" fill="#555" dy=".3em">subtitle</text></svg>
            </div>
            <div class="signinform">

            </div>
          </div>
         
        </div>
  
  <!-- /Carousel Section -->

  <!-- Counter Section -->
  <link rel="stylesheet" href="{{url('counter/counter.css')}}">
  <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-3 mx-auto mt-3">
                <p id="number1" class="number">2600</p>
                <span></span>
                <p class="labelc">Enterprenurs</p>
            </div>
            <div class="col-md-3 mx-auto mt-3">
               <p id="number2" class="number">7000</p>
                <span></span>
                <p class="labelc">Campaigns</p>
            </div>
            <div class="col-md-3 mx-auto mt-3">
                <p id="number3" class="number">1Million</p>
                <span></span>
                <p class="labelc">Lives Impacted</p>
            </div>
            <div class="col-md-3 mx-auto mt-3">
                <p id="number4" class="number">26</p>
                <span></span>
                <p class="labelc">Cities</p>
            </div>
        </div>
    </div>
    <script src="{{url('counter/counter.js')}}"></script>
  <!-- /Counter Section -->

  <!-- Clients and ecosystem  -->
  <link rel="stylesheet" href="{{url('client/client.css')}}">
  <div class="container text-center">
        <h1 class="mt-5">Clients and eco-system partners</h1>
        <div class="row mt-3 ">
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 1</p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 2</p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 3</p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 4</p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-2col-xs-12 col-md-6 col-lg-2">
            <p class="clientlogos">image 5</p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 6</p>
        </div>
        </div>

        <div class="row mt-3">
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 1</p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 2</p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 3</p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 4</p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 5</p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 6</p>
        </div>
        </div>

        <div class="row mt-3 mb-5">
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 1</p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 2</p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 3</p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 4</p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 5</p>
        </div>
        <div class="col-xs-6 col-md-6 col-lg-2">
            <p class="clientlogos">image 6</p>
        </div>
        </div>
    </div>
  <!-- /Clients and ecosystem  -->
  
  <!-- testimonals -->
    <link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/    bootstrap.min.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css')}}"crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url('testimonals/testimonals.css')}}">
  <div class="testi-wrap">
        <div class="container">
            <div class="row">
                <div id="testimonal-slider" class="owl-carousel">
                    <!-- 1 -->
                    <div class="testi-in">
                        <div class="testi-in-content">
                            <h1>heading</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat animi eos, dicta dolorem doloribus nihil, ratione, iure ullam iusto quaerat </p>
                        </div>
                        <div class="testi-in-image">
                            <img src="{{url('testimonals/THANK.png')}}" alt="thankyou">
                            <h2>Client Name
                            <br>
                            <span>designation</span>
                            </h2>
                        </div>
                    </div>
                    <!-- /1 -->
                    <!-- 2 -->
                    <div class="testi-in">
                        <div class="testi-in-content">
                            <h1>heading</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat animi eos, dicta dolorem doloribus nihil, ratione, iure ullam iusto quaerat </p>
                        </div>
                        <div class="testi-in-image">
                            <img src="{{url('testimonals/THANK.png')}}" alt="thankyou">
                            <h2>Client Name
                            <br>
                            <span>designation</span>
                            </h2>
                        </div>
                    </div>
                    <!-- /2 -->
                    <!-- 3 -->
                    <div class="testi-in">
                        <div class="testi-in-content">
                            <h1>heading</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat animi eos, dicta dolorem doloribus nihil, ratione, iure ullam iusto quaerat </p>
                        </div>
                        <div class="testi-in-image">
                            <img src="{{url('testimonals/THANK.png')}}" alt="thankyou">
                            <h2>Client Name
                            <br>
                            <span>designation</span>
                            </h2>
                        </div>
                    </div>
                    <!-- /3 -->
                    <!-- 4 -->
                    <div class="testi-in">
                        <div class="testi-in-content">
                            <h1>heading</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat animi eos, dicta dolorem doloribus nihil, ratione, iure ullam iusto quaerat </p>
                        </div>
                        <div class="testi-in-image">
                            <img src="{{url('testimonals/THANK.png')}}" alt="thankyou">
                            <h2>Client Name
                            <br>
                            <span>designation</span>
                            </h2>
                        </div>
                    </div>
                    <!-- /4 -->
                    <!-- 5 -->
                    <div class="testi-in">
                        <div class="testi-in-content">
                            <h1>heading</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat animi eos, dicta dolorem doloribus nihil, ratione, iure ullam iusto quaerat </p>
                        </div>
                        <div class="testi-in-image">
                            <img src="{{url('testimonals/THANK.png')}}" alt="thankyou">
                            <h2>Client Name
                            <br>
                            <span>designation</span>
                            </h2>
                        </div>
                    </div>
                    <!-- /5 -->
                    <!-- 6 -->
                    <div class="testi-in">
                        <div class="testi-in-content">
                            <h1>heading</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat animi eos, dicta dolorem doloribus nihil, ratione, iure ullam iusto quaerat </p>
                        </div>
                        <div class="testi-in-image">
                            <img src="{{url('testimonals/THANK.png')}}" alt="thankyou"/>
                            <h2>Client Name
                            <br>
                            <span>designation</span>
                            </h2>
                        </div>
                    </div>
                    <!-- /6 -->
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('https://code.jquery.com/jquery-1.12.4.js')}}" crossorigin="anonymous"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js')}}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{url('testimonals/testimonals.js')}}"></script>
    <!-- /testimonals -->

   <!-- hall of fame and products -->
   <link rel="stylesheet" href="{{url('landingtabs/tabs.css')}}">
   <div class="container-fluid tabdiv">
        <div class="row">
            <div class="col-12 tabButtons mt-3">
                <button class="tabButton" onclick="showPanel(0,'#FFF2EB')">Buy Products</button>
                <button class="tabButton" onclick="showPanel(1,'#FFF2EB')">Hall of Fame</button>
            </div>
            <div class="col-12 tabPanels">
                <div class="tabPanel"><h1>Buy Products</h1></div>
                <div class="tabPanel"><h1>Hall of Fame tab</h1></div>
            </div>
        </div>
    </div>
    <script src="{{url('landingtabs/tabs.js')}}"></script>
    <!-- /hall of fame and products -->


@endsection