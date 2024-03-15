<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noodp,index,follow">
    <meta property="og:site_name" content="Hệ điều hành doanh nghiệp">
    <meta property="og:url" content="https://labortracking.vn/">
    <meta property="og:description" content="{{ $app_setting->meta_description ?? 'Quản lý nhân sự' }}">
    <meta property="og:title" content="WEOS">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('gn24-v2/img-3/logo-labor.png') }}" type="image/x-icon">
    <meta property="og:image:secure_url" content="{{ asset('gn24-v2/img-3/logo-labor.png') }}" type="image/x-icon">

    <meta name="google-site-verification" content="QwiNp6wYXXnmyjWgLkNWZK_Ysk8ZD-0A_Y6NYuMlyFA" />
    <meta name="{{ $app_setting->meta_keyword ?? 'Quản lý nhân sự' }}"
        content="{{ $app_setting->meta_description ?? 'Quản lý nhân sự' }}">
    <title>Labor Tracking</title>
    <link rel="icon" href="{{ asset('gn24-v2/img-3/logo-labor.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HCHBPNJFZP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HCHBPNJFZP');
    </script>
</head>

<body class="select-none bg-slate-100">
    <div class="w-full lg:flex">
        @include('gn24-v2.layouts.partials.header')
        @yield('content')
    </div>
    @include('gn24-v2.layouts.partials.footer')
    @include('gn24-v2.videos.video-modal')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('gn24-v2/js/toggle.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="module" src="{{ asset('gn24-v2/js/updateLink.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        $(document).ready(function() {
            var free_radio = $('#free_radio');
            var standard_radio = $('#standard_radio');
            var premium_radio = $('#premium_radio');

            var free_product = $('#free_product');
            var standard_product = $('#standard_product');
            var premium_product = $('#premium_product');

            free_radio.change(function() {
                if ($(this).is(':checked')) {
                    free_product.addClass('scale-105');
                    standard_product.removeClass('scale-105');
                    premium_product.removeClass('scale-105');
                }
            });

            standard_radio.change(function() {
                if ($(this).is(':checked')) {
                    free_product.removeClass('scale-105');
                    standard_product.addClass('scale-105');
                    premium_product.removeClass('scale-105');
                }
            });

            premium_radio.change(function() {
                if ($(this).is(':checked')) {
                    free_product.removeClass('scale-105');
                    standard_product.removeClass('scale-105');
                    premium_product.addClass('scale-105');
                }
            });
        });
    </script>
    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [20, 100 - 20],
                    backgroundColor: ['#ff6384', '#36a2eb'],
                    borderWidth: 0,
                    borderRadius: 4,
                    spacing: 2
                }],
            },
            options: {
                circumference: 180,
                rotation: 270,
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#customerCarousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                navText: [
                    "<div class='absolute rounded-lg top-1/2 -translate-y-1/2 hover:text-orange-500 -left-12 px-1 py-1 text-5xl text-orange-400 bg-white/[.5]'><i class='fa-solid fa-chevron-left'></i></div>",
                    "<div class='absolute rounded-lg top-1/2 -translate-y-1/2 hover:text-orange-500 -right-12 px-1 py-1 text-5xl text-orange-400 bg-white/[.5]'><i class='fa-solid fa-chevron-right'></i></div>"
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>
    <script>
        $("#change_app_detail-btn").on("click", function() {
            $("#change_app_detail-popup").toggleClass("hidden");
        });
        $("#change_app_detail-QLTL-btn").on("click", function() {
            $("#change_app_detail-popup").addClass("hidden");
            $("#change_app_detail-content-QLTL").removeClass("hidden");
            $("#change_app_detail-content-QLCC").addClass("hidden");
            $("#change_app_detail-QLTL-btn").addClass("bg-orange-400 text-white");
            $("#change_app_detail-QLCC-btn").removeClass("bg-orange-400 text-white");
            $("#change_app_detail-QLTL").removeClass("hidden");
            $("#change_app_detail-QLCC").addClass("hidden");
        });
        $("#change_app_detail-QLCC-btn").on("click", function() {
            $("#change_app_detail-popup").addClass("hidden");
            $("#change_app_detail-content-QLTL").addClass("hidden");
            $("#change_app_detail-content-QLCC").removeClass("hidden");
            $("#change_app_detail-QLTL-btn").removeClass("bg-orange-400 text-white");
            $("#change_app_detail-QLCC-btn").addClass("bg-orange-400 text-white");
            $("#change_app_detail-QLTL").addClass("hidden");
            $("#change_app_detail-QLCC").removeClass("hidden");
        });
    </script>
    <script>
        function closeModal() {
            $('#modal_khampha').addClass('hidden')
            $('#modal_change_service').addClass('hidden')
            $('#modal_createsongquyen').addClass('hidden')
            $('#modal_updatesongquyen').addClass('hidden')
            $('#modal_appdownload').addClass('hidden')
            $('#modal_login').addClass('hidden')
            $('#modal_register').addClass('hidden')
        }

        function Modal_Khampha_Function(boolean) {
            if (boolean == true) {
                closeModal()
                $('#modal_khampha').removeClass('hidden')
            } else {
                $('#modal_khampha').addClass('hidden')
            }
        }

        function ChangeService_Function(boolean) {
            if (boolean == true) {
                closeModal()
                $('#modal_change_service').removeClass('hidden')
            } else {
                $('#modal_change_service').addClass('hidden')
            }
        }

        function Modal_CreateSongQuyen_Function(boolean) {
            if (boolean == true) {
                closeModal()
                $('#modal_createsongquyen').removeClass('hidden')
            } else {
                $('#modal_createsongquyen').addClass('hidden')
            }
        }

        function Modal_UpdateSongQuyen_Function(boolean, json) {
            if (boolean == true) {
                closeModal()
                document.getElementById('modal_updatesongquyen').classList.remove('hidden');
                document.getElementById('updatesongquyen_id').value = json.id;
                document.getElementById('updatesongquyen_email').value = json.email;
                document.getElementById('updatesongquyen_password').value = json.password;
                document.getElementById('updatesongquyen_permission_cauhinh').checked = json.permission_cauhinh == 1 ?
                    true :
                    false;
                document.getElementById('updatesongquyen_permission_hoso').checked = json.permission_hoso == 1 ? true :
                    false;
                document.getElementById('updatesongquyen_permission_bangluong').checked = json.permission_bangluong == 1 ?
                    true :
                    false;
                document.getElementById('updatesongquyen_permission_duyetapp').checked = json.permission_duyetapp == 1 ?
                    true :
                    false;
                document.getElementById('updatesongquyen_permission_chamcong').checked = json.permission_chamcong == 1 ?
                    true :
                    false;
                document.getElementById('updatesongquyen_permission_tamung').checked = json.permission_tamung == 1 ? true :
                    false;
                document.getElementById('updatesongquyen_permission_macroluong').checked = json.permission_macroluong == 1 ?
                    true :
                    false;
                document.getElementById('updatesongquyen_permission_daotao').checked = json.permission_daotao == 1 ? true :
                    false;
                document.getElementById('updatesongquyen_permission_congno').checked = json.permission_congno == 1 ? true :
                    false;
                document.getElementById('updatesongquyen_permission_thuongphat').checked = json.permission_thuongphat == 1 ?
                    true :
                    false;
                document.getElementById('updatesongquyen_permission_baohiem').checked = json.permission_baohiem == 1 ?
                    true :
                    false;
                document.getElementById('updatesongquyen_permission_suckhoe').checked = json.permission_suckhoe == 1 ?
                    true :
                    false;
                document.getElementById('updatesongquyen_permission_kyquy').checked = json.permission_kyquy == 1 ? true :
                    false;
                document.getElementById('updatesongquyen_permission_congviec').checked = json.permission_congviec == 1 ?
                    true :
                    false;
                document.getElementById('updatesongquyen_permission_babuoc').checked = json.permission_babuoc == 1 ? true :
                    false;
            } else {
                document.getElementById('modal_updatesongquyen').classList.add('hidden')
            }
        }

        function Modal_Login_Function(boolean) {
            if (boolean == true) {
                closeModal()
                $("#dropdown_menu").addClass("-translate-x-full lg:translate-x-0 lg:hidden");
                $('#modal_login').removeClass('hidden')
            } else {
                document.querySelector('.login-form').reset();
                $('#modal_login').addClass('hidden')
            }
        }

        function Modal_Video_Function(boolean, element) {
            if (boolean == true) {
                closeModal()
                var videoSrc = $(element).find('video').attr('src');
                var videoTitle = $(element).find('h1').text();
                $("#modal_video_iframe").attr("src", videoSrc);
                $("#modal_video h1").text(videoTitle);
                $('#modal_video').removeClass('hidden')
            } else {
                $("#modal_video_iframe").attr("src", "");
                $("#modal_video h1").text("");
                $('#modal_video').addClass('hidden')
            }
        }

        function Modal_Register_Function(boolean) {
            if (boolean == true) {
                closeModal()
                $("#dropdown_menu").addClass("-translate-x-full lg:translate-x-0 lg:hidden");
                $('#modal_register').removeClass('hidden')
            } else {
                document.querySelector('.register-form').reset();
                $('#modal_register').addClass('hidden')
            }
        }

        function Modal_App_Function(boolean) {
            if (boolean == true) {
                closeModal()
                $('#dropdown_menu').addClass('-translate-x-full lg:translate-x-0 lg:hidden');
                $("#modal_appdownload").removeClass("hidden");
            } else {
                $("#modal_appdownload").addClass("hidden");
            }
        }

        function Change_Login_To_Register_Function() {
            Modal_Login_Function(false);
            document.querySelector('.login-form').reset();
            Modal_Register_Function(true);
        }
    </script>
    @if (Session::has('message'))
        <script>
            var type = "{{ Session::get('type') }}";
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
                "timeOut": 8000
            };
            switch (type) {
                case "success":
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case "warning":
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case "error":
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        </script>
    @endif
    @if (Session::has('errors'))
        <script>
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
            };
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        </script>
    @endif
    @yield('scripts')
</body>

</html>
