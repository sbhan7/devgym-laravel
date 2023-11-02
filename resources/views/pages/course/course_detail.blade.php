@extends('index')

@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <!-- =======================
        Page banner video START -->
        <section class="py-0 pb-lg-5">
            <div class="container">
                <div class="row g-3">
                    <!-- Course video START -->
                    <div class="col-12">
                        <div class="video-player rounded-3">
                            <video controls crossorigin="anonymous" playsinline
                                   poster="{{voyager::image($course->image)}}">
                                    <source src="" type="video/mp4"
                                            size="1080">

                                <!-- Caption files -->
{{--                                <track kind="captions" label="English" srclang="en"--}}
{{--                                       src="{{ asset('assets/images/videos/en.vtt') }}" default>--}}
                            </video>
                        </div>
                    </div>
                    <!-- Course video END -->

                    <!-- Playlist responsive toggler START -->
                    <div class="col-12 d-lg-none">
                        <button class="btn btn-primary mb-3" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="bi bi-camera-video me-1"></i> ویدیوهای دوره
                        </button>
                    </div>
                    <!-- Playlist responsive toggler END -->
                </div>
            </div>
        </section>
        <!-- =======================
        Page banner video END -->

        <!-- =======================
        Page content START -->
        <section class="pt-0">
            <div class="container">
                <div class="row g-lg-5">

                    <!-- Main content START -->
                    <div class="col-lg-8">
                        <div class="row g-4">

                            <!-- Course title START -->
                            <div class="col-12">
                                <!-- Title -->
                                <h1 class="fs-3">{{$course->title}}</h1>
                                <!-- Content -->
                                <ul class="list-inline mb-0">

                                    <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                            class="fas fa-user-graduate text-orange me-2"></i>12 شرکت کننده
                                    </li>
                                    <li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i
                                            class="fas fa-signal text-success me-2"></i>{{config('enum.course')[$course->level]}}
                                    </li>
                                </ul>
                            </div>
                            <!-- Course title END -->

                            <!-- Instructor detail START -->
                            <div class="col-12">
                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                    <!-- Avatar detail -->
                                    <div class="d-flex align-items-center">
                                        <!-- Avatar image -->
                                        <div class="avatar avatar-lg">
                                            <img class="avatar-img rounded-circle"
                                                 src="{{voyager::image($course->teacher->avatar)}}"
                                                 alt="avatar">
                                        </div>
                                        <div class="ms-3">
                                            <h6 class="mb-0"><a href="#">{{$course->teacher->name}}</a></h6>
                                            <p class="mb-0 small">برنامه نویس Full Stack</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- Instructor detail END -->

                            <!-- Course detail START -->
                            <div class="col-12">
                                <!-- Tabs START -->
                                <ul class="nav nav-pills nav-pills-bg-soft px-3" id="course-pills-tab" role="tablist">
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-0 active" id="course-pills-tab-1"
                                                data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button"
                                                role="tab" aria-controls="course-pills-1" aria-selected="true">توضیحات
                                        </button>
                                    </li>
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-0" id="course-pills-tab-2" data-bs-toggle="pill"
                                                data-bs-target="#course-pills-2" type="button" role="tab"
                                                aria-controls="course-pills-2" aria-selected="false">دیدگاه
                                        </button>
                                    </li>
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-0" id="course-pills-tab-3" data-bs-toggle="pill"
                                                data-bs-target="#course-pills-3" type="button" role="tab"
                                                aria-controls="course-pills-3" aria-selected="false">سواالات متداول
                                        </button>
                                    </li>
                                    <!-- Tab item -->
                                    <li class="nav-item me-2 me-sm-4" role="presentation">
                                        <button class="nav-link mb-0" id="course-pills-tab-4" data-bs-toggle="pill"
                                                data-bs-target="#course-pills-4" type="button" role="tab"
                                                aria-controls="course-pills-4" aria-selected="false">پرسش و پاسخ
                                        </button>
                                    </li>
                                </ul>
                                <!-- Tabs END -->

                                <!-- Tab contents START -->
                                <div class="tab-content pt-4 px-3" id="course-pills-tabContent">
                                    <!-- Content START -->
                                    <div class="tab-pane fade show active" id="course-pills-1" role="tabpanel"
                                         aria-labelledby="course-pills-tab-1">
                                        <!-- Course detail START -->
                                        <h5 class="mb-3">توضیحات این دوره</h5>
                                        <p class="mb-3">به مجموعه ی آموزشی <strong>
                                                {{$course->title}}</strong> خوش آمدید.</p>
                                        <p class="mb-3">{!! $course->description_short !!}</p>
                                        <p class="mb-3">{!! $course->description_long !!}</p>

                                        <!-- List content -->
                                        <h5 class="mt-4">بعد از یادگیری:</h5>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                            class="fas fa-check-circle text-success me-2"></i>معرفی دوره
                                                        دیجیتال مارکتینگ
                                                    </li>
                                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                            class="fas fa-check-circle text-success me-2"></i>آموزش
                                                        طراحی رابط کاربری وب و اپلیکشن
                                                    </li>
                                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                            class="fas fa-check-circle text-success me-2"></i>Facebook
                                                        ADS
                                                    </li>
                                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                            class="fas fa-check-circle text-success me-2"></i>ابزارهای
                                                        بهینه سازی موتور جستجو
                                                    </li>
                                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                            class="fas fa-check-circle text-success me-2"></i>توان کار
                                                        با فتوشاپ
                                                    </li>
                                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                            class="fas fa-check-circle text-success me-2"></i>ابزارهای
                                                        بهینه سازی موتور جستجو
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="list-group list-group-borderless">
                                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                            class="fas fa-check-circle text-success me-2"></i>سئو چیست؟
                                                    </li>
                                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                            class="fas fa-check-circle text-success me-2"></i>آموزش
                                                        اجرای لوگو
                                                    </li>
                                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                            class="fas fa-check-circle text-success me-2"></i>ساختار URL
                                                    </li>
                                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                            class="fas fa-check-circle text-success me-2"></i>طراحی بنر
                                                        های دیجیتالی
                                                    </li>
                                                    <li class="list-group-item h6 fw-light d-flex mb-0"><i
                                                            class="fas fa-check-circle text-success me-2"></i>نکات و
                                                        ترفندهای سئو
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Course detail END -->

                                    </div>
                                    <!-- Content END -->

                                    <!-- Content START -->
                                    <div class="tab-pane fade" id="course-pills-2" role="tabpanel"
                                         aria-labelledby="course-pills-tab-2">
                                        <!-- Review START -->
                                        <div class="row mb-4">
                                            <h5 class="mb-4">دیدگاه کاربران</h5>

                                            <!-- Rating info -->
                                            <div class="col-md-4 mb-3 mb-md-0">
                                                <div class="text-center">
                                                    <!-- Info -->
                                                    <h2 class="mb-0">4.5</h2>
                                                    <!-- Star -->
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item me-0"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item me-0"><i
                                                                class="fas fa-star-half-alt text-warning"></i></li>
                                                    </ul>
                                                    <p class="mb-0">(بر اساس بررسی امروز)</p>
                                                </div>
                                            </div>

                                            <!-- Progress-bar and star -->
                                            <div class="col-md-8">
                                                <div class="row align-items-center">
                                                    <!-- Progress bar and Rating -->
                                                    <div class="col-6 col-sm-8">
                                                        <!-- Progress item -->
                                                        <div class="progress progress-sm bg-warning bg-opacity-15">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                 style="width: 100%" aria-valuenow="100"
                                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6 col-sm-4">
                                                        <!-- Star item -->
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                        </ul>
                                                    </div>

                                                    <!-- Progress bar and Rating -->
                                                    <div class="col-6 col-sm-8">
                                                        <!-- Progress item -->
                                                        <div class="progress progress-sm bg-warning bg-opacity-15">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                 style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6 col-sm-4">
                                                        <!-- Star item -->
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="far fa-star text-warning"></i></li>
                                                        </ul>
                                                    </div>

                                                    <!-- Progress bar and Rating -->
                                                    <div class="col-6 col-sm-8">
                                                        <!-- Progress item -->
                                                        <div class="progress progress-sm bg-warning bg-opacity-15">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                 style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6 col-sm-4">
                                                        <!-- Star item -->
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="far fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="far fa-star text-warning"></i></li>
                                                        </ul>
                                                    </div>

                                                    <!-- Progress bar and Rating -->
                                                    <div class="col-6 col-sm-8">
                                                        <!-- Progress item -->
                                                        <div class="progress progress-sm bg-warning bg-opacity-15">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                 style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6 col-sm-4">
                                                        <!-- Star item -->
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="far fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="far fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="far fa-star text-warning"></i></li>
                                                        </ul>
                                                    </div>

                                                    <!-- Progress bar and Rating -->
                                                    <div class="col-6 col-sm-8">
                                                        <!-- Progress item -->
                                                        <div class="progress progress-sm bg-warning bg-opacity-15">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                 style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6 col-sm-4">
                                                        <!-- Star item -->
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="far fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="far fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="far fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0 small"><i
                                                                    class="far fa-star text-warning"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Review END -->

                                        <!-- Student review START -->
                                        <div class="row">
                                            <!-- Review item START -->
                                            <div class="d-md-flex my-4">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-xl me-4 flex-shrink-0">
                                                    <img class="avatar-img rounded-circle"
                                                         src="assets/images/avatar/09.jpg" alt="avatar">
                                                </div>
                                                <!-- Text -->
                                                <div>
                                                    <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                        <h5 class="me-3 mb-0 fw-normal">نیلوفر سجادی</h5>
                                                        <!-- Review star -->
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item me-0"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0"><i
                                                                    class="far fa-star text-warning"></i></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Info -->
                                                    <p class="small mb-2">2 روز قبل</p>
                                                    <p class="mb-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                        صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه
                                                        روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                                        تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                                        کاربردی می باشد.</p>
                                                    <!-- Like and dislike button -->
                                                    <div class="btn-group" role="group"
                                                         aria-label="Basic radio toggle button group">
                                                        <!-- Like button -->
                                                        <input type="radio" class="btn-check" name="btnradio"
                                                               id="btnradio1">
                                                        <label class="btn btn-outline-light btn-sm mb-0"
                                                               for="btnradio1"><i
                                                                class="far fa-thumbs-up me-1"></i>25</label>
                                                        <!-- Dislike button -->
                                                        <input type="radio" class="btn-check" name="btnradio"
                                                               id="btnradio2">
                                                        <label class="btn btn-outline-light btn-sm mb-0"
                                                               for="btnradio2"> <i class="far fa-thumbs-down me-1"></i>2</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Review item END -->
                                            <!-- Divider -->
                                            <hr>
                                            <!-- Review item START -->
                                            <div class="d-md-flex my-4">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-xl me-4 flex-shrink-0">
                                                    <img class="avatar-img rounded-circle"
                                                         src="assets/images/avatar/07.jpg" alt="avatar">
                                                </div>
                                                <!-- Text -->
                                                <div>
                                                    <div class="d-sm-flex mt-1 mt-md-0 align-items-center">
                                                        <h5 class="me-3 mb-0 fw-normal">علی مرادی</h5>
                                                        <!-- Review star -->
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item me-0"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0"><i
                                                                    class="fas fa-star text-warning"></i></li>
                                                            <li class="list-inline-item me-0"><i
                                                                    class="far fa-star text-warning"></i></li>
                                                        </ul>
                                                    </div>
                                                    <!-- Info -->
                                                    <p class="small mb-2">2 روز قبل</p>
                                                    <p class="mb-2">چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                        سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                                    <!-- Like and dislike button -->
                                                    <div class="btn-group" role="group"
                                                         aria-label="Basic radio toggle button group">
                                                        <!-- Like button -->
                                                        <input type="radio" class="btn-check" name="btnradio"
                                                               id="btnradio3">
                                                        <label class="btn btn-outline-light btn-sm mb-0"
                                                               for="btnradio3"><i
                                                                class="far fa-thumbs-up me-1"></i>25</label>
                                                        <!-- Dislike button -->
                                                        <input type="radio" class="btn-check" name="btnradio"
                                                               id="btnradio4">
                                                        <label class="btn btn-outline-light btn-sm mb-0"
                                                               for="btnradio4"> <i class="far fa-thumbs-down me-1"></i>2</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Review item END -->
                                            <!-- Divider -->
                                            <hr>
                                        </div>
                                        <!-- Student review END -->

                                        <!-- Leave Review START -->
                                        <div class="mt-2">
                                            <h5 class="mb-4">ثبت دیدگاه</h5>
                                            <form class="row g-3">
                                                <!-- Name -->
                                                <div class="col-md-6 bg-light-input">
                                                    <input type="text" class="form-control" id="inputtext"
                                                           placeholder="نام" aria-label="First name">
                                                </div>
                                                <!-- Email -->
                                                <div class="col-md-6 bg-light-input">
                                                    <input type="email" class="form-control" placeholder="ایمیل"
                                                           id="inputEmail4">
                                                </div>
                                                <!-- Rating -->
                                                <div class="col-12 bg-light-input">
                                                    <select id="inputState2" class="form-select js-choice">
                                                        <option selected="">★★★★★ (5/5)</option>
                                                        <option>★★★★☆ (4/5)</option>
                                                        <option>★★★☆☆ (3/5)</option>
                                                        <option>★★☆☆☆ (2/5)</option>
                                                        <option>★☆☆☆☆ (1/5)</option>
                                                    </select>
                                                </div>
                                                <!-- Message -->
                                                <div class="col-12 bg-light-input">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                              placeholder="دیدگاه خود را بنویسید" rows="3"></textarea>
                                                </div>
                                                <!-- Button -->
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary mb-0">ثبت دیدگاه
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Leave Review END -->

                                    </div>
                                    <!-- Content END -->

                                    <!-- Content START -->
                                    <div class="tab-pane fade" id="course-pills-3" role="tabpanel"
                                         aria-labelledby="course-pills-tab-3">
                                        <!-- Title -->
                                        <h5 class="mb-3">سوالات متداول</h5>
                                        <!-- FAQ item -->
                                        <div class="mt-4">
                                            <h6>بازاریابی دیجیتال چگونه کار می کند؟</h6>
                                            <p class="mb-0">برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف
                                                بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته،
                                                حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها
                                                شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ
                                                پیشرو در زبان فارسی ایجاد کرد.</p>
                                        </div>

                                        <!-- FAQ item -->
                                        <div class="mt-4">
                                            <h6>SEO چیست؟</h6>
                                            <p class="mb-0">در این صورت می توان امید داشت که تمام و دشواری موجود در
                                                ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
                                                حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی
                                                اساسا مورد استفاده قرار گیرد.</p>
                                            <p class="mt-2 mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                                چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                                مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد
                                                نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>

                                        </div>

                                        <!-- FAQ item -->
                                        <div class="mt-4">
                                            <h6>چه کسانی باید در این دوره شرکت کنند؟</h6>
                                            <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                                با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در
                                                ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در
                                                شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد
                                                تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص
                                                طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                                        </div>

                                        <!-- FAQ item -->
                                        <div class="mt-4">
                                            <h6>T&C برای این برنامه چیست؟</h6>
                                            <p class="mb-0">کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت
                                                فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای
                                                طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی
                                                ایجاد کرد.</p>
                                        </div>

                                        <!-- FAQ item -->
                                        <div class="mt-4">
                                            <h6>چه گواهی هایی برای این برنامه دریافت خواهم کرد؟</h6>
                                            <p class="mb-0">با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                                الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت
                                                می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت
                                                تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و
                                                جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                                                گیرد.</p>
                                        </div>

                                        <!-- FAQ item -->
                                        <div class="mt-4">
                                            <h6>مدت زمان تخفیف دوره چقدر است؟</h6>
                                            <p class="mb-0">روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                                فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                                می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان
                                                جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان
                                                رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد
                                                کرد.</p>
                                        </div>
                                    </div>
                                    <!-- Content END -->

                                    <!-- Content START -->
                                    <div class="tab-pane fade" id="course-pills-4" role="tabpanel"
                                         aria-labelledby="course-pills-tab-4">
                                        <!-- Review START -->
                                        <div class="row mb-4">
                                            <div class="col-12">
                                                <h5 class="mb-4">پرسش و پاسخ</h5>

                                                <!-- Comment box -->
                                                <div class="d-flex mb-4">
                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-sm flex-shrink-0 me-2">
                                                        <a href="#"> <img class="avatar-img rounded-circle"
                                                                          src="assets/images/avatar/09.jpg" alt=""> </a>
                                                    </div>

                                                    <form class="w-100 d-flex">
                                                        <textarea class="one form-control pe-4 bg-light"
                                                                  id="autoheighttextarea" rows="1"
                                                                  placeholder="افزودن پرسش ..."></textarea>
                                                        <button class="btn btn-primary ms-2 mb-0" type="button">ارسال
                                                        </button>
                                                    </form>
                                                </div>

                                                <!-- Comment item START -->
                                                <div class="border p-2 p-sm-4 rounded-3 mb-4">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="comment-item">
                                                            <div class="d-flex mb-3">
                                                                <!-- Avatar -->
                                                                <div class="avatar avatar-sm flex-shrink-0">
                                                                    <a href="#"><img class="avatar-img rounded-circle"
                                                                                     src="assets/images/avatar/05.jpg"
                                                                                     alt=""></a>
                                                                </div>
                                                                <div class="ms-2">
                                                                    <!-- Comment by -->
                                                                    <div class="bg-light p-3 rounded">
                                                                        <div class="d-flex justify-content-center">
                                                                            <div class="me-2">
                                                                                <h6 class="mb-1 fw-normal"><a href="#!">
                                                                                        مهناز احمدی </a></h6>
                                                                                <p class="mb-0">آیا این آموزش جامع است و
                                                                                    می شود با آن سایت مدیریت یا فروشگاهی
                                                                                    زد؟ (موارپلود تصویر و...)</p>
                                                                            </div>
                                                                            <small>5دقیقه</small>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Comment react -->
                                                                    <ul class="nav nav-divider py-2 small">
                                                                        <li class="nav-item"><a
                                                                                class="text-primary-hover" href="#">
                                                                                لایک (3)</a></li>
                                                                        <li class="nav-item"><a
                                                                                class="text-primary-hover" href="#">
                                                                                پاسخ</a></li>
                                                                        <li class="nav-item"><a
                                                                                class="text-primary-hover" href="#">
                                                                                مشاهده 5 پاسخ</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <!-- Comment item nested START -->
                                                            <ul class="list-unstyled ms-4">
                                                                <!-- Comment item START -->
                                                                <li class="comment-item">
                                                                    <div class="d-flex">
                                                                        <!-- Avatar -->
                                                                        <div class="avatar avatar-xs flex-shrink-0">
                                                                            <a href="#"><img
                                                                                    class="avatar-img rounded-circle"
                                                                                    src="assets/images/avatar/06.jpg"
                                                                                    alt=""></a>
                                                                        </div>
                                                                        <!-- Comment by -->
                                                                        <div class="ms-2">
                                                                            <div class="bg-light p-3 rounded">
                                                                                <div
                                                                                    class="d-flex justify-content-center">
                                                                                    <div class="me-2">
                                                                                        <h6 class="mb-1 fw-normal"><a
                                                                                                href="#"> زهرا
                                                                                                مختاری </a></h6>
                                                                                        <p class=" mb-0">چاپگرها و متون
                                                                                            بلکه روزنامه و مجله در ستون
                                                                                            و سطرآنچنان که لازم است و
                                                                                            برای شرایط فعلی تکنولوژی
                                                                                            مورد نیاز و کاربردهای متنوع
                                                                                            با هدف بهبود ابزارهای
                                                                                            کاربردی می باشد.</p>
                                                                                    </div>
                                                                                    <small>2دقیقه</small>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Comment react -->
                                                                            <ul class="nav nav-divider py-2 small">
                                                                                <li class="nav-item"><a
                                                                                        class="text-primary-hover"
                                                                                        href="#!"> لایک (5)</a></li>
                                                                                <li class="nav-item"><a
                                                                                        class="text-primary-hover"
                                                                                        href="#!"> پاسخ</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <!-- Comment item END -->
                                                            </ul>
                                                            <!-- Comment item nested END -->
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Comment item END -->

                                                <!-- Comment item START -->
                                                <div class="border p-2 p-sm-4 rounded-3">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="comment-item">
                                                            <div class="d-flex">
                                                                <!-- Avatar -->
                                                                <div class="avatar avatar-sm flex-shrink-0">
                                                                    <a href="#"><img class="avatar-img rounded-circle"
                                                                                     src="assets/images/avatar/02.jpg"
                                                                                     alt=""></a>
                                                                </div>
                                                                <div class="ms-2">
                                                                    <!-- Comment by -->
                                                                    <div class="bg-light p-3 rounded">
                                                                        <div class="d-flex justify-content-center">
                                                                            <div class="me-2">
                                                                                <h6 class="mb-1 fw-normal"><a href="#!">
                                                                                        محمد علیزاده </a></h6>
                                                                                <p class="mb-0">در vuejs این فایل ها در
                                                                                    حالت عادی اجرا می شوند یا احتیاج به
                                                                                    تنظیمات خاص دارد، اگر دارد در دوره
                                                                                    آموزش دادید؟</p>
                                                                            </div>
                                                                            <small>5دقیقه</small>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Comment react -->
                                                                    <ul class="nav nav-divider py-2 small">
                                                                        <li class="nav-item"><a
                                                                                class="text-primary-hover" href="#">
                                                                                لایک</a></li>
                                                                        <li class="nav-item"><a
                                                                                class="text-primary-hover" href="#">
                                                                                پاسخ</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Comment item END -->

                                            </div>

                                        </div>
                                    </div>
                                    <!-- Content END -->
                                </div>
                                <!-- Tab contents END -->
                            </div>
                            <!-- Course detail END -->
                        </div>
                    </div>
                    <!-- Main content END -->

                    <!-- Right sidebar START -->
                    <div class="col-lg-4">
                        <!-- Responsive offcanvas body START -->
                        <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasSidebar"
                             aria-labelledby="offcanvasSidebarLabel">
                            <div class="offcanvas-header bg-dark">
                                <h5 class="offcanvas-title text-white" id="offcanvasSidebarLabel">ویدیوهای دوره</h5>
                                <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="offcanvas"
                                        data-bs-target="#offcanvasSidebar" aria-label="Close"><i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                            <div class="offcanvas-body p-3 p-lg-0">
                                <div class="col-12">
                                    <!-- Accordion START -->
                                    <div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
                                        <!-- Item -->
                                        <div class="accordion-item mb-3">
                                            <h6 class="accordion-header font-base" id="heading-1">
                                                <a class="accordion-button fw-bold rounded collapsed d-block"
                                                   href="#collapse-1" data-bs-toggle="collapse"
                                                   data-bs-target="#collapse-1" aria-expanded="true"
                                                   aria-controls="collapse-1">
                                                    <span class="mb-0">{{$course->title}}</span>
                                                    <span
                                                        class="small d-block mt-1">({{$course->video_count}} ویدیو)</span>
                                                </a>
                                            </h6>
                                            <div id="collapse-1" class="accordion-collapse collapse show"
                                                 aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
                                                <div class="accordion-body mt-3">
                                                    <div class="vstack gap-3">
                                                        <!-- Course lecture -->
                                                        @foreach($course->lesson as $lesson)
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div
                                                                    class="position-relative d-flex align-items-center">
                                                                    <a href="{{route('course_video', [ $course->slug, $lesson->id])}}"
                                                                       class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
                                                                        <i class="fas fa-play me-0"></i>
                                                                    </a>
                                                                    <span
                                                                        class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px">{{$lesson->title}}</span>
                                                                </div>
                                                                <p class="mb-0 text-truncate">{{$lesson->video_time}}</p>
                                                            </div>
                                                            @if($lesson->description_short)
                                                                <div class="d-flex align-items-center">
                                                                    <p class="mb-0  text-truncate">{{$lesson->description_short}}</p>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- Accordion END -->
                                </div>
                            </div>
                        </div>
                        <!-- Responsive offcanvas body END -->

                        <!-- Tags START -->
                        <div class="mt-4">
                            <h4 class="mb-3 fs-5">برچسب ها</h4>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#">PHP</a>
                                </li>
                                <li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#">استارت
                                        آپ</a></li>
                                <li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#">HTML</a>
                                </li>
                                <li class="list-inline-item"><a class="btn btn-outline-light btn-sm"
                                                                href="#">bootstrap</a></li>
                                <li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#">بانک
                                        اطلاعات</a></li>
                                <li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#">طراحی
                                        وب</a></li>
                                <li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#">برنامه
                                        نویسی</a></li>
                                <li class="list-inline-item"><a class="btn btn-outline-light btn-sm" href="#">داده
                                        کاوی</a></li>
                            </ul>
                        </div>
                        <!-- Tags END -->
                    </div>
                    <!-- Right sidebar END -->

                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
        Page content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
