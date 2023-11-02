<footer class="pt-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3">
                <a class="me-0" href="{{ route('home') }}">
                    <img class="light-mode-item h-40px" src="{{ asset('assets/images/logo.png') }}" alt="logo">
                    <img class="dark-mode-item h-40px" src="{{ asset('assets/images/logo.png') }}" alt="logo">
                </a>
                <p class="my-3">شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                <ul class="list-inline mb-0 mt-3">
                    <li class="list-inline-item">
                        <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#"><i class="fab fa-fw fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-white btn-sm shadow px-2 text-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <!-- Link block -->
                <div class="col-6 col-md-4">
                    <h5 class="mb-2 mb-md-4">لینک های سریع</h5>
                    <ul class="nav flex-column">
                        {{menu('footer')}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h5 class="mb-2 mb-md-4">تماس با ما</h5>
                <p class="mb-2">
                    تلفن: <span class="h6 fw-light ms-2">093200000000</span>
                    <span class="d-block small">(9:00 تا 17:00 بعداز ظهر)</span>
                </p>
                <p class="mb-0">ایمیل:<span class="h6 fw-light ms-2">sbhan.slimi@gmail.com</span></p>
                <div class="row g-2 mt-2">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-6">
                        <a href="#"> <img src="{{ asset('assets/images/client/google-play.svg') }}" alt=""> </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-6">
                        <a href="#"> <img src="{{ asset('assets/images/client/app-store.svg') }}" alt="app-store"> </a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-4 mb-0">
        <div class="py-3">
            <div class="container px-0">
                <div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-md-left">
                    <div class="text-primary-hover">
                        تمامی حقوق مربوط به سایت <a href="https://www.rtl-theme.com/" target="_blank" class="text-body">DevGym می باشد.</a>
                    </div>
                    <div class="justify-content-center mt-3 mt-lg-0">
                        <ul class="nav list-inline justify-content-center mb-0">
                            <li class="list-inline-item">
                            </li>
                            <li class="list-inline-item"><a class="nav-link" href="#">شرایط استفاده</a></li>
                            <li class="list-inline-item"><a class="nav-link pe-0" href="#">قوانین سایت</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
