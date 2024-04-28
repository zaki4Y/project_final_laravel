<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/js/app.js'])
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
    href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
</head>


<body class="bg-blueGray-200" >
    <header>
        <nav class="bg-gray-100">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex justify-between">
        
                    <div class="flex space-x-4">
                        <!-- logo -->
                        <div>
                            <img width="20%" src="{{ asset('img/cowork4-removebg-preview.png') }} " alt="">
                               
                            </a>
                        </div>
        
                        <!-- primary nav -->
                        <div class="hidden md:flex items-center space-x-1">
                            <a href="{{ route('contact') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900 font-[Montserrat]">CONTACT US</a>
                            <a href="{{ route('about') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900 font-[Montserrat]">ABOUT</a>
                            <a href="{{ route('reservation') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900 font-[Montserrat]">RESERVATION</a>
                            
                        </div>
                    </div>
        
                    <!-- secondary nav -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="{{ route('login') }}" class="py-5 px-3">Login</a>
                        <a href="{{ route('register') }}"
                            class="py-2 px-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transition duration-300">Signup</a>
                    </div>
        
                    <!-- mobile button goes here -->
                    <div class="md:hidden flex items-center">
                        <button class="mobile-menu-button">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
        
                </div>
            </div>
        
            <!-- mobile menu -->
            <div class="mobile-menu hidden md:hidden">
                <a href="{{ route('contact') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">contact Us</a>
                <a href="{{ route('about') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">About</a>
                <a href="{{ route('reservation') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Reservation</a>
            </div>
        </nav>
    </header>

    <main>

        <section class="bg-blueGray-200 h-screen">
            <div class="w-full bg-center bg-cover h-[38rem]" style="background-image: url('https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80');">
                <div class="flex items-center justify-center w-full h-full bg-gray-900/40">
                    <div class="text-center">
                        <h1 class="text-3xl font-semibold text-white lg:text-4xl">Build your new <span class="text-blue-400">CO Work</span> Project</h1>
                        <a href="/reservation">

                            <button class="w-full px-5 py-2 mt-4 text-sm font-medium text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500 clickMe">Book Now</button>
                        </a>
                    
                    </div>
                </div>
            </div>
        </section>
        <section>
            {{-- <div class="py-32 text-center"> --}}
            <!-- component -->
            
        
            <section class=" bg-blueGray-200 -mt-24">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap">
                        <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-1 shadow-lg rounded-lg">
                                <div class="px-4 flex-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center mt-16">
                        <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                            <div
                                class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                                <i class="fas fa-user-friends text-xl"></i>
                            </div>
                            <h3 class="text-3xl mb-2 font-semibold leading-normal">
                                Working with us is a pleasure
                            </h3>
                            <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
                               
Working with us is a pleasure because our team is passionate, collaborative, and always goes the extra mile to ensure your satisfaction. We foster a transparent and efficient work environment, prioritizing clear communication and a results-oriented approach.  This dedication translates into a seamless and successful experience for you.
                            </p>
                           
                            <a href="#" class="font-bold text-blueGray-700 mt-8">Check Notus JS!</a>
                        </div>
                        <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-2 shadow-lg rounded-lg bg-pink-500">
                                <img alt="..."
                                    src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                                    class="w-full align-middle rounded-t-lg">
                                <blockquote class="relative p-8 mb-4">
                                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                        class="absolute left-0 w-full block h-95-px -top-94-px">
                                        <polygon points="-30,95 583,95 583,65" class="text-pink-500 fill-current"></polygon>
                                    </svg>
        
                                    <h4 class="text-xl font-bold text-white">
                                        Top Notch Services
                                    </h4>
                                    <p class="text-md font-light mt-2 text-white">
                                     
