@extends("base")
@section("content")
<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 bg-content text-white" data-image-src="{{ asset('assets/img/mnp/header-bg.webp') }}">
    <div class="container pt-18 pb-16" style="z-index: 5; position:relative">
    <div class="row gx-0 gy-12 align-items-center">
        <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 content text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-2 mb-5 text-white">Crafting project specific solutions with expertise.</h1>
        <p class="lead fs-lg lh-sm mb-7 pe-xl-10">We’re a creative company that focuses on establishing long-term relationships with customers.</p>
        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
            <span><a href="#" class="btn btn-lg btn-white rounded-pill me-2">Book Now</a></span>
            <span><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></span>
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
                <h4>24/7 Support</h4>
                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                <a href="#" class="more hover link-primary">Learn More</a>
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
                <h4>Secure Payments</h4>
                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                <a href="#" class="more hover link-primary">Learn More</a>
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
                <h4>Daily Updates</h4>
                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                <a href="#" class="more hover link-primary">Learn More</a>
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
                <h4>Market Research</h4>
                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                <a href="#" class="more hover link-primary">Learn More</a>
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
        <figure><img class="w-auto" src="./assets/img/illustrations/i11.png" srcset="./assets/img/illustrations/i11@2x.png 2x" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-lg-5">
        <h2 class="fs-15 text-uppercase text-primary mb-3">Why Choose Us?</h2>
        <h3 class="display-4 mb-7">We bring solutions to make life easier for our clients.</h3>
        <div class="accordion accordion-wrapper" id="accordionExample">
            <div class="card plain accordion-item">
            <div class="card-header" id="headingOne">
                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Professional Design </button>
            </div>
            <!--/.card-header -->
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                </div>
                <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
            </div>
            <!--/.accordion-item -->
            <div class="card plain accordion-item">
            <div class="card-header" id="headingTwo">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Top-Notch Support </button>
            </div>
            <!--/.card-header -->
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                </div>
                <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
            </div>
            <!--/.accordion-item -->
            <div class="card plain accordion-item">
            <div class="card-header" id="headingThree">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Header and Slider Options </button>
            </div>
            <!--/.card-header -->
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
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
        <figure><img class="w-auto" src="./assets/img/illustrations/i17.png" srcset="./assets/img/illustrations/i17@2x.png 2x" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-lg-5">
        <h2 class="fs-15 text-uppercase text-primary mb-3">Our Solutions</h2>
        <h3 class="display-4 mb-5">We make your spending stress-free for you to have the perfect control.</h3>
        <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus.</p>
        <div class="row gy-3">
            <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                <li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare. Curabitur blandit.</span></li>
                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare.</span></li>
            </ul>
            </div>
            <!--/column -->
            <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                <li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis.</span></li>
                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus vel augue rutrum.</span></li>
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
        <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="./assets/img/photos/bg2.jpg">
            <div class="card-body p-9 p-xl-11">
            <div class="row align-items-center counter-wrapper gy-8 text-center text-white">
                <div class="col-6 col-lg-3">
                <h3 class="counter counter-lg text-white">7518</h3>
                <p>Completed Projects</p>
                </div>
                <!--/column -->
                <div class="col-6 col-lg-3">
                <h3 class="counter counter-lg text-white">3472</h3>
                <p>Happy Customers</p>
                </div>
                <!--/column -->
                <div class="col-6 col-lg-3">
                <h3 class="counter counter-lg text-white">2184</h3>
                <p>Expert Employees</p>
                </div>
                <!--/column -->
                <div class="col-6 col-lg-3">
                <h3 class="counter counter-lg text-white">4523</h3>
                <p>Awards Won</p>
                </div>
                <!--/column -->
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
        <h3 class="display-4 mb-6">Check out some of our awesome projects with creative ideas and great design.</h3>
        </div>
        <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="position-relative">
        <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
        <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
        <div class="swiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="item-inner">
                <article>
                    <div class="card">
                    <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b4.jpg" alt="" /></a>
                        <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                        </figcaption>
                    </figure>
                    <div class="card-body">
                        <div class="post-header">
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ligula tristique quis risus</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                        <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Coding</a></li>
                        </ul>
                        <!-- /.post-meta -->
                    </div>
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
                    <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b5.jpg" alt="" /></a>
                        <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                        </figcaption>
                    </figure>
                    <div class="card-body">
                        <div class="post-header">
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Nullam id dolor elit id nibh</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                        <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2022</span></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Workspace</a></li>
                        </ul>
                        <!-- /.post-meta -->
                    </div>
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
                    <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b6.jpg" alt="" /></a>
                        <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                        </figcaption>
                    </figure>
                    <div class="card-body">
                        <div class="post-header">
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ultricies fusce porta elit</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                        <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2022</span></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Meeting</a></li>
                        </ul>
                        <!-- /.post-meta -->
                    </div>
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
                    <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b7.jpg" alt="" /></a>
                        <figcaption>
                        <h5 class="from-top mb-0">Read More</h5>
                        </figcaption>
                    </figure>
                    <div class="card-body">
                        <div class="post-header">
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Morbi leo risus porta eget</a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                        <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                        <ul class="post-meta d-flex mb-0">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2022</span></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Business Tips</a></li>
                        </ul>
                        <!-- /.post-meta -->
                    </div>
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
        <a href="./assets/media/movie.mp4" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox data-gallery="about"><i class="icn-caret-right"></i></a>
        <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
        <figure class="rounded"><img src="./assets/img/photos/about12.jpg" srcset="./assets/img/photos/about12@2x.jpg 2x" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-5 offset-lg-1">
        <h2 class="fs-15 text-uppercase text-primary mb-3">Who Are We?</h2>
        <h3 class="display-4 mb-6">Company that believes in the power of creative strategy.</h3>
        <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
        <div class="row gy-3 gx-xl-8">
            <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                <li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur blandit tempus.</span></li>
                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare donec elit.</span></li>
            </ul>
            </div>
            <!--/column -->
            <div class="col-xl-6">
            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                <li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis euismod.</span></li>
                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus faucibus amet euismod.</span></li>
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
    <div class="container py-14 pt-md-0 pb-md-17">
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