<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <title>{{setting('site.title')}}</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content="{{setting('site.description')}}">

    <!-- Dark mode -->
    <script>
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
        }

        const setTheme = function (theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if (el != 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })

    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-rtl.css') }}">
    @livewireStyles
</head>
<body>

@livewire('pages.front.components.header-component')

@yield('content')

@include('livewire.pages.dashboard.footer')

<!-- Sticky element START -->
<div
    class="alert alert-dismissible sticky-element fade show bg-dark text-white rounded-3 shadow p-4 ms-3 mb-3 col-10 col-md-4 col-lg-3 col-xl-2 d-none d-lg-block"
    role="alert">
    <div class="d-sm-flex align-items-center mb-3">
        <!-- Avatar -->
        <div>
            <div class="icon-lg bg-purple rounded-circle text-purple">
                <img class="p-3" src="assets/images/client/aftereffect.svg" alt="avatar">
            </div>
        </div>
        <!-- Info -->
        <div class="ms-sm-2 mt-2 mt-sm-0">
            <h6 class="mb-0 text-white fw-normal">آموزش After Effects</h6>
            <span class="small mb-0 me-3"><i class="far fa-clock text-danger me-2"></i>30 دقیقه</span>
            <span class="small mb-0 me-1"><i class="fas fa-circle fw-bold text-success small me-2"></i>آنلاین</span>
        </div>
    </div>
    <p class="mb-0 small">توصیه می شود که این تکلیف را تکمیل کنید تا مهارت های طراحی گرافیکی خود را بهبود ببخشید.</p>

    <!-- Avatar group -->
    <div class="d-sm-flex justify-content-between mt-4">
        <ul class="avatar-group mb-2 mb-sm-0">
            <li class="avatar avatar-xs">
                <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
            </li>
            <li class="avatar avatar-xs">
                <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
            </li>
            <li class="avatar avatar-xs">
                <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
            </li>
            <li class="avatar avatar-xs">
                <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
            </li>
        </ul>

        <!-- Button -->
        <button type="button" class="btn btn-success btn-sm mb-0" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">ملحق شوید</span>
        </button>
    </div>
    <!-- Close button -->
    <div class="position-absolute end-0 top-0 mt-n3 me-n3">
        <button type="button" class="btn btn-danger btn-round btn-sm mb-0" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
        </button>
    </div>
</div>
<!-- Sticky element START -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/tiny-slider/tiny-slider-rtl.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>
@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>

</html>
