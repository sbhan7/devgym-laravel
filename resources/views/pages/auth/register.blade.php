@extends('pages.auth.login')

@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <section class="p-0 d-flex align-items-center position-relative overflow-hidden">
            <div class="container-fluid">
                <div class="row">
                    <!-- Left -->
                    <div
                        class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
                        <div class="p-3 p-lg-5">
                            <!-- Title -->
                            <div class="text-center">
                                <h2 class="fw-bold fs-3">به بزرگترین انجمن ما خوش آمدید</h2>
                                <p class="mb-0 h6 fw-light">بیایید امروز چیز جدیدی یاد بگیریم!</p>
                            </div>
                            <!-- SVG Image -->
                            <img src="{{ asset('assets/images/element/02.svg') }}" class="mt-5" alt="">
                            <!-- Info -->
                            <div class="d-sm-flex mt-5 align-items-center justify-content-center">
                                <ul class="avatar-group mb-2 mb-sm-0">
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                                                      src="{{ asset('assets/images/avatar/01.jpg') }}"
                                                                      alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                                                      src="{{ asset('assets/images/avatar/02.jpg') }}"
                                                                      alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                                                      src="{{ asset('assets/images/avatar/03.jpg') }}"
                                                                      alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                                                      src="{{ asset('assets/images/avatar/04.jpg') }}"
                                                                      alt="avatar">
                                    </li>
                                </ul>
                                <!-- Content -->
                                <p class="mb-0 h6 fw-light ms-0 ms-sm-3"> بیش از 100 دانشجو به ما پیوستند، حالا نوبت
                                    شماست.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="col-12 col-lg-6 m-auto">
                        <div class="row my-5">
                            <div class="col-sm-10 col-xl-8 m-auto">
                                <!-- Title -->
                                <img src="{{ asset('assets/images/element/03.svg') }}" class="h-40px mb-2" alt="">
                                <h2 class="">ثبت نام</h2>
                                <p class="mb-4">از دیدن شما خوشحالم! لطفا با حساب کاربری خود ثبت نام کنید.</p>

                                <!-- Form START -->
                                <form method="post" action="{{route('register_post')}}">
                                    @csrf
                                    {{--   Name--}}
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label">نام</label>
                                        <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="bi bi-envelope-fill"></i></span>
                                            <input name="name" class="form-control border-0 bg-light rounded-end ps-1"
                                                   placeholder="نام خود را وارد کنید." id="exampleInputEmail1">
                                        </div>
                                        @error('name')
                                        <span class="badge bg-danger bg-opacity-10 text-danger mt-2">{{$message}}</span>
                                        @enderror
                                    </div>
                                    {{--    Phone--}}
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label">شماره همراه</label>
                                        <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="bi bi-envelope-fill"></i></span>
                                            <input name="phone" class="form-control border-0 bg-light rounded-end ps-1"
                                                   placeholder="********09" id="exampleInputEmail1">
                                        </div>
                                        @error('phone')
                                        <span class="badge bg-danger bg-opacity-10 text-danger mt-2">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- Email -->
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label">ایمیل</label>
                                        <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="bi bi-envelope-fill"></i></span>
                                            <input type="email" name="email"
                                                   class="form-control border-0 bg-light rounded-end ps-1"
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
                                            <input type="password" name="password"
                                                   class="form-control border-0 bg-light rounded-end ps-1"
                                                   placeholder="*********" id="inputPassword5">
                                        </div>
                                    @error('password')
                                    <span class="badge bg-danger bg-opacity-10 text-danger mt-2">{{$message}}</span>
                                    @enderror
                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="mb-4">
                                        <label for="inputPassword6" class="form-label">تایید رمز عبور *</label>
                                        <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="fas fa-lock"></i></span>
                                            <input type="password" name="password_confirm"
                                                   class="form-control border-0 bg-light rounded-end ps-1"
                                                   placeholder="*********" id="inputPassword6">
                                        </div>
                                    @error('password_confirm')
                                    <span class="badge bg-danger bg-opacity-10 text-danger mt-2">{{$message}}</span>
                                    @enderror
                                    </div>
                                    <!-- Check box -->
                                    <div class="mb-4">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-1">
                                            <label class="form-check-label" for="checkbox-1">با ثبت نام <a href="#">شرایط
                                                    و قوانین سایت</a> را خواهید پذیرفت.</label>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="align-items-center mt-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary mb-0" type="submit">ثبت نام</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form END -->

                                <!-- Social buttons -->
                                <div class="row">
                                    <!-- Divider with text -->
                                    <div class="position-relative my-4">
                                        <hr>
                                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">
                                            یا</p>
                                    </div>
                                    <!-- Social btn -->
                                    <div class="col-xxl-6 d-grid">
                                        <a href="#" class="btn bg-google mb-2 mb-xxl-0"><i
                                                class="fab fa-fw fa-google text-white me-2"></i>با Google</a>
                                    </div>
                                    <!-- Social btn -->
                                    <div class="col-xxl-6 d-grid">
                                        <a href="#" class="btn bg-facebook mb-0"><i
                                                class="fab fa-fw fa-facebook-f me-2"></i>با Facebook</a>
                                    </div>
                                </div>

                                <!-- Sign up link -->
                                <div class="mt-4 text-center">
                                    <span>آیا قبلا ثبت نام کرده اید؟<a href="{{ route('login') }}"> ورود</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

@endsection
