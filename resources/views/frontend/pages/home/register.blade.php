@extends('frontend.app')
@section('content')
    @include('frontend.partials.breadcrumb', ['name' => 'register'])

    <!--section start-->
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>create account</h3>
                    <div class="theme-card">
                        <form class="theme-form">
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">First Name</label>
                                    <input type="text" class="form-control" id="fname" placeholder="First Name"
                                        required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Last Name</label>
                                    <input type="password" class="form-control" id="lname" placeholder="Last Name"
                                        required="">
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-6">
                                    <label for="email">email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email"
                                        required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Password</label>
                                    <input type="password" class="form-control" id="review"
                                        placeholder="Enter your password" required="">
                                </div><a href="#" class="btn btn-solid w-auto">create Account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
@endsection
