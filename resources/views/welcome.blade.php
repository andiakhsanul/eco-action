<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EcoAction</title>

    <!-- bootstrap core css -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" /> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{asset('assets/images/logo ecoact.png')}}" type="image/x-icon">
      <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
</head>

<body>
  <div class="landing_area">
    <!-- header section strats -->
    <div class="landing_bg_box">
      <div class="img-box">
        <img src="{{asset('assets/images/web bg 2.png')}}" alt="">
      </div>
    </div>

    <header class="header_section">
      <div class="header">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
              <span>
                EcoAction
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>

            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#about"> About us</a>
                </li> --}}
                <li class="nav-item">
                  <a class="nav-link" href="#feedback"> Feedback</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="{{route('contact')}}">Contact us</a>
                </li> -->
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Nurturing Nature <br>
                      <span>
                        Preserving Our Future
                      </span>
                    </h1>
                    <p>
                      By protecting and preserving the environment, we are safeguarding the very foundation of life
                      itself. Sustainable living is not just a choice; it's our responsibility. Let's embrace this duty
                      with determination, knowing that our actions today shape the world for generations to come.
                      Together, let's nurture our planet, ensuring a future where nature thrives and all life flourishes
                      in harmony.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('login')}}" class="btn-1"> Sign In > </a>
                      <a href="{{route('donate')}}" class="btn-2">Donate now > </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Nurturing Nature <br>
                      <span>
                        Preserving Our Future
                      </span>
                    </h1>
                    <p>
                      By protecting and preserving the environment, we are safeguarding the very foundation of life
                      itself. Sustainable living is not just a choice; it's our responsibility. Let's embrace this duty
                      with determination, knowing that our actions today shape the world for generations to come.
                      Together, let's nurture our planet, ensuring a future where nature thrives and all life flourishes
                      in harmony.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('login')}}" class="btn-1"> Sign In > </a>
                      <a href="{{route('donate')}}" class="btn-2">Donate now > </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Nurturing Nature <br>
                      <span>
                        Preserving Our Future
                      </span>
                    </h1>
                    <p>
                      By protecting and preserving the environment, we are safeguarding the very foundation of life
                      itself. Sustainable living is not just a choice; it's our responsibility. Let's embrace this duty
                      with determination, knowing that our actions today shape the world for generations to come.
                      Together, let's nurture our planet, ensuring a future where nature thrives and all life flourishes
                      in harmony.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('login')}}" class="btn-1"> Sign In > </a>
                      <a href="{{route('donate')}}" class="btn-2">Donate now > </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container idicator_container">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img_container">
            <div class="img-box">
              <img src="{{asset('assets/images/info.jpg')}}" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0" id="about">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                Who Are We?
              </h2>
            </div>
            <p>
              Welcome to EcoAction Community, where individuals unite with a shared mission: to drive positive change
              for our environment through collective action. Here, we believe in the power of small steps leading to
              significant impact. Whether it's organizing cleanups, promoting recycling, or advocating for sustainable
              living, we're committed to creating a greener, healthier planet. In our community, every voice matters,
              and every action counts. Through collaboration and support, we inspire and empower each other to make
              meaningful contributions to environmental conservation. Join us in our journey to create a brighter, more
              sustainable future for all.
            </p>
            <div class="btn-box">
              <a href="{{route('volunteer')}}">
                More Ways You Can Help >
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- service section -->
  <section class=" slider_section ">
    @if($educations->isNotEmpty())
        <!-- Service section -->
        <section class="service_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>What's New?</h2>
                </div>
                <div class="row">
                    @foreach($educations->take(3) as $education)
                    <div class="col-md-4">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/' . $education->image) }}" style="margin-left:auto; margin-right: auto;" alt="{{ $education->title }}">
                            </div>
                            <div class="detail-box" style="color: black;">
                                <h6>{{ $education->title }}</h6>
                                <p>{{ $education->description }}</p>
                                <a href="">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif


    <!-- end service section -->


    <!-- client section -->

    <section class="client_section layout_padding">
      <div class="container" id="feedback">
        <div class="heading_container heading_center">
          <h2 style="color: black;">
            What is says our clients
          </h2>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="box">
                <div class="img-box">
                  <img src="{{asset('assets/images/evita.png')}}" alt="">
                </div>
                <div class="detail-box">
                  <h4>
                    Agatha Christie
                  </h4>
                  <p style="color: black;">
                    Great experience, Very lovely
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="box">
                <div class="img-box">
                  <img src="{{asset('assets/images/cili.png')}}" alt="">
                </div>
                <div class="detail-box">
                  <h4>
                    Chloe Zefanya
                  </h4>
                  <p style="color: black;">
                    I had a great experience when join the volunteer, the people is lovely and very educative
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="box">
                <div class="img-box">
                  <img src="{{asset('assets/images/client.png')}}" alt="">
                </div>
                <div class="detail-box">
                  <h4>
                    Minim Veniam
                  </h4>
                  <p style="color: black;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="box">
                <div class="img-box">
                  <img src="{{asset('assets/images/client.png')}}" alt="">
                </div>
                <div class="detail-box">
                  <h4>
                    Minim Veniam
                  </h4>
                  <p style="color: black;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="box">
                <div class="img-box">
                  <img src="{{asset('assets/images/client.png')}}" alt="">
                </div>
                <div class="detail-box">
                  <h4>
                    Minim Veniam
                  </h4>
                  <p style="color: black;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <i class="fa fa-angle-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- end client section -->

    <!-- contact section -->



    <!-- end contact section -->


    <!-- info section -->
    <section class="info_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <a class="navbar-brand" href="index.php">
                <span>
                  EcoAction
                </span>
              </a>
              <p>
                Nurturing Nature, Preserving Our Future
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_links">
              <h5>
                Useful Link
              </h5>
              <ul>
                <li>
                  <a href="https://www.apple.com/app-store/">
                    <img src="{{asset('assets/images/appstore.png')}}" style="width: 200px; height: 60px ;"alt="">
                  </a>
                </li>
                <li>
                <li>
                  <a href="https://play.google.com/store/search?q=play+store&c=apps">
                    <img src="{{asset('assets/images/playstore.png')}}" style="width: 200px; height: 60px ;" alt="">
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_info">
              <h5>
                Contact Us
              </h5>
            </div>
            <div class="info_contact">
              <a href="" class="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Fakultas Sains dan Teknologi, Universitas Airlangga
                </span>
              </a>
              <a href="" class="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +628 7074537213
                </span>
              </a>
              <a href="" class="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  eduaction@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_form ">
              <h5>
                Social Media
              </h5>
              </form>
              <div class="social_box a">
                <a href="https://www.facebook.com/">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="https://twitter.com/?lang=en-id">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </div>
              <div class="social_box b">
                <a href="https://www.youtube.com/">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <footer class="container-fluid footer_section">
      <p>
        &copy; <span id="currentYear"></span> Design by Evita and Sisil
      </p>
    </footer>
    <!-- footer section -->
</body>

</html>
</html>
