<div>
    <section class="pt-0">
        <div class="container">
            <div class="row">

                <!-- Left sidebar START -->
                <div class="col-xl-3">
                    <!-- Responsive offcanvas body START -->
                    <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar">
                        <!-- Offcanvas header -->
                        <div class="offcanvas-header bg-light">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">پروفایل من</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                        </div>
                        <!-- Offcanvas body -->
                        @livewire('pages.dashboard.components.side-bar-component')
                    </div>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-xl-9">

                    <!-- Counter boxes END -->

                    <div class="card bg-transparent border rounded-3">
                        <!-- Card header START -->
                        <div class="card-header bg-transparent border-bottom">
                        </div>
                        <!-- Card header END -->

                        <!-- Card body START -->
                        <div class="card-body">

                            <!-- Search and select START -->
                            <div class="row g-3 align-items-center justify-content-between mb-4">
                                <!-- Content -->
                                <div class="col-md-8">
                                    <form class="rounded position-relative">
                                        <input class="form-control pe-5 bg-transparent" type="search"
                                               placeholder="جستجوی دوره" aria-label="Search">
                                        <button
                                            class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                                            type="submit">
                                            <i class="fas fa-search fs-6 "></i>
                                        </button>
                                    </form>
                                </div>

                                <!-- Select option -->
                                <div class="col-md-3">
                                    <!-- Short by filter -->
                                    <form>
                                        <select class="form-select js-choice border-0 z-index-9 bg-transparent"
                                                aria-label=".form-select-sm">
                                            <option value="">مرتب سازی</option>
                                            <option>رایگان</option>
                                            <option>جدیدترین</option>
                                            <option>پربازدیدترین</option>
                                            <option>پرفروش ترین</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <!-- Search and select END -->

                            <!-- Course list table START -->
                            @foreach($courses as $course)
                            <div class="col-xxl-8">
                                <div class="card shadow p-2">
                                    <div class="row g-0">
                                        <div class="col-lg-5">
                                            <img src="{{voyager::image($course->image)}}" class="img-fluid rounded-2" alt="Card image">
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="card-body">
                                                <!-- Badge and rating -->
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <!-- Badge -->
                                                    <a href="#" class="badge text-bg-primary mb-2 mb-sm-0">{{config('enum.course')[$course->level]}}</a>
                                                    <!-- Rating and wishlist -->
                                                    <div>
                                                        <a href="#" class="text-dark"><i class="far fa-heart"></i></a>
                                                    </div>
                                                </div>

                                                <!-- Title -->
                                                <h5 class="card-title"><a href="{{route('single_course', $course->slug)}}">{{$course->title}}</a></h5>
                                                <p class="text-truncate">{!! $course->description_short !!}</p>

                                                <!-- Info -->
                                                <ul class="list-inline">
                                                    <li class="list-inline-item text-dark mb-1 mb-sm-0"><i class="far fa-clock text-danger ms-2"></i>{{$course->video_time}}ساعت</li>
                                                    <li class="list-inline-item text-dark mb-1 mb-sm-0"><i class="fas fa-table text-orange ms-2"></i>{{$course->lesson_count}} ویدیو</li>
                                                </ul>

                                                <!-- Price and avatar -->
                                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                    <!-- Avatar -->
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar">
                                                            <img class="avatar-img rounded-circle" src="{{voyager::image($course->teacher->avatar)}}" alt="avatar">
                                                        </div>
                                                        <p class="mb-0 me-2"><a href="#" class="text-dark">{{$course->teacher->name}}</a></p>
                                                    </div>
                                                    <!-- Price -->
                                                    <div class="mt-3 mt-sm-0">
                                                        <a href="{{route('single_course', $course->slug)}}" class="btn btn-dark">مشاهده</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Course list table END -->

                            <!-- Pagination START -->
                            <div
                                class="d-sm-flex text-center justify-content-sm-center align-items-sm-center mt-4 mt-sm-3">

                                <!-- Pagination -->
                                <nav class="d-flex text-center justify-content-center mb-0" aria-label="navigation">
                                    <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                        <li class="page-item mb-0"><a class="page-link" href="#"
                                                                      tabindex="-1"><i
                                                    class="fas fa-angle-right"></i></a></li>
                                        <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item mb-0 active"><a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item mb-0"><a class="page-link" href="#"><i
                                                    class="fas fa-angle-left"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Pagination END -->
                        </div>
                        <!-- Card body START -->
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
        </div>
    </section>
</div>
