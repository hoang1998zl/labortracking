@extends('gn24-v2.layouts.app')
@section('title', 'Các sản phẩm')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
@endsection
@section('content')
    <main class="w-full">
        <div class="owl-carousel owl-theme relative">
            <div class="w-full bg-cover h-screen bg-no-repeat bg-img">
                <div class="lg:w-1/2 w-full">
                    <div class="md:w-10/12 w-full flex items-center h-screen mx-auto text-center">
                        <div class="w-full">
                            <i class="fa-duotone fa-users lg:hidden text-9xl text-orange-400 mb-3"></i>
                            <div class="md:w-1/2 w-full md:mx-auto">
                                <p class="leading-snug uppercase text-orange-400 md:text-5xl text-3xl font-bold">quản lý
                                    nhân
                                    sự
                                </p>
                            </div>
                            <div class="pt-10 pb-20">
                                <p class="md:text-2xl text-base">Giải pháp toàn diện cho doanh nghiệp</p>
                            </div>
                            <div>
                                <a class="text-white px-6 py-2 rounded-2xl font-bold text-xl uppercase hover:bg-orange-500 bg-orange-400"
                                    href="{{ route('gn24.product-1') }}">Bắt đầu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full bg-cover flex h-screen bg-no-repeat bg-img-2">
                <div class="lg:w-1/2 w-0"></div>
                <div class="lg:w-1/2 w-full">
                    <div class="w-10/12 flex items-center h-screen mx-auto text-center">
                        <div class="w-full">
                            <i class="fa-sharp fa-solid fa-file-invoice lg:hidden text-9xl text-orange-400 mb-3"></i>
                            <div class="md:w-1/2 w-full mx-auto">
                                <p class="leading-snug uppercase text-orange-400 md:text-5xl text-3xl font-bold">tài liệu
                                    bảo mật</p>
                            </div>
                            <div class="pt-10 pb-20">
                                <p class="md:text-2xl text-base">Giải pháp toàn diện cho doanh nghiệp</p>
                            </div>
                            <div>
                                <a class="text-white px-6 py-2 rounded-2xl font-bold text-xl uppercase hover:bg-orange-500 bg-orange-400"
                                    href="{{ route('gn24.product-2') }}">Bắt đầu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                nav: true,
                navText: [
                    "<div class='absolute rounded-lg top-80 hover:text-orange-500 left-5 px-1 py-1 text-5xl text-orange-400 bg-white/[.5]'>‹</div>",
                    "<div class='absolute rounded-lg top-80 hover:text-orange-500 right-5 px-1 py-1 text-5xl text-orange-400 bg-white/[.5]'>›</div>"
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
        });
    </script>
@endsection
