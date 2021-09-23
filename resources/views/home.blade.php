@extends('layout.app')
@section('content')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="my-5"></div>
    <div x-data="{ cartOpen: false , isOpen: false }" class="bg-gray-50">

        <main class="my-5" style="margin-top: 10px">
            <div class="container mx-auto px-6">
                <div class="h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('https://d1ralsognjng37.cloudfront.net/88f31835-34ab-421f-9f54-57fe88f20754.jpeg')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Breakfast</h2>
                            <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                            <a href="{{url('menu')}}" class="flex items-center w-3/12 mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <span>Book</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="my-5"></div>
                <div class="md:flex mt-8 md:-mx-4">
                    <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('https://www.roadaffair.com/wp-content/uploads/2015/08/seafood-jamaican-dish_road-affair.jpg')">
                        <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                            <div class="px-10 max-w-xl">
                                <h2 class="text-2xl text-white font-semibold">Lunch</h2>
                                <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                                <a href="{{url('menu')}}" class="flex items-center w-3/12 mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                    <span>Book</span>
                                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2" style="background-image: url('https://royalwestindies.com/wp-content/uploads/2020/04/9345_Caribbean-Jamaica-eat-drink-Seahorse-Grill-restaurant-bar-ocean-waterfront-lobster.jpg')">
                        <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                            <div class="px-10 max-w-xl">
                                <h2 class="text-2xl text-white font-semibold">Supper</h2>
                                <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                                <a href="{{url('menu')}}" class="flex items-center w-3/12 mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                    <span>Book</span>
                                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

{{--            <div class="bg-black">--}}
{{--                <section class="text-gray-600 body-font">--}}
{{--                    <div class="container px-5 py-5 mx-auto max-w-7x1">--}}
{{--                        <div class="flex flex-wrap w-full mb-4 p-4">--}}
{{--                            <div class="w-full mb-6 lg:mb-0">--}}
{{--                                <h1 class="sm:text-4xl text-5xl font-medium font-bold title-font mb-2 text-gray-900">Course Available</h1>--}}
{{--                                <div class="h-1 w-20 bg-indigo-500 rounded"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="flex flex-wrap -m-4">--}}
{{--                            <div class="xl:w-1/3 md:w-1/2 p-4">--}}
{{--                                <div class="bg-white p-6 rounded-lg">--}}
{{--                                    <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6" src="https://cdn.seeklearning.com.au/media/images/career-guide/module/information-technology-technician-module.jpg" alt="Image Size 720x400">--}}
{{--                                    <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
{{--                                    <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Network Support level 2</h2>--}}
{{--                                    <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="xl:w-1/3 md:w-1/2 p-4">--}}
{{--                                <div class="bg-white p-6 rounded-lg">--}}
{{--                                    <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://entrepreneurhandbook.co.uk/wp-content/uploads/2014/11/Smiling-customer-service-representative.jpg.webp" alt="Image Size 720x400">--}}
{{--                                    <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
{{--                                    <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Customer Service Level 2</h2>--}}
{{--                                    <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="xl:w-1/3 md:w-1/2 p-4">--}}
{{--                                <div class="bg-white p-6 rounded-lg">--}}
{{--                                    <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://www.careermatch.com/job-prep/wp-content/uploads/sites/2/2018/09/administrative-assistant.jpg" alt="Image Size 720x400">--}}
{{--                                    <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
{{--                                    <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Administrative Assistant Level 3 </h2>--}}
{{--                                    <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="xl:w-1/3 md:w-1/2 p-4">--}}
{{--                                <div class="bg-white p-6 rounded-lg">--}}
{{--                                    <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://futurecio.tech/wp-content/uploads/2020/09/pexels-photo-3840870.jpeg " alt="Image Size 720x400">--}}
{{--                                    <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
{{--                                    <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Customer Engagement Operations Level 2</h2>--}}
{{--                                    <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="xl:w-1/3 md:w-1/2 p-4">--}}
{{--                                <div class="bg-white p-6 rounded-lg">--}}
{{--                                    <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://futurecio.tech/wp-content/uploads/2020/09/pexels-photo-3840870.jpeg " alt="Image Size 720x400">--}}
{{--                                    <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>--}}
{{--                                    <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Customer Engagement Operations Level 2</h2>--}}
{{--                                    <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
{{--            </div>--}}
        <footer class="bg-gray-200">
            <div class="container mx-auto px-6 py-3 flex justify-between items-center">
                <a href="#" class="text-xl font-bold text-gray-500 hover:text-gray-400">Brand</a>
                <p class="py-2 text-gray-500 sm:py-0">All rights reserved</p>
            </div>
        </footer>
    </div>
@endsection
