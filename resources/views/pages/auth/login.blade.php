@extends('pages.auth.index')

@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <section class="p-0 d-flex align-items-center position-relative overflow-hidden">
            <div class="container-fluid">
                <div class="row">
                    <!-- left -->
                    <div
                        class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
                        <div class="p-3 p-lg-5">
                            <!-- Title -->
                            <div class="text-center">
                                <h2 class="fw-bold fs-3">به سایت DevGym خوش آمدید</h2>
                                <p class="mb-0 h6 fw-light">امروز اون شنبه ای هست که قول دادی شروع کنی!</p>
                            </div>
                            <!-- SVG Image -->
                            <img src="{{ asset('assets/images/element/02.svg') }}" class="mt-5" alt="">
                            <!-- Info -->
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="col-12 col-lg-6 m-auto">
                        <div class="row my-5">
                            <div class="col-sm-10 col-xl-8 m-auto">
                                <!-- Title -->
                                @error('user_auth')
                                <div class="alert alert-warning" role="alert">
                                    <h5 class="alert-heading">توجه!</h5>
                                    <p>{{$message}}</p>
                                    <hr>
                                    <p class="mb-0">دوره های این سایت تمام شون رایگانه ثبت نام کن یا اگه ثبت نام کردی وارد شو بعدش میتونی از کلیه امکانات سایت استفاده کنی 😇</p>
                                </div>
                                @enderror

                                <span class="mb-0 fs-1">👋</span>
                                <h1 class="fs-4">ورود به حساب کاربری</h1>
                                <p class="mb-4">از دیدن شما خوشحالم! لطفا با حساب کاربری خود وارد شوید.</p>

                                <!-- Form START -->
                                <form method="post" action="{{route('login_post')}}">
                                    @csrf
                                    <!-- Email -->
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label">ایمیل *</label>
                                        <div class="input-group input-group-lg">
                                            <span
                                                class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="bi bi-envelope-fill"></i></span>
                                            <input name="email" type="email" class="form-control border-0 bg-light rounded-end ps-1"
                                                   placeholder="***@gmail.com" id="exampleInputEmail1">
                                        </div>
                                        @error('email')
                                        <span class="badge bg-danger bg-opacity-10 text-danger mt-2">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- Password -->
                                    <div class="mb-4">
                                        <label for="inputPassword5" class="form-label">رمز عبور *</label>
                                        <div class="input-group input-group-lg">
                                            <span
                                                class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="fas fa-lock"></i></span>
                                            <input name="password" type="password"
                                                   class="form-control border-0 bg-light rounded-end ps-1"
                                                   placeholder="********" id="inputPassword5">
                                        </div>
                                        @error('password')
                                        <span class="badge bg-danger bg-opacity-10 text-danger mt-2">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- Check box -->
                                    <div class="mb-4 d-flex justify-content-between mb-4">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">مرا به خاطر
                                                بسپار</label>
                                        </div>
                                        <div class="text-primary-hover">
                                            <a href="{{route('forget-password')}}" class="text-secondary">
                                                <u>رمز خود را فراموش کرده اید؟</u>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="align-items-center mt-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary mb-0" type="submit">ورود</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form END -->

                                <!-- Social buttons and divider -->
                                <div class="row">
                                    <!-- Divider with text -->
                                    <div class="position-relative my-4">
                                        <hr>
                                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">
                                            یـا</p>
                                    </div>

                                    <!-- Social btn -->
                                    <div class="col-xxl-6 d-grid">
                                        <a href="#" class="btn bg-google mb-2 mb-xxl-0"><i
                                                class="fab fa-fw fa-google text-white me-2"></i>ورود با Google</a>
                                    </div>
                                    <!-- Social btn -->
                                    <div class="col-xxl-6 d-grid">
                                        <a href="#" class="btn bg-facebook mb-0"><i
                                                class="fab fa-fw fa-facebook-f me-2"></i>ورود با Facebook</a>
                                    </div>
                                </div>

                                <!-- Sign up link -->
                                <div class="mt-4 text-center">
                                    <span>حساب کاربری ندارید؟ <a href="{{route('register')}}">ثبت نام</a></span>
                                </div>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
    </main>

    <!-- **************** MAIN CONTENT END **************** -->
@endsection
