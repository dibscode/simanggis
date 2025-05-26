<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <!-- Tambahkan CDN CSS AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('Logo_SiMANGGIS.png') }}" type="image/x-icon">
    <title>SIMANGGIS - Sistem Monitoring Makan Gratis</title>
</head>

<body>
    @include('layouts.navbar')
    <audio autoplay loop muted>
        <source src="backsound.mp3" type="audio/mpeg">
        Browser Anda tidak mendukung tag audio.
    </audio>
    <section class="relative bg-gray-700 bg-blend-multiply min-h-[350px] sm:min-h-[450px] md:min-h-[550px] lg:min-h-[650px] flex items-center" data-aos="fade-down">
        <!-- Video sebagai background -->
        <div class="absolute inset-0 w-full h-full overflow-hidden pointer-events-none z-0 flex justify-center">
            <div class="relative w-full h-full max-w-full">
                <video
                    src="{{ asset('food.mp4') }}"
                    autoplay
                    muted
                    loop
                    playsinline
                    class="w-full h-full object-cover"
                    style="pointer-events: none;"></video>
                <!-- Overlay gelap agar teks tetap terbaca -->
                <div class="absolute inset-0 bg-black opacity-80"></div>
            </div>
        </div>
        <div class="relative px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56 z-10 flex flex-col items-center justify-center w-full">
            <a data-aos="fade-down" href="#" class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full hover:bg-blue-200">
                <span data-aos="fade-down" class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 me-3">New</span> <span class="text-sm font-medium">Statistik Sekolah Terbaru</span>
                <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
            </a>
            <h1 data-aos="fade-up" class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Sistem Monitoring <span class="underline underline-offset-3 decoration-8 decoration-blue-400">Makan Gratis</span>
            </h1>
            <p data-aos="fade-up" class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                Website Resmi Desa Tarum – Mewujudkan Pelayanan Publik yang Transparan, Cepat, dan Responsif untuk Masyarakat.
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a data-aos="fade-right" href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a data-aos="fade-left" href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>
            </div>
        </div>
    </section>

<section class="bg-white dark:bg-gray-900">
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <img class="w-full dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup.svg" alt="dashboard image">
        <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg" alt="dashboard image">
        <div class="mt-4 md:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">About Us.</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
               Simanggis (Sistem Makan Bergizi Gratis) adalah platform digital yang dibangun untuk mendukung dan memperkuat program makan siang dan susu gratis untuk anak-anak Indonesia, sebagaimana diusung oleh Presiden Republik Indonesia.
                Kami percaya bahwa pemenuhan gizi yang baik sejak dini adalah fondasi utama bagi masa depan bangsa. Didirikan dengan semangat kepedulian sosial dan kemajuan teknologi, Simanggis hadir untuk mempermudah berbagai pihak—baik lembaga pemerintah, organisasi sosial, maupun relawan—dalam memonitor, mencatat, dan mengelola distribusi bantuan makanan bergizi dengan lebih efisien dan transparan.

            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Visi.</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
               Mewujudkan masyarakat yang sehat dan sejahtera melalui pendataan dan distribusi makanan bergizi gratis yang merata dan tepat sasaran.

            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Misi.</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
            Membangun sistem pendataan yang akurat dan mudah digunakan untuk semua pihak yang terlibat. <br>
            Mendukung program-program gizi dari pemerintah dan komunitas dengan teknologi yang responsif. <br>
            Meningkatkan kesadaran akan pentingnya gizi melalui informasi yang dapat diakses oleh publik. <br>

            <a href="#" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                Get started
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
</section>

@include('layouts.footer')

   
    <!-- Tambahkan CDN JS AOS dan inisialisasi -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
   
</body>

</html>