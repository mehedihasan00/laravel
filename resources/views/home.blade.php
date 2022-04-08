@extends('layouts.master_home')
<!-- ======= About Us Section ======= -->
@section('home_content')
<section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>About Us</strong></h2>
        </div>

        <div class="row content">
            <div class="col-lg-6" data-aos="fade-right">
            <h2>Eum ipsam laborum deleniti velitena</h2>
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
            </p>
            <ul>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
            </ul>
            <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
            </p>
            </div>
        </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Ecademical Services</strong></h2>
            <p>Laborum repudiandae omnis voluptatum consequatur mollitia ea est voluptas ut</p>
        </div>
        @foreach($categories as $category)
        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
                <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <!-- <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path> -->
                </svg>
                <i class="bx bx-layer"></i>
                </div>
                <h4><a href="">{{ $category->category_name }} </a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
            </div>
            @endforeach

        </div>

        </div>
</section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
            <h2>Final Year Student's Projects</h2>
            </div>

            <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="{{asset('fontend/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <a href="{{asset('fontend/assets/img/portfolio/portfolio-1.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="{{asset('fontend/assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="{{asset('fontend/assets/img/portfolio/portfolio-2.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="{{asset('fontend/assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <a href="{{asset('fontend/assets/img/portfolio/portfolio-3.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="{{asset('fontend/assets/img/portfolio/portfolio-4.jpg')}}assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <a href="{{asset('fontend/assets/img/portfolio/portfolio-4.jpg')}}fontend/assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="{{asset('fontend/assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <a href="{{asset('fontend/assets/img/portfolio/portfolio-5.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="{{asset('fontend/assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <a href="{{asset('fontend/assets/img/portfolio/portfolio-6.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="{{asset('fontend/assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <a href="{{asset('fontend/assets/img/portfolio/portfolio-7.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="{{asset('fontend/assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <a href="{{asset('fontend/assets/img/portfolio/portfolio-8.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="{{asset('fontend/assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="{{asset('fontend/assets/img/portfolio/portfolio-9.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            </div>

        </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Faculties & Alumnie</h2>
            </div>

            <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

            @foreach($feculties as $feculty)
            <div class="col-lg-3 col-md-4 col-6">
                <div class="client-logo">
                    <img src="{{ $feculty->feculty_image }}" class="img-fluid" alt="">
                    <span>{{ $feculty->feculty_name }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- End Our Clients Section -->

@endsection