<div>
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <!-- =======================
        Page content START -->
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <!-- Left sidebar START -->
                    <div class="col-xl-3">
                        <!-- Responsive offcanvas body START -->
                        <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar">
                            <!-- Offcanvas header -->
                            <div class="offcanvas-header bg-light">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">پروفایل</h5>
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
                        <!-- Edit profile START -->
                        <div class="card bg-transparent border rounded-3">
                            <!-- Card header -->
                            <div class="card-header bg-transparent border-bottom">
                                <h3 class="card-header-title mb-0 ff-vb fs-5">ویرایش پروفایل</h3>
                            </div>
                            <!-- Card body START -->
                            <div class="card-body">
                                <!-- Form -->
                                <form wire:submit.prevent="save" class="row g-4">



                                    <!-- Full name -->
                                    <div class="col-12">
                                        <label class="form-label">نام</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="{{$user->name}}" placeholder="نام">
                                        </div>
                                    </div>


                                    <!-- Email id -->
                                    <div class="col-md-6">
                                        <label class="form-label">ایمیل</label>
                                        <input class="form-control" type="email" value="{{$user->email}}"
                                               placeholder="ایمیل">
                                    </div>

                                    <!-- Phone number -->
                                    <div class="col-md-6">
                                        <label class="form-label">شماره همراه</label>
                                        <input type="text" class="form-control" value="{{$user->phone}}"
                                               placeholder="شماره تماس">
                                    </div>
                                    <!-- Password change START -->
                                    <div class="col-lg-8>
                                        <div class="card border bg-transparent rounded-3">
                                            <!-- Card header -->
                                            <div class="card-header bg-transparent border-bottom">
                                                <h5 class="card-header-title mb-0">تغییر رمز عبور</h5>
                                            </div>
                                            <!-- Card body START -->
                                            <div class="card-body">
                                                <!-- Current password -->
                                                <div class="mb-3">
                                                    <label class="form-label">رمز فعلی</label>
                                                    <input class="form-control" value="{{$user->password}}" type="password" placeholder="********">
                                                </div>
                                                <!-- New password -->
                                                <div class="mb-3">
                                                    <label class="form-label"> رمز جدید</label>
                                                    <div class="input-group">
                                                        <input class="form-control" type="password" placeholder="********">
                                                        <span class="input-group-text p-0 bg-transparent">
											<i class="far fa-eye cursor-pointer p-2 w-40px"></i>
										</span>
                                                    </div>
                                                    <div class="rounded mt-1" id="psw-strength"></div>
                                                </div>
                                                <!-- Confirm password -->
                                                <div>
                                                    <label class="form-label">تایید رمز جدید</label>
                                                    <input class="form-control" type="password" placeholder="********">
                                                </div>
                                                <!-- Button -->
                                            </div>



                                    <!-- Save button -->
                                    <div class="d-sm-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mb-0">ذخیره</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Card body END -->
                        </div>
                        <!-- Edit profile END -->
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
        Page content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
</div>
