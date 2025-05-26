<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('Logo _SiMANGGIS.png') }}" type="image/x-icon">
    <title>SIMANGGIS - Sistem Monitoring Makan Gratis</title>
</head>

<body>
    @include('layouts.navbar')
    <section class="bg-white">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
      <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Team Pengembang</h2>
          <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind</p>
      </div> 

      <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">

        <!-- Najlaa -->
        <article class="items-center bg-gray-50 ...">
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="w-24 h-24 object-cover rounded-none" src="foto/najla.jpg" alt="Najla Avatar">
            </a>
              <div class="p-5">
                  <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                      <a href="#">Najlaa Maharani Dewi Tiara Gunawan</a>
                  </h3>
                  <span class="text-gray-500 dark:text-gray-400">Universitas Muhammadiyah Jakarta</span>
                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Frontend Developer</p>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="https://www.instagram.com/najlamhr" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                               <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5zm8.75 2.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7z"/></svg>
                          </a>
                      </li>
                      <li>
                          <a href="https://www.github.com/Najlamhr" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.15 6.84 9.49.5.09.66-.22.66-.48v-1.72c-2.78.6-3.37-1.35-3.37-1.35-.45-1.16-1.1-1.47-1.1-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.89 1.53 2.34 1.08 2.91.83.09-.64.35-1.08.64-1.34-2.22-.25-4.56-1.11-4.56-4.95 0-1.09.39-1.99 1.03-2.69-.1-.25-.45-1.27.1-2.65 0 0 .84-.27 2.75 1.02A9.57 9.57 0 0112 6.84c.86.004 1.71.12 2.51.34 1.91-1.29 2.75-1.02 2.75-1.02.55 1.38.2 2.4.1 2.65.64.7 1.03 1.6 1.03 2.69 0 3.85-2.34 4.7-4.57 4.94.36.31.68.92.68 1.86v2.76c0 .26.18.57.69.48A10.02 10.02 0 0022 12c0-5.52-4.48-10-10-10z"/></svg>
                          </a>
                      </li>
                  </ul>
              </div>
          </div> 
        </article>

          <!-- Adib -->
           <article class="items-center bg-gray-50 ...">
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                 <img class="w-24 h-24 object-cover rounded-none" src="foto/adib.png" alt="Adib Avatar">

              </a>
              <div class="p-5">
                  <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                      <a href="#">Adib Muhammad Zain</a>
                  </h3>
                  <span class="text-gray-500 dark:text-gray-400">Universitas Nurul Jadid</span>
                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Backend Developer</p>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="https://www.instagram.com/dibscode" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                               <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5zm8.75 2.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7z"/></svg>
                          </a>
                      </li>
                      <li>
                          <a href="https://www.github.com/dibscode" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.15 6.84 9.49.5.09.66-.22.66-.48v-1.72c-2.78.6-3.37-1.35-3.37-1.35-.45-1.16-1.1-1.47-1.1-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.89 1.53 2.34 1.08 2.91.83.09-.64.35-1.08.64-1.34-2.22-.25-4.56-1.11-4.56-4.95 0-1.09.39-1.99 1.03-2.69-.1-.25-.45-1.27.1-2.65 0 0 .84-.27 2.75 1.02A9.57 9.57 0 0112 6.84c.86.004 1.71.12 2.51.34 1.91-1.29 2.75-1.02 2.75-1.02.55 1.38.2 2.4.1 2.65.64.7 1.03 1.6 1.03 2.69 0 3.85-2.34 4.7-4.57 4.94.36.31.68.92.68 1.86v2.76c0 .26.18.57.69.48A10.02 10.02 0 0022 12c0-5.52-4.48-10-10-10z"/></svg>
                          </a>
                      </li>
                  </ul>
              </div>
          </div> 
        </article>

          <!-- Adrian -->
           <article class="items-center bg-gray-50 ...">
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                  <img class="w-24 h-24 object-cover rounded-none" src="foto/adrian.jpg" alt="Adrian Avatar">
              </a>
              <div class="p-5">
                  <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                      <a href="#">Adrian Fakhriza Hakim</a>
                  </h3>
                  <span class="text-gray-500 dark:text-gray-400">Universitas Pembangunan Veteran Jakarta</span>
                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Backend</p>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="https://www.instagram.com/drianriza_" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                               <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5zm8.75 2.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7z"/></svg>
                          </a>
                      </li>
                      <li>
                          <a href="https://www.github.com/AdrianFakhriza" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.15 6.84 9.49.5.09.66-.22.66-.48v-1.72c-2.78.6-3.37-1.35-3.37-1.35-.45-1.16-1.1-1.47-1.1-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.89 1.53 2.34 1.08 2.91.83.09-.64.35-1.08.64-1.34-2.22-.25-4.56-1.11-4.56-4.95 0-1.09.39-1.99 1.03-2.69-.1-.25-.45-1.27.1-2.65 0 0 .84-.27 2.75 1.02A9.57 9.57 0 0112 6.84c.86.004 1.71.12 2.51.34 1.91-1.29 2.75-1.02 2.75-1.02.55 1.38.2 2.4.1 2.65.64.7 1.03 1.6 1.03 2.69 0 3.85-2.34 4.7-4.57 4.94.36.31.68.92.68 1.86v2.76c0 .26.18.57.69.48A10.02 10.02 0 0022 12c0-5.52-4.48-10-10-10z"/></svg>
                          </a>
                      </li>
                  </ul>
              </div>
          </div> 
        </article>
          <!-- Ega-->
           <article class="items-center bg-gray-50 ...">
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                  <img class="w-24 h-24 object-cover rounded-none" src="foto/ega.jpg" alt="Ega Avatar">
              </a>
              <div class="p-5">
                  <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                      <a href="#">Aditya Ega Pratama</a>
                  </h3>
                  <span class="text-gray-500 dark:text-gray-400">Universitas Pembangunan Veteran Jakarta</span>
                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Backend</p>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="https://www.instagram.com/aadityaaega" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                               <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5zm8.75 2.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7z"/></svg>
                          </a>
                      </li>
                      <li>
                          <a href="https://www.github.com/egaprams" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.15 6.84 9.49.5.09.66-.22.66-.48v-1.72c-2.78.6-3.37-1.35-3.37-1.35-.45-1.16-1.1-1.47-1.1-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.89 1.53 2.34 1.08 2.91.83.09-.64.35-1.08.64-1.34-2.22-.25-4.56-1.11-4.56-4.95 0-1.09.39-1.99 1.03-2.69-.1-.25-.45-1.27.1-2.65 0 0 .84-.27 2.75 1.02A9.57 9.57 0 0112 6.84c.86.004 1.71.12 2.51.34 1.91-1.29 2.75-1.02 2.75-1.02.55 1.38.2 2.4.1 2.65.64.7 1.03 1.6 1.03 2.69 0 3.85-2.34 4.7-4.57 4.94.36.31.68.92.68 1.86v2.76c0 .26.18.57.69.48A10.02 10.02 0 0022 12c0-5.52-4.48-10-10-10z"/></svg>
                          </a>
                      </li>
                  </ul>
              </div>
          </div> 