Our coworking space redefines top-notch service. Experience unparalleled security and dedicated community management alongside personalized workspace options and premium amenities like cafes and fitness centers. Thrive in a space designed for your success.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
        </section>




        <section>
            <div class="bg-blueGray-200  font-[sans-serif] p-4">
                <div class="max-w-7xl mx-auto">
                  <div class="text-center max-w-xl mx-auto">
                    <h2 class="text-3xl font-extrabold text-[#333] inline-block">LATEST BLOGS</h2>
                    <p class="text-gray-600 text-sm mt-6  ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
                  </div>
                  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12 max-md:max-w-lg mx-auto">
                    <div class="bg-white cursor-pointer rounded overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-50">
                      <img src="https://readymadeui.com/Imagination.webp" alt="Blog Post 1" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
                      <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
                        <span class="text-sm block mb-2 text-yellow-400 font-semibold">10 FEB 2023 | BY JOHN DOE</span>
                        <h3 class="text-xl font-bold text-white">A Guide to Igniting Your Imagination</h3>
                        <div class="mt-4">
                          <p class="text-gray-200 text-sm ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
                        </div>
                      </div>
                    </div>
                    <div class="bg-white cursor-pointer rounded overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-50">
                      <img src="https://readymadeui.com/hacks-watch.webp" alt="Blog Post 2" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
                      <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
                        <span class="text-sm block mb-2 text-yellow-400 font-semibold">7 JUN 2023 | BY MARK ADAIR</span>
                        <h3 class="text-xl font-bold text-white">Hacks to Supercharge Your Day</h3>
                        <div class="mt-4">
                          <p class="text-gray-200 text-sm ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
                        </div>
                      </div>
                    </div>
                    <div class="bg-white cursor-pointer rounded overflow-hidden group relative before:absolute before:inset-0 before:z-10 before:bg-black before:opacity-50">
                      <img src="https://readymadeui.com/prediction.webp" alt="Blog Post 3" class="w-full h-96 object-cover group-hover:scale-110 transition-all duration-300" />
                      <div class="p-6 absolute bottom-0 left-0 right-0 z-20">
                        <span class="text-sm block mb-2 text-yellow-400 font-semibold">5 OCT 2023 | BY SIMON KONECKI</span>
                        <h3 class="text-xl font-bold text-white">Trends and Predictions</h3>
                        <div class="mt-4">
                          <p class="text-gray-200 text-sm ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan, nunc et tempus blandit, metus mi consectetur felis turpis vitae ligula.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>


