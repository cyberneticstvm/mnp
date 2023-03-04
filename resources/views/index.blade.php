@extends("base")
@section("content")
<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 bg-content text-white" data-image-src="{{ asset('assets/img/mnp/header-bg.webp') }}">
    <div class="container pt-18 pb-16" style="z-index: 5; position:relative">
    <div class="row gx-0 gy-12 align-items-center">
        <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 content text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-2 mb-5 text-white">Safe, Reliable, Affordable, and Convenient</h1>
        <p class="lead fs-lg lh-sm mb-7 pe-xl-10">We have a diverse range of vehicles in our fleet, including compact cars, midsize sedans, SUVs, luxury vehicles, Mini Vans like Toyota Hiace, which is suitable for a small group for a comfortable ride and also for transporting of goods etc.</p>
        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
            <span><a href="/contact" class="btn btn-lg btn-white rounded-pill me-2">Book Now</a></span>
            <span><a href="/contact" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></span>
        </div>
        </div>
        <!--/column -->
        <div class="col-lg-5 offset-lg-1">
        <div class="swiper-container dots-over shadow-lg" data-margin="5" data-nav="true" data-dots="true" data-autoplay="true">
            <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('assets/img/mnp/photo1.webp') }}" srcset="{{ asset('assets/img/mnp/photo1.webp') }}" class="rounded" alt="" /></div>
                <div class="swiper-slide"><img src="{{ asset('assets/img/mnp/photo2.webp') }}" srcset="{{ asset('assets/img/mnp/photo2.webp') }}" class="rounded" alt="" /></div>
                <div class="swiper-slide"><img src="{{ asset('assets/img/mnp/photo3.webp') }}" srcset="{{ asset('assets/img/mnp/photo3.webp') }}" class="rounded" alt="" /></div>
            </div>
            <!--/.swiper-wrapper -->
            </div>
            <!--/.swiper -->
        </div>
        <!-- /.swiper-container -->
        </div>
        <!-- /column -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-14 py-md-17">
    <div class="row text-center">
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <h2 class="fs-15 text-uppercase text-primary mb-3">What We Do?</h2>
        <h3 class="display-4 mb-10 px-xl-10">The service we offer is specifically designed to meet your needs.</h3>
        </div>
        <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="position-relative mb-14 mb-md-17">
        <div class="shape rounded-circle bg-soft-primary rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.5rem; z-index: 0;"></div>
        <div class="shape bg-dot primary rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
        <div class="row gx-md-5 gy-5 text-center">
        <div class="col-md-6 col-xl-3">
            <div class="card">
            <div class="card-body">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-3"> <i class="uil uil-phone-volume"></i> </div>
                <h4>Daily Deals</h4>
                <p class="mb-2">Please submit the inquiry form to get more details.</p>
                <a href="/contact" class="more hover link-primary">CONTACT</a>
            </div>
            <!--/.card-body -->
            </div>
            <!--/.card -->
        </div>
        <!--/column -->
        <div class="col-md-6 col-xl-3">
            <div class="card">
            <div class="card-body">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-3"> <i class="uil uil-shield-exclamation"></i> </div>
                <h4>Weekly Deals</h4>
                <p class="mb-2">Please submit the inquiry form to get more details.</p>
                <a href="/contact" class="more hover link-primary">CONTACT</a>
            </div>
            <!--/.card-body -->
            </div>
            <!--/.card -->
        </div>
        <!--/column -->
        <div class="col-md-6 col-xl-3">
            <div class="card">
            <div class="card-body">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-3"> <i class="uil uil-laptop-cloud"></i> </div>
                <h4>Monthly Deals</h4>
                <p class="mb-2">Please submit the inquiry form to get more details.</p>
                <a href="/contact" class="more hover link-primary">CONTACT</a>
            </div>
            <!--/.card-body -->
            </div>
            <!--/.card -->
        </div>
        <!--/column -->
        <div class="col-md-6 col-xl-3">
            <div class="card">
            <div class="card-body">
                <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-3"> <i class="uil uil-chart-line"></i> </div>
                <h4>Corporate Booking</h4>
                <p class="mb-2">Please submit the inquiry form to get more details.</p>
                <a href="/contact" class="more hover link-primary">CONTACT</a>
            </div>
            <!--/.card-body -->
            </div>
            <!--/.card -->
        </div>
        <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.position-relative -->
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-17">
        <div class="col-lg-7">
        <figure><img class="w-auto" src="{{ asset('assets/img/mnp/full-shot-adults-traveling-with-kid.webp') }}" srcset="{{ asset('assets/img/mnp/full-shot-adults-traveling-with-kid.webp') }}" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-lg-5">
        <h2 class="fs-15 text-uppercase text-primary mb-3">Why Choose Us?</h2>
        <h3 class="display-4 mb-7">We bring solutions to make travel plan easier for our customers.</h3>
        <div class="accordion accordion-wrapper" id="accordionExample">
            <div class="card plain accordion-item">
            <div class="card-header" id="headingOne">
                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Safe, Reliable, Affordable, and Convenient</button>
            </div>
            <!--/.card-header -->
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="card-body">
                <p>Our aim is to provide safe, reliable, affordable, and convenient car rental services to customers who need transportation options for both short and long-term purposes as well as in transportation of goods.</p>
                </div>
                <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
            </div>
            <!--/.accordion-item -->
            <div class="card plain accordion-item">
            <div class="card-header" id="headingTwo">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Diverse range of vehicles</button>
            </div>
            <!--/.card-header -->
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="card-body">
                <p>We have a diverse range of vehicles in our fleet, including compact cars, midsize sedans, SUVs, luxury vehicles, Mini Vans like Toyota Hiace, which is suitable for a small group for a comfortable ride and also for transporting of goods etc.</p>
                </div>
                <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
            </div>
            <!--/.accordion-item -->
            <div class="card plain accordion-item">
            <div class="card-header" id="headingThree">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Specifically designed to meet your needs</button>
            </div>
            <!--/.card-header -->
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="card-body">
                <p>We understand that each customer has their own unique preferences and requirements when it comes to renting a car. That's why we offer a variety of options to cater to different budgets and travel needs. We also provide special offers to help our customers keep their travel plans budget-friendly.</p>
                </div>
                <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
            </div>
            <!--/.accordion-item -->
        </div>
        <!--/.accordion -->
        </div>
        <!--/column -->
    </div>
    <!--/.row -->
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-md-15">
        <div class="col-lg-7 order-lg-2">
        <figure><img class="w-auto" src="{{ asset('assets/img/mnp/hiace.webp') }}" srcset="{{ asset('assets/img/mnp/hiace.webp') }}" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-lg-5">
        <h2 class="fs-15 text-uppercase text-primary mb-3">Our Solutions</h2>
        <h3 class="display-4 mb-5">We provide midsize sedans, SUVs, luxury vehicles and Mini Vans like Toyota Hiace.</h3>
        <p class="mb-6">We have a diverse range of vehicles in our fleet, including compact cars, midsize sedans, SUVs, luxury vehicles, Mini Vans like Toyota Hiace, which is suitable for a small group for a comfortable ride and also for transporting of goods etc. We also provide 1,2,3 ton trucks for pickup and delivery purposes. We also provide the delivery of the rental cars to the airport for the convenience of our customers.</p>
        <div class="row gy-3">
            <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                <li><span><i class="uil uil-check"></i></span><span>Car Rentals.</span></li>
                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Luxury Cars & SUVs.</span></li>
            </ul>
            </div>
            <!--/column -->
            <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                <li><span><i class="uil uil-check"></i></span><span>1-3 ton pickups rental.</span></li>
                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Mini Vans like Toyota Hiace.</span></li>
            </ul>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        </div>
        <!--/column -->
    </div>
    <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-gray">
    <div class="container py-14 pt-md-0 pb-md-16">
    <div class="row mt-md-n50p mb-14 mb-md-7">
        <div class="col-xl-10 mx-auto">
        <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="{{ asset('assets/img/photos/bg2.jpg') }}">
            <div class="card-body p-9 p-xl-11">
            <div class="row align-items-center counter-wrapper gy-8 text-center text-white">
                <div class="col-6 col-lg-3">
                <h3 class="counter counter-lg text-white">518+</h3>
                <p>Happy Customers</p>
                </div>
                <!--/column -->
                <div class="col-6 col-lg-3">
                <h3 class="counter counter-lg text-white">15+</h3>
                <p>Vehicles</p>
                </div>
                <!--/column -->
                <div class="col-6 col-lg-3">
                <h3 class="counter counter-lg text-white">10+</h3>
                <p>Locations</p>
                </div>
                <!--/column -->
                <!--/column -->
                <div class="col-6 col-lg-3">
                <h3 class="counter counter-lg text-white">24/7</h3>
                <p>Customer Support</p>
                </div>
                
            </div>
            <!--/.row -->
            </div>
            <!--/.card-body -->
        </div>
        <!--/.card -->
        </div>
        <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="row text-center">
        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
        <h2 class="fs-15 text-uppercase text-primary mb-3">Case Studies</h2>
        <h3 class="display-4 mb-6">Check out some of our awesome vehicles and services.</h3>
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
    <!-- /.position-relative -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-14 py-md-17">
    <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mb-14 mb-md-18">
        <div class="col-md-8 col-lg-6 position-relative">
        <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
        <figure class="rounded"><img src="{{ asset('assets/img/photos/about12.jpg') }}" srcset="{{ asset('assets/img/photos/about12.jpg') }}" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-5 offset-lg-1">
        <h2 class="fs-15 text-uppercase text-primary mb-3">Contact Us</h2>
        <h5 class="mb-6">Drop a message and our executive will reach out you shortly.</h5>
        <form method="post" action="{{ route('contact.submit') }}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <label>Full Name</label>
                    <input type="text" name="name" class="form-control form-control-sm" placeholder="Full Name" required/>
                    @error('name')
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                    @enderror
                </div>
                <div class="col-6 mt-3">
                    <label>Mobile</label>
                    <input type="text" name="mobile" class="form-control form-control-sm" placeholder="Mobile" required/>
                    @error('mobile')
                    <small class="text-danger">{{ $errors->first('mobile') }}</small>
                    @enderror
                </div>
                <div class="col-6 mt-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" required/>
                    @error('email')
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                    @enderror
                </div>
                <div class="col-12 mt-3">
                    <label>Message</label>
                    <textarea class="form-control form-control-sm" name="message" placeholder="Message" required></textarea>
                    @error('message')
                    <small class="text-danger">{{ $errors->first('message') }}</small>
                    @enderror
                </div>
                <div class="col-12 mt-3 text-end">
                    <button type="submit" class="btn btn-primary btn-submit btn-sm">Submit</button>
                </div>
            </div>
        </form>
        <!--/.row -->
        </div>
        <!--/column -->
    </div>
    <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-gray">
    <div class="container py-14 pt-md-0">
        <div class="row mt-md-n50p text-white text-center">
            <div class="col-xl-10 mx-auto mb-14 mb-lg-n6">
                <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="./assets/img/photos/bg2.jpg">
                    <div class="card-body p-9 p-xl-12">
                    <div class="row gx-0">
                        <div class="col-xxl-9 mx-auto">
                        <div class="swiper-container dots-light dots-closer mb-6" data-margin="30" data-dots="true">
                            <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                <span class="ratings five mb-3"></span>
                                <blockquote class="border-0 fs-lg mb-2">
                                    <p>“Vivamus sagittis lacus augue laoreet rutrum faucibus auctor vestibulum ligula porta felis, euismod semper cras justo odio consectetur.”</p>
                                    <div class="blockquote-details justify-content-center text-center">
                                    <div class="info ps-0">
                                        <h5 class="mb-1 text-white">Coriss Ambady</h5>
                                        <p class="mb-0">Financial Analyst</p>
                                    </div>
                                    </div>
                                </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                <span class="ratings five mb-3"></span>
                                <blockquote class="border-0 fs-lg mb-2">
                                    <p>“Vivamus sagittis lacus augue laoreet rutrum faucibus auctor vestibulum ligula porta felis, euismod semper cras justo odio consectetur.”</p>
                                    <div class="blockquote-details justify-content-center text-center">
                                    <div class="info ps-0">
                                        <h5 class="mb-1 text-white">Cory Zamora</h5>
                                        <p class="mb-0">Marketing Specialist</p>
                                    </div>
                                    </div>
                                </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                <span class="ratings five mb-3"></span>
                                <blockquote class="border-0 fs-lg mb-2">
                                    <p>“Vivamus sagittis lacus augue laoreet rutrum faucibus auctor vestibulum ligula porta felis, euismod semper cras justo odio consectetur.”</p>
                                    <div class="blockquote-details justify-content-center text-center">
                                    <div class="info ps-0">
                                        <h5 class="mb-1 text-white">Nikolas Brooten</h5>
                                        <p class="mb-0">Sales Manager</p>
                                    </div>
                                    </div>
                                </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                            </div>
                            <!--/.swiper-wrapper -->
                            </div>
                            <!--/.swiper -->
                        </div>
                        <!-- /.swiper-container -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    </div>
                    <!--/.card-body -->
                </div>
            <!--/.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@endsection