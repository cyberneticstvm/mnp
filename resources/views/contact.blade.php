@extends("base")
@section("content")
<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 bg-content text-white" data-image-src="{{ asset('assets/img/mnp/header-bg.webp') }}">
    <div class="container pt-18 pb-16" style="z-index: 5; position:relative">
    <div class="row gx-0 gy-12 align-items-center">
        <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 content text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
            
        </div>
    </div>    
    <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<section class="wrapper mt-5">
    <div class="container py-14 pt-md-0 pb-md-16">
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-xxl-12 mx-auto">
                <h2 class="fs-15 text-uppercase text-primary mb-3 text-center">CONTACT US</h2>
                <h3 class="display-4 mb-6 text-center">Drop a message and our executive will reach out you shortly.</h3>
            </div>
            <!-- /column -->
        </div>
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
    </div>
    <!-- /.container -->
</section>
@endsection