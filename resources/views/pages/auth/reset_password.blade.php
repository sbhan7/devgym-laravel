@extends('pages.auth.index')

@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

            <div class="container-fluid">
                <div class="row">
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
                    <div class="col-12 col-lg-6 d-flex justify-content-center">
                        <div class="row my-5">
                            <div class="col-sm-10 col-xl-12 m-auto">

                                <!-- Title -->
                                <span class="mb-0 fs-1">🔓</span>
                                <h1 class="fs-4">فراموشی رمز عبور</h1>
                                <h5 class="fw-light mb-4">برای تغیر رمز عبور جدید، اطلاعات خواسته شده را وارد کنید.</h5>

                                <!-- Form START -->
                                <form>
                                    <!-- Email -->
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label">رمزعبور جدید *</label>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
                                            <input type="email" class="form-control border-0 bg-light rounded-end ps-1" placeholder="********" id="exampleInputEmail1">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label">تکرار رمزعبور جدید *</label>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
                                            <input type="email" class="form-control border-0 bg-light rounded-end ps-1" placeholder="********" id="exampleInputEmail1">
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="align-items-center">
                                        <div class="d-grid">
                                            <button class="btn btn-primary mb-0" type="button">تغیر رمزعبور</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form END -->
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