<section class="py-10">
    <div class="flex justify-center items-center">

        <div class="font-[sans-serif] text-white bg-gradient-to-r from-purple-800 to-indigo-800 py-12 px-4 w-[90vw]">
            <div class="max-w-7xl mx-auto">
              <h2 class="sm:text-4xl text-2xl font-extrabold text-center mb-16">Discover Our Exclusive Features</h2>
              <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-12 max-md:max-w-lg mx-auto">
                <div class="rounded-xl group p-8 text-center hover:bg-white hover:text-purple-800 hover:shadow-xl transition duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 mb-4 inline-block" viewBox="0 0 32 32">
                    <path d="M28.068 12h-.128a.934.934 0 0 1-.864-.6.924.924 0 0 1 .2-1.01l.091-.091a2.938 2.938 0 0 0 0-4.147l-1.511-1.51a2.935 2.935 0 0 0-4.146 0l-.091.091A.956.956 0 0 1 20 4.061v-.129A2.935 2.935 0 0 0 17.068 1h-2.136A2.935 2.935 0 0 0 12 3.932v.129a.956.956 0 0 1-1.614.668l-.086-.091a2.935 2.935 0 0 0-4.146 0l-1.516 1.51a2.938 2.938 0 0 0 0 4.147l.091.091a.935.935 0 0 1 .185 1.035.924.924 0 0 1-.854.579h-.128A2.935 2.935 0 0 0 1 14.932v2.136A2.935 2.935 0 0 0 3.932 20h.128a.934.934 0 0 1 .864.6.924.924 0 0 1-.2 1.01l-.091.091a2.938 2.938 0 0 0 0 4.147l1.51 1.509a2.934 2.934 0 0 0 4.147 0l.091-.091a.936.936 0 0 1 1.035-.185.922.922 0 0 1 .579.853v.129A2.935 2.935 0 0 0 14.932 31h2.136A2.935 2.935 0 0 0 20 28.068v-.129a.956.956 0 0 1 1.614-.668l.091.091a2.935 2.935 0 0 0 4.146 0l1.511-1.509a2.938 2.938 0 0 0 0-4.147l-.091-.091a.935.935 0 0 1-.185-1.035.924.924 0 0 1 .854-.58h.128A2.935 2.935 0 0 0 31 17.068v-2.136A2.935 2.935 0 0 0 28.068 12ZM29 17.068a.933.933 0 0 1-.932.932h-.128a2.956 2.956 0 0 0-2.083 5.028l.09.091a.934.934 0 0 1 0 1.319l-1.511 1.509a.932.932 0 0 1-1.318 0l-.09-.091A2.957 2.957 0 0 0 18 27.939v.129a.933.933 0 0 1-.932.932h-2.136a.933.933 0 0 1-.932-.932v-.129a2.951 2.951 0 0 0-5.028-2.082l-.091.091a.934.934 0 0 1-1.318 0l-1.51-1.509a.934.934 0 0 1 0-1.319l.091-.091A2.956 2.956 0 0 0 4.06 18h-.128A.933.933 0 0 1 3 17.068v-2.136A.933.933 0 0 1 3.932 14h.128a2.956 2.956 0 0 0 2.083-5.028l-.09-.091a.933.933 0 0 1 0-1.318l1.51-1.511a.932.932 0 0 1 1.318 0l.09.091A2.957 2.957 0 0 0 14 4.061v-.129A.933.933 0 0 1 14.932 3h2.136a.933.933 0 0 1 .932.932v.129a2.956 2.956 0 0 0 5.028 2.082l.091-.091a.932.932 0 0 1 1.318 0l1.51 1.511a.933.933 0 0 1 0 1.318l-.091.091A2.956 2.956 0 0 0 27.94 14h.128a.933.933 0 0 1 .932.932Z" data-original="#000000" />
                    <path d="M16 9a7 7 0 1 0 7 7 7.008 7.008 0 0 0-7-7Zm0 12a5 5 0 1 1 5-5 5.006 5.006 0 0 1-5 5Z" data-original="#000000" />
                  </svg>
                  <h3 class="text-xl font-semibold mb-2">High-Speed Wi-Fi</h3>
                  <p class="text-gray-300 group-hover:text-gray-500 text-sm"> Stay connected and upload with ease thanks to our blazing-fast and reliable internet connection..</p>
                </div>
                <div class="rounded-xl group p-8 text-center hover:bg-white hover:text-purple-800 hover:shadow-xl transition duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 mb-4 inline-block" viewBox="0 0 682.667 682.667">
                    <defs>
                      <clipPath id="a" clipPathUnits="userSpaceOnUse">
                        <path d="M0 512h512V0H0Z" data-original="#000000" />
                      </clipPath>
                    </defs>
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="40" clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                      <path d="M256 492 60 410.623v-98.925C60 183.674 137.469 68.38 256 20c118.53 48.38 196 163.674 196 291.698v98.925z" data-original="#000000" />
                      <path d="M178 271.894 233.894 216 334 316.105" data-original="#000000" />
                    </g>
                  </svg>
                  <h3 class="text-xl font-semibold mb-2">Cybersecurity Measures</h3>
                  <p class="text-gray-300 group-hover:text-gray-500 text-sm">The coworking space should have strong Wi-Fi encryption and data security protocols in place.</p>
                </div>
                <div class="rounded-xl group p-8 text-center hover:bg-white hover:text-purple-800 hover:shadow-xl transition duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 mb-4 inline-block" viewBox="0 0 512.001 512.001">
                    <path d="M271.029 0c-33.091 0-61 27.909-61 61s27.909 61 61 61 60-27.909 60-61-26.909-61-60-61zm66.592 122c-16.485 18.279-40.096 30-66.592 30-26.496 0-51.107-11.721-67.592-30-14.392 15.959-23.408 36.866-23.408 60v15c0 8.291 6.709 15 15 15h151c8.291 0 15-6.709 15-15v-15c0-23.134-9.016-44.041-23.408-60zM144.946 460.404 68.505 307.149c-7.381-14.799-25.345-20.834-40.162-13.493l-19.979 9.897c-7.439 3.689-10.466 12.73-6.753 20.156l90 180c3.701 7.423 12.704 10.377 20.083 6.738l19.722-9.771c14.875-7.368 20.938-25.417 13.53-40.272zM499.73 247.7c-12.301-9-29.401-7.2-39.6 3.9l-82 100.8c-5.7 6-16.5 9.6-22.2 9.6h-69.901c-8.401 0-15-6.599-15-15s6.599-15 15-15h60c16.5 0 30-13.5 30-30s-13.5-30-30-30h-78.6c-7.476 0-11.204-4.741-17.1-9.901-23.209-20.885-57.949-30.947-93.119-22.795-19.528 4.526-32.697 12.415-46.053 22.993l-.445-.361-21.696 19.094L174.28 452h171.749c28.2 0 55.201-13.5 72.001-36l87.999-126c9.9-13.201 7.2-32.399-6.299-42.3z" data-original="#000000" />
                  </svg>
                  <h3 class="text-xl font-semibold mb-2">Member Perks</h3>
                  <p class="text-gray-300 group-hover:text-gray-500 text-sm"> Get access to exclusive discounts on business services, educational resources, and health and wellness programs..</p>
                </div>
                <div class="rounded-xl group p-8 text-center hover:bg-white hover:text-purple-800 hover:shadow-xl transition duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 mb-4 inline-block" viewBox="0 0 24 24">
                    <g fill-rule="evenodd" clip-rule="evenodd">
                      <path d="M17.03 8.97a.75.75 0 0 1 0 1.06l-4.2 4.2a.75.75 0 0 1-1.154-.114l-1.093-1.639L8.03 15.03a.75.75 0 0 1-1.06-1.06l3.2-3.2a.75.75 0 0 1 1.154.114l1.093 1.639L15.97 8.97a.75.75 0 0 1 1.06 0z" data-original="#000000" />
                      <path d="M13.75 9.5a.75.75 0 0 1 .75-.75h2a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0v-1.25H14.5a.75.75 0 0 1-.75-.75z" data-original="#000000" />
                      <path d="M3.095 3.095C4.429 1.76 6.426 1.25 9 1.25h6c2.574 0 4.57.51 5.905 1.845C22.24 4.429 22.75 6.426 22.75 9v6c0 2.574-.51 4.57-1.845 5.905C19.571 22.24 17.574 22.75 15 22.75H9c-2.574 0-4.57-.51-5.905-1.845C1.76 19.571 1.25 17.574 1.25 15V9c0-2.574.51-4.57 1.845-5.905zm1.06 1.06C3.24 5.071 2.75 6.574 2.75 9v6c0 2.426.49 3.93 1.405 4.845.916.915 2.419 1.405 4.845 1.405h6c2.426 0 3.93-.49 4.845-1.405.915-.916 1.405-2.419 1.405-4.845V9c0-2.426-.49-3.93-1.405-4.845C18.929 3.24 17.426 2.75 15 2.75H9c-2.426 0-3.93.49-4.845 1.405z" data-original="#000000" />
                    </g>
                  </svg>
                  <h3 class="text-xl font-semibold mb-2">24/24 Access</h3>
                  <p class="text-gray-300 group-hover:text-gray-500 text-sm">Work when you're most productive, with after-hours and weekend access to our facilities.</p>
                </div>
                <div class="rounded-xl group p-8 text-center hover:bg-white hover:text-purple-800 hover:shadow-xl transition duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 mb-4 inline-block" viewBox="0 0 504.69 504.69">
                    <path d="M252.343 262.673c-49.32 0-89.447-40.127-89.447-89.447s40.127-89.447 89.447-89.447 89.447 40.127 89.447 89.447-40.121 89.447-89.447 89.447zm0-158.235c-37.926 0-68.787 30.861-68.787 68.787s30.861 68.787 68.787 68.787 68.787-30.861 68.787-68.787-30.855-68.787-68.787-68.787z" data-original="#000000" />
                    <path d="M391.787 405.309c-5.645 0-10.253-4.54-10.325-10.201-.883-70.306-58.819-127.503-129.15-127.503-49.264 0-93.543 27.405-115.561 71.52-8.724 17.473-13.269 36.31-13.517 55.988-.072 5.702-4.757 10.273-10.459 10.201s-10.273-4.757-10.201-10.459c.289-22.814 5.568-44.667 15.691-64.955 25.541-51.164 76.907-82.95 134.047-82.95 81.581 0 148.788 66.349 149.81 147.905.072 5.702-4.494 10.392-10.201 10.459-.046-.005-.087-.005-.134-.005z" data-original="#000000" />
                    <path d="M252.343 463.751c-116.569 0-211.408-94.834-211.408-211.408 0-116.569 94.839-211.408 211.408-211.408 116.574 0 211.408 94.839 211.408 211.408 0 116.574-94.834 211.408-211.408 211.408zm0-402.156c-105.18 0-190.748 85.568-190.748 190.748s85.568 190.748 190.748 190.748 190.748-85.568 190.748-190.748S357.523 61.595 252.343 61.595zM71.827 90.07 14.356 32.599c-4.034-4.034-4.034-10.573 0-14.607 4.029-4.034 10.573-4.034 14.607 0l57.466 57.471c4.034 4.034 3.951 10.49 0 14.607-3.792 3.951-11.039 3.698-14.602 0z" data-original="#000000" />
                    <path d="M14.717 92.254a10.332 10.332 0 0 1-10.299-9.653L.023 15.751a10.317 10.317 0 0 1 2.929-7.908 10.2 10.2 0 0 1 7.851-3.089L77.56 7.796c5.697.258 10.108 5.093 9.85 10.79s-5.041 10.154-10.79 9.85l-55.224-2.521 3.641 55.327c.377 5.692-3.936 10.614-9.628 10.986a7.745 7.745 0 0 1-.692.026zm403.541-2.184c-4.256-3.796-4.034-10.573 0-14.607l58.116-58.116c4.034-4.034 10.573-4.034 14.607 0s4.034 10.573 0 14.607L432.864 90.07c-4.085 3.951-9.338 4.7-14.606 0z" data-original="#000000" />
                    <path d="M489.974 92.254a9.85 9.85 0 0 1-.687-.021c-5.697-.372-10.01-5.294-9.633-10.986l3.641-55.327-55.224 2.515c-5.511.238-10.526-4.147-10.79-9.85-.258-5.702 4.153-10.531 9.85-10.79l66.757-3.042c2.934-.134 5.79.992 7.851 3.089s3.12 4.974 2.929 7.908l-4.401 66.85c-.361 5.465-4.896 9.654-10.293 9.654zM11.711 489.339c-3.791-4.266-4.034-10.573 0-14.607l60.115-60.11c4.029-4.034 10.578-4.034 14.607 0 4.034 4.034 4.034 10.573 0 14.607l-60.115 60.11c-3.827 3.884-11.156 3.884-14.607 0z" data-original="#000000" />
                    <path d="M10.327 499.947a10.33 10.33 0 0 1-7.376-3.104 10.312 10.312 0 0 1-2.929-7.902l4.401-66.85c.372-5.697 5.191-10.036 10.986-9.633 5.692.377 10.005 5.294 9.628 10.986l-3.641 55.332 55.224-2.515c5.645-.191 10.531 4.153 10.79 9.85.258 5.697-4.153 10.526-9.85 10.79l-66.763 3.037c-.155.004-.31.009-.47.009zm465.639-13.01-57.708-57.708c-4.034-4.034-4.034-10.573 0-14.607s10.573-4.034 14.607 0l57.708 57.708c4.034 4.034 3.962 10.5 0 14.607-3.817 3.951-10.062 3.951-14.607 0z" data-original="#000000" />
                    <path d="M494.359 499.947c-.155 0-.315-.005-.47-.01l-66.757-3.042c-5.702-.263-10.108-5.088-9.85-10.79.263-5.702 5.113-9.984 10.79-9.85l55.219 2.515-3.641-55.332c-.372-5.692 3.941-10.609 9.633-10.986 5.625-.398 10.609 3.946 10.986 9.633l4.401 66.85a10.33 10.33 0 0 1-2.929 7.902 10.323 10.323 0 0 1-7.382 3.11z" data-original="#000000" />
                  </svg>
                  <h3 class="text-xl font-semibold mb-2">Designed for Focus</h3>
                  <p class="text-gray-300 group-hover:text-gray-500 text-sm">We offer a variety of workspaces to suit your needs.</p>
                </div>
                <div class="rounded-xl group p-8 text-center hover:bg-white hover:text-purple-800 hover:shadow-xl transition duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 mb-4 inline-block" viewBox="0 0 682.667 682.667">
                    <defs>
                      <clipPath id="a" clipPathUnits="userSpaceOnUse">
                        <path d="M0 512h512V0H0Z" data-original="#000000" />
                      </clipPath>
                    </defs>
                    <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="30" clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                      <path d="M226 15v60c0 16.568-13.432 30-30 30H76c-16.568 0-30-13.432-30-30V15Zm-45 165c0-24.853-20.147-45-45-45s-45 20.147-45 45 20.147 45 45 45 45-20.147 45-45ZM466 15v60c0 16.568-13.432 30-30 30H316c-16.568 0-30-13.432-30-30V15Zm-45 165c0-24.853-20.147-45-45-45s-45 20.147-45 45 20.147 45 45 45 45-20.147 45-45Zm-75 167v-50.294L286 347h-60.002L166 296.706V347h-15c-41.421 0-75 33.579-75 75s33.579 75 75 75h210c41.421 0 75-33.579 75-75s-33.579-75-75-75Zm-105 75h30m-90 0h30m90 0h30" data-original="#000000" />
                    </g>
                  </svg>
                  <h3 class="text-xl font-semibold mb-2">Networking Events</h3>
                  <p class="text-gray-300 group-hover:text-gray-500 text-sm"> Connect with like-minded professionals at our regular workshops, social gatherings, and industry-specific events..</p>
                </div>
              </div>
            </div>
          </div>
    </div>