</article>
          <!-- Efendi -->
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
              <a href="#">
                  <img class="w-24 h-24 object-cover rounded-none" src="foto/pendi.jpg" alt="Pendi Avatar">
              </a>
              <div class="p-5">
                  <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                      <a href="#">Muhammad Efendi</a>
                  </h3>
                  <span class="text-gray-500 dark:text-gray-400">Universitas Muhammadiyah Jakarta</span>
                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Frontend Developer</p>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="https://www.instagram.com/najlamhr" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                               <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5zm8.75 2.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7z"/></svg>
                          </a>
                      </li>
                      <li>
                          <a href="https://www.github.com/Najlamhr" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.15 6.84 9.49.5.09.66-.22.66-.48v-1.72c-2.78.6-3.37-1.35-3.37-1.35-.45-1.16-1.1-1.47-1.1-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.89 1.53 2.34 1.08 2.91.83.09-.64.35-1.08.64-1.34-2.22-.25-4.56-1.11-4.56-4.95 0-1.09.39-1.99 1.03-2.69-.1-.25-.45-1.27.1-2.65 0 0 .84-.27 2.75 1.02A9.57 9.57 0 0112 6.84c.86.004 1.71.12 2.51.34 1.91-1.29 2.75-1.02 2.75-1.02.55 1.38.2 2.4.1 2.65.64.7 1.03 1.6 1.03 2.69 0 3.85-2.34 4.7-4.57 4.94.36.31.68.92.68 1.86v2.76c0 .26.18.57.69.48A10.02 10.02 0 0022 12c0-5.52-4.48-10-10-10z"/></svg>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>  
      </div>  
  </div>
</section>

    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>