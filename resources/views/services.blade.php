@extends("base")
@section("content")
<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 bg-content text-white" data-image-src="{{ asset('assets/img/mnp/header-bg.webp') }}">
    <div class="container pt-18 pb-16" style="z-index: 5; position:relative">
    <div class="row gx-0 gy-12 align-items-center">
        <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 content text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
            
        </div>
        <div class="col-lg-5 offset-lg-1">
            <h1 class="display-2 mb-5 text-white">Our Services</h1>
            <p class="lead fs-lg lh-sm mb-7 pe-xl-10">At M.N.P Rentals, we offer a wide selection of cars to choose from, including luxury vehicles, SUVs, sedans, Mini Vans like Toyota Hiace which is suitable for a small group for a comfortable ride and also for transporting of goods. All of our cars are regularly serviced and maintained to ensure that you have a safe and comfortable driving experience.</p>
            <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                <span><a href="#" class="btn btn-lg btn-white rounded-pill me-2">Book Now</a></span>
                <span><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></span>
            </div>
        </div>
    </div>    
    <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<section class="wrapper mt-5">
    <div class="container py-14 pt-md-0 pb-md-16">
        <div class="row">
        <div class="row">
        <div class="col-lg-12 col-xl-12 col-xxl-12 mx-auto">
        <h2 class="fs-15 text-uppercase text-primary mb-3 text-center">Our Services</h2>
        <h3 class="display-4 mb-6 text-center">Check out some of our awesome vehicles and services.</h3>
        <p>Here, we understand that every customer has their own unique preferences and requirements when it comes to renting a car. That's why we offer a diverse range of vehicles that cater to different budgets and travel needs. Our fleet includes compact cars, midsize sedans, SUVs, and luxury vehicles, all of which are well-maintained and regularly serviced to ensure optimal performance and safety. Our fleet also include Toyota Hiace which is suitable for small groups of people to travel together in comfort.</p>
        <p>We also provide special offers with which we will help to keep your travel plans budget friendly.</p>
        <p>We at M.N.P Rentals also provide delivery of our rental cars to the airport for the ease of our customers.</p>
        <p>We take great pride in our exceptional customer service, and our team of friendly and knowledgeable professionals is always on hand to assist customers with any questions or concerns they may have. Whether you need help choosing the right car, navigating local traffic, or planning your travel itinerary, our staff is here to make your rental experience as seamless and stress-free as possible.</p>
        </div>
        <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="position-relative">
        <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
        <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-autoplay="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
        <div class="swiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="item-inner">
                <article>
                    <div class="card">
                    <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="{{ asset('assets/img/mnp/std-car.webp') }}" alt="" /></a>
                        <figcaption>
                        <h5 class="from-top mb-0"></h5>
                        </figcaption>
                    </figure>
                    <div class="card-body">
                        <div class="post-header">
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Standard</a></h2>
                        </div>
                    </div>
                    <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                </article>
                <!-- /article -->
                </div>
                <!-- /.item-inner -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
                <div class="item-inner">
                <article>
                    <div class="card">
                    <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="{{ asset('assets/img/mnp/luxury-car.webp') }}" alt="" /></a>
                        <figcaption>
                        <h5 class="from-top mb-0"></h5>
                        </figcaption>
                    </figure>
                    <div class="card-body">
                        <div class="post-header">
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Luxury</a></h2>
                        </div>
                    </div>
                    <!--/.card-body -->
                    <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </article>
                <!-- /article -->
                </div>
                <!-- /.item-inner -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
                <div class="item-inner">
                <article>
                    <div class="card">
                    <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="{{ asset('assets/img/mnp/hiace-car.webp') }}" alt="" /></a>
                        <figcaption>
                        <h5 class="from-top mb-0"></h5>
                        </figcaption>
                    </figure>
                    <div class="card-body">
                        <div class="post-header">
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Hiace</a></h2>
                        </div>
                    </div>
                    <!--/.card-body -->
                    <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </article>
                <!-- /article -->
                </div>
                <!-- /.item-inner -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
                <div class="item-inner">
                <article>
                    <div class="card">
                    <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="{{ asset('assets/img/mnp/pickup.webp') }}" alt="" /></a>
                        <figcaption>
                        <h5 class="from-top mb-0"></h5>
                        </figcaption>
                    </figure>
                    <div class="card-body">
                        <div class="post-header">
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">1-3 ton Pickups</a></h2>
                        </div>
                    </div>
                    <!--/.card-body -->
                    <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </article>
                <!-- /article -->
                </div>
                <!-- /.item-inner -->
            </div>
            <!--/.swiper-slide -->
            </div>
            <!--/.swiper-wrapper -->
        </div>
        <!--/.swiper -->
        </div>
        <!-- /.swiper-container -->
    </div>
        </div>
    </div>
    <!-- /.container -->
</section>
@endsection