</section>
        
    </main>
</body>

<footer class="font-[sans-serif] bg-[#27282b] py-12 px-16">
    <div class="grid max-md-grid-cols-1 lg:grid-cols-2 gap-20">
        <div>
            <h4 class="text-white font-bold text-lg">About Us</h4>
            <p class="text-sm mt-6 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                gravida,
                mi eu pulvinar cursus, sem elit interdum mauris dipiscing elit. Aenean gravida,
                mi eu pulvinar cursus... <a href='javascript:void(0)'
                    class="text-sm font-semibold text-[#007bff]">Read
                    more</a></p>

            <ul class="grid max-sm:grid-cols-1 sm:grid-cols-2 mt-12 gap-2">
                <li class="flex items-center max-sm:mb-8">
                    <div class="bg-[#343538] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#fff'
                            viewBox="0 0 482.6 482.6">
                            <path
                                d="M98.339 320.8c47.6 56.9 104.9 101.7 170.3 133.4 24.9 11.8 58.2 25.8 95.3 28.2 2.3.1 4.5.2 6.8.2 24.9 0 44.9-8.6 61.2-26.3.1-.1.3-.3.4-.5 5.8-7 12.4-13.3 19.3-20 4.7-4.5 9.5-9.2 14.1-14 21.3-22.2 21.3-50.4-.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2-12.8 0-25.1 5.6-35.6 16.1l-35.8 35.8c-3.3-1.9-6.7-3.6-9.9-5.2-4-2-7.7-3.9-11-6-32.6-20.7-62.2-47.7-90.5-82.4-14.3-18.1-23.9-33.3-30.6-48.8 9.4-8.5 18.2-17.4 26.7-26.1 3-3.1 6.1-6.2 9.2-9.3 10.8-10.8 16.6-23.3 16.6-36s-5.7-25.2-16.6-36l-29.8-29.8c-3.5-3.5-6.8-6.9-10.2-10.4-6.6-6.8-13.5-13.8-20.3-20.1-10.3-10.1-22.4-15.4-35.2-15.4-12.7 0-24.9 5.3-35.6 15.5l-37.4 37.4c-13.6 13.6-21.3 30.1-22.9 49.2-1.9 23.9 2.5 49.3 13.9 80 17.5 47.5 43.9 91.6 83.1 138.7zm-72.6-216.6c1.2-13.3 6.3-24.4 15.9-34l37.2-37.2c5.8-5.6 12.2-8.5 18.4-8.5 6.1 0 12.3 2.9 18 8.7 6.7 6.2 13 12.7 19.8 19.6 3.4 3.5 6.9 7 10.4 10.6l29.8 29.8c6.2 6.2 9.4 12.5 9.4 18.7s-3.2 12.5-9.4 18.7c-3.1 3.1-6.2 6.3-9.3 9.4-9.3 9.4-18 18.3-27.6 26.8l-.5.5c-8.3 8.3-7 16.2-5 22.2.1.3.2.5.3.8 7.7 18.5 18.4 36.1 35.1 57.1 30 37 61.6 65.7 96.4 87.8 4.3 2.8 8.9 5 13.2 7.2 4 2 7.7 3.9 11 6 .4.2.7.4 1.1.6 3.3 1.7 6.5 2.5 9.7 2.5 8 0 13.2-5.1 14.9-6.8l37.4-37.4c5.8-5.8 12.1-8.9 18.3-8.9 7.6 0 13.8 4.7 17.7 8.9l60.3 60.2c12 12 11.9 25-.3 37.7-4.2 4.5-8.6 8.8-13.3 13.3-7 6.8-14.3 13.8-20.9 21.7-11.5 12.4-25.2 18.2-42.9 18.2-1.7 0-3.5-.1-5.2-.2-32.8-2.1-63.3-14.9-86.2-25.8-62.2-30.1-116.8-72.8-162.1-127-37.3-44.9-62.4-86.7-79-131.5-10.3-27.5-14.2-49.6-12.6-69.7z"
                                data-original="#000000" />
                        </svg>
                    </div>
                    <a href="javascript:void(0)" class="text-[#fff] text-sm ml-3">
                        <small class="block">Tel</small>
                        <strong>180-548-2588</strong>
                    </a>
                </li>
                <li class="flex items-center">
                    <div class="bg-[#343538] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#fff'
                            viewBox="0 0 479.058 479.058">
                            <path
                                d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                                data-original="#000000" />
                        </svg>
                    </div>
                    <a href="javascript:void(0)" class="text-[#fff] text-sm ml-3">
                        <small class="block">Mail</small>
                        <strong>info@example.com</strong>
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <h4 class="text-white font-bold text-lg">Newsletter</h4>
            <p class="text-sm mt-6 text-gray-400">Subscribe to our newsletter and stay up to date with the latest
                news,
                updates, and exclusive offers. Get valuable insights. Join our community today!</p>
            <div class="bg-[#343538] flex px-2 py-1 rounded-full mt-12">
                <input type='email' placeholder='Enter your email'
                    class="w-full outline-none text-gray-400 text-sm bg-transparent pl-4" />
                <button type='button'
                    class="bg-white hover:bg-gray-100 transition-all text-gray-600 font-semibold text-sm rounded-full px-5 py-2 ml-4">Submit</button>
            </div>
            <ul class="flex items-center justify-end mt-8 space-x-4">
                <li class="bg-[#343538] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                    <a href="javascript:void(0)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#fff'
                            viewBox="0 0 24 24">
                            <path
                                d="M6.812 13.937H9.33v9.312c0 .414.335.75.75.75l4.007.001a.75.75 0 0 0 .75-.75v-9.312h2.387a.75.75 0 0 0 .744-.657l.498-4a.75.75 0 0 0-.744-.843h-2.885c.113-2.471-.435-3.202 1.172-3.202 1.088-.13 2.804.421 2.804-.75V.909a.75.75 0 0 0-.648-.743A26.926 26.926 0 0 0 15.071 0c-7.01 0-5.567 7.772-5.74 8.437H6.812a.75.75 0 0 0-.75.75v4c0 .414.336.75.75.75zm.75-3.999h2.518a.75.75 0 0 0 .75-.75V6.037c0-2.883 1.545-4.536 4.24-4.536.878 0 1.686.043 2.242.087v2.149c-.402.205-3.976-.884-3.976 2.697v2.755c0 .414.336.75.75.75h2.786l-.312 2.5h-2.474a.75.75 0 0 0-.75.75V22.5h-2.505v-9.312a.75.75 0 0 0-.75-.75H7.562z"
                                data-original="#000000" />
                        </svg>
                    </a>
                </li>
                <li class="bg-[#343538] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                    <a href="javascript:void(0)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#fff'
                            viewBox="0 0 511 512">
                            <path
                                d="M111.898 160.664H15.5c-8.285 0-15 6.719-15 15V497c0 8.285 6.715 15 15 15h96.398c8.286 0 15-6.715 15-15V175.664c0-8.281-6.714-15-15-15zM96.898 482H30.5V190.664h66.398zM63.703 0C28.852 0 .5 28.352.5 63.195c0 34.852 28.352 63.2 63.203 63.2 34.848 0 63.195-28.352 63.195-63.2C126.898 28.352 98.551 0 63.703 0zm0 96.395c-18.308 0-33.203-14.891-33.203-33.2C30.5 44.891 45.395 30 63.703 30c18.305 0 33.195 14.89 33.195 33.195 0 18.309-14.89 33.2-33.195 33.2zm289.207 62.148c-22.8 0-45.273 5.496-65.398 15.777-.684-7.652-7.11-13.656-14.942-13.656h-96.406c-8.281 0-15 6.719-15 15V497c0 8.285 6.719 15 15 15h96.406c8.285 0 15-6.715 15-15V320.266c0-22.735 18.5-41.23 41.235-41.23 22.734 0 41.226 18.495 41.226 41.23V497c0 8.285 6.719 15 15 15h96.403c8.285 0 15-6.715 15-15V302.066c0-79.14-64.383-143.523-143.524-143.523zM466.434 482h-66.399V320.266c0-39.278-31.953-71.23-71.226-71.23-39.282 0-71.239 31.952-71.239 71.23V482h-66.402V190.664h66.402v11.082c0 5.77 3.309 11.027 8.512 13.524a15.01 15.01 0 0 0 15.875-1.82c20.313-16.294 44.852-24.907 70.953-24.907 62.598 0 113.524 50.926 113.524 113.523zm0 0"
                                data-original="#000000" />
                        </svg>
                    </a>
                </li>
                <li class="bg-[#343538] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                    <a href="javascript:void(0)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#fff'
                            viewBox="0 0 682.667 682.667">
                            <defs>
                                <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                    <path d="M0 512h512V0H0Z" data-original="#fff" />
                                </clipPath>
                            </defs>
                            <g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" stroke-width="40" clip-path="url(#a)"
                                transform="matrix(1.33 0 0 -1.33 0 682.667)">
                                <path
                                    d="M492 255.75c0-39.49-3.501-75.479-7.497-103.698-5.191-36.655-34.801-64.96-71.646-68.567C373.764 79.658 318.529 75.75 256 75.75c-62.529 0-117.764 3.908-156.857 7.735-36.845 3.607-66.455 31.912-71.646 68.567C23.501 180.271 20 216.26 20 255.75c0 39.49 3.501 75.479 7.497 103.698 5.191 36.655 34.801 64.96 71.646 68.567 39.093 3.827 94.328 7.735 156.857 7.735 62.529 0 117.764-3.908 156.857-7.735 36.845-3.607 66.455-31.912 71.646-68.567C488.499 331.229 492 295.24 492 255.75Z"
                                    data-original="#000000" />
                                <path
                                    d="m245.5 185.291 75.914 45.165c19.448 11.57 19.448 39.518 0 51.088L245.5 326.709c-20.024 11.913-45.5-2.39-45.5-25.544v-90.33c0-23.154 25.476-37.457 45.5-25.544Z"
                                    data-original="#000000" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="bg-[#343538] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                    <a href="javascript:void(0)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#fff'
                            viewBox="0 0 24 24">
                            <path
                                d="M12 9.3a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4Zm0-1.8a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9Zm5.85-.225a1.125 1.125 0 1 1-2.25 0 1.125 1.125 0 0 1 2.25 0ZM12 4.8c-2.227 0-2.59.006-3.626.052-.706.034-1.18.128-1.618.299a2.59 2.59 0 0 0-.972.633 2.601 2.601 0 0 0-.634.972c-.17.44-.265.913-.298 1.618C4.805 9.367 4.8 9.714 4.8 12c0 2.227.006 2.59.052 3.626.034.705.128 1.18.298 1.617.153.392.333.674.632.972.303.303.585.484.972.633.445.172.918.267 1.62.3.993.047 1.34.052 3.626.052 2.227 0 2.59-.006 3.626-.052.704-.034 1.178-.128 1.617-.298.39-.152.674-.333.972-.632.304-.303.485-.585.634-.972.171-.444.266-.918.299-1.62.047-.993.052-1.34.052-3.626 0-2.227-.006-2.59-.052-3.626-.034-.704-.128-1.18-.299-1.618a2.619 2.619 0 0 0-.633-.972 2.595 2.595 0 0 0-.972-.634c-.44-.17-.914-.265-1.618-.298-.993-.047-1.34-.052-3.626-.052ZM12 3c2.445 0 2.75.009 3.71.054.958.045 1.61.195 2.185.419A4.388 4.388 0 0 1 19.49 4.51c.457.45.812.994 1.038 1.595.222.573.373 1.227.418 2.185.042.96.054 1.265.054 3.71 0 2.445-.009 2.75-.054 3.71-.045.958-.196 1.61-.419 2.185a4.395 4.395 0 0 1-1.037 1.595 4.44 4.44 0 0 1-1.595 1.038c-.573.222-1.227.373-2.185.418-.96.042-1.265.054-3.71.054-2.445 0-2.75-.009-3.71-.054-.958-.045-1.61-.196-2.185-.419A4.402 4.402 0 0 1 4.51 19.49a4.414 4.414 0 0 1-1.037-1.595c-.224-.573-.374-1.227-.419-2.185C3.012 14.75 3 14.445 3 12c0-2.445.009-2.75.054-3.71s.195-1.61.419-2.185A4.392 4.392 0 0 1 4.51 4.51c.45-.458.994-.812 1.595-1.037.574-.224 1.226-.374 2.185-.419C9.25 3.012 9.555 3 12 3Z">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="lg:flex lg:item-center mt-12">
        <ul class="flex flex-wrap gap-4">
            <li>
                <a href='javascript:void(0)' class='text-gray-400 hover:text-white text-sm'>Terms of Service</a>
            </li>
            <li>
                <a href='javascript:void(0)' class='text-gray-400 hover:text-white text-sm'>Privacy Policy</a>
            </li>
            <li>
                <a href='javascript:void(0)' class='text-gray-400 hover:text-white text-sm'>Security</a>
            </li>
        </ul>
        <p class='text-sm text-gray-400 lg:ml-auto max-lg:mt-6'>Copyright © 2023<a href='https://readymadeui.com/'
                target='_blank' class="hover:underline mx-1">ReadymadeUI</a>All Rights Reserved.</p>
    </div>
</footer>




<script>


    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    // add event listeners
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>

{{-- <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header> --}}



</html>
