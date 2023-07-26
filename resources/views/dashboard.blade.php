@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    @include('components.navbar')

    {{-- Pricing --}}
    <div class="grid grid-cols-12 gap-6 mx-40 my-24">
        <div class="col-span-12 text-center">
            <p class="font-semibold text-2xl">Our Pricing</p>
            <p class="font-medium">Penawaran terbaik untuk anda</p>
        </div>
        <div class="col-span-4 text-center bg-white rounded-xl drop-shadow-xl shadow-lg shadow-gray-400">
            <p class="font-semibold text-2xl uppercase tracking-widest p-6 bg-blue-500 text-white rounded-t-xl">Basic</p>
            <p class="font-semibold text-2xl tracking-wide my-10">20k/Project</p>
            <div class="space-y-2">
                <p>10 Graphic Content</p>
                <p>Design Theme</p>
                <p>5 Photo Product</p>
            </div>
            <button class="py-1 px-4 font-medium  bg-blue-500 rounded-lg my-10 text-white">Get This</button>
        </div>
        <div class="col-span-4 text-center bg-blue-500 rounded-xl drop-shadow-xl shadow-lg shadow-gray-400">
            <p class="font-semibold text-2xl uppercase tracking-widest p-6 bg-white text-blue-500 rounded-t-xl">Standard</p>
            <p class="font-semibold text-2xl tracking-wide my-10 text-white">20k/Project</p>
            <div class="space-y-2 text-white">
                <p>10 Graphic Content</p>
                <p>Design Theme</p>
                <p>5 Photo Product</p>
            </div>
            <button class="py-1 px-4 font-medium  bg-white rounded-lg my-10 text-blue-500">Get This</button>
        </div>
        <div class="col-span-4 text-center bg-white rounded-xl drop-shadow-xl shadow-lg shadow-gray-400">
            <p class="font-semibold text-2xl uppercase tracking-widest p-6 bg-blue-500 text-white rounded-t-xl">Premium</p>
            <p class="font-semibold text-2xl tracking-wide my-10">20k/Project</p>
            <div class="space-y-2">
                <p>10 Graphic Content</p>
                <p>Design Theme</p>
                <p>5 Photo Product</p>
            </div>
            <button class="py-1 px-4 font-medium  bg-blue-500 rounded-lg my-10 text-white">Get This</button>
        </div>
    </div>

    {{-- Service --}}
    <div class="grid grid-cols-12 gap-8 mx-40 mb-24">
        <div class="col-span-12 text-center">
            <p class="font-semibold text-2xl">Our Service</p>
            <p class="font-medium">Layanan yang kita tawarkan untuk anda</p>
        </div>
        <div class="col-span-4 text-center rounded-xl bg-white shadow-xl shadow-gray-400">
            <div class="p-2 flex justify-center items-center rounded-full mx-auto bg-blue-500 w-14 h-14 mt-10">
                <svg id="service" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg>
            </div>
            <p class="text-xl font-bold my-2.5 tracking-wide">Design</p>
            <p class="font-medium mx-10 mb-10">Membuat tampilan instagram anda lebih menarik</p>
        </div>
        <div class="col-span-4 text-center rounded-xl bg-white shadow-xl shadow-gray-400">
            <div class="p-2 flex justify-center items-center rounded-full mx-auto bg-blue-500 w-14 h-14 mt-10">
                <svg id="service" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M149.1 64.8L138.7 96H64C28.7 96 0 124.7 0 160V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H373.3L362.9 64.8C356.4 45.2 338.1 32 317.4 32H194.6c-20.7 0-39 13.2-45.5 32.8zM256 192a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"/></svg>
            </div>
            <p class="text-xl font-bold my-2.5 tracking-wide">Photo</p>
            <p class="font-medium mx-10 mb-10">Membuat foto produk anda lebih menarik</p>
        </div>
        <div class="col-span-4 text-center rounded-xl bg-white shadow-xl shadow-gray-400">
            <div class="p-2 flex justify-center items-center rounded-full mx-auto bg-blue-500 w-14 h-14 mt-10">
                <svg id="service" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V320 192 174.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"/></svg>
            </div>
            <p class="text-xl font-bold my-2.5 tracking-wide">Video</p>
            <p class="font-medium mx-10 mb-10">Membuat konsep, pengambilan video dan mengedit video</p>
        </div>
        <div class="col-span-2 h-20 ">

        </div>
        <div class="col-span-4 text-center rounded-xl bg-white shadow-xl shadow-gray-400">
            <div class="p-2 flex justify-center items-center rounded-full mx-auto bg-blue-500 w-14 h-14 mt-10">
                <svg id="service" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM112 192H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
            </div>
            <p class="text-xl font-bold my-2.5 tracking-wide">Caption</p>
            <p class="font-medium mx-10 mb-10">Membuat bahasa yang persuasif untuk menarik audiens</p>
        </div>
        <div class="col-span-4 text-center rounded-xl bg-white shadow-xl shadow-gray-400">
            <div class="p-2 flex justify-center items-center rounded-full mx-auto bg-blue-500 w-14 h-14 mt-10">
                <svg id="service" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64H240l-10.7 32H160c-17.7 0-32 14.3-32 32s14.3 32 32 32H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H346.7L336 416H512c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM512 64V352H64V64H512z"/></svg>
            </div>
            <p class="text-xl font-bold my-2.5 tracking-wide">Landing Page</p>
            <p class="font-medium mx-10 mb-10">Membuat halaman website untuk kepentingan marketing</p>
        </div>
        <div class="col-span-2 h-20 ">

        </div>
    </div>

    {{-- Contacts --}}
    <div class="grid grid-cols-12 gap-4 mx-40">
        <div class="relative col-span-12 bg-gradient-to-b from-sky-500 from-0% to-cyan-200 to-90% p-4 rounded-lg">
            <p class="text-center mb-4 text-2xl font-semibold tracking-wide text-white">Contact Us</p>
            <div class="absolute bg-sky-800 text-white p-4 w-3/12 space-y-5 left-6 top-1/4 rounded-md">
                <p class="text-lg font-medium tracking-wide ml-2">Contact Information</p>
                <div class="flex space-x-4 items-center">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>{{ $contact->alamat }}</p>
                </div>
                <div class="flex space-x-4 items-center">
                    <i class="fa-solid fa-envelope"></i>
                    <p>{{ $contact->email }}</p>
                </div>
                <div class="flex space-x-4 items-center">
                    <i class="fa-solid fa-phone"></i>
                    <p>{{ $contact->kontak }}</p>
                </div>
                <div class="flex space-x-4 items-center">
                    <a href="#">
                        <svg id="contact" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/>
                        </svg>
                    </a>
                    <a href="#">
                        <svg id="contact" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                        </svg>
                    </a>
                    <a href="#">
                        <svg id="contact" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex justify-end w-full">
                <div class="pl-28 bg-white w-10/12">
                    <p class="pl-20 pt-10 text-xl font-semibold tracking-wide">Send a Message</p>
                    <div class="grid grid-cols-2 gap-10 px-20 py-10">
                        <div class="col-span-1 border-b border-gray-900 py-2">
                            <label class="text-lg font-semibold text-blue-500" for="name">Your Name</label>
                            <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Enter your name" aria-label="Your Name">
                        </div>
                        <div class="col-span-1 border-b border-gray-900 py-2">
                            <label class="text-lg font-semibold text-blue-500" for="number">Phone Number</label>
                            <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Enter your phone number" aria-label="Your Phone Number">
                        </div>
                        <div class="col-span-1 border-b border-gray-900 py-2">
                            <label class="text-lg font-semibold text-blue-500" for="subject">Subject</label>
                            <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Enter your subject" aria-label="Your Subject">
                        </div>
                        <div class="col-span-1 border-b border-gray-900 py-2">
                            <label class="text-lg font-semibold text-blue-500" for="email">Email</label>
                            <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Enter your email address" aria-label="Your Email">
                        </div>
                        <div class="col-span-2 border-b border-gray-900 py-2">
                            <label class="text-lg font-semibold text-blue-500" for="message">Write your message here..</label>
                            <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Write your message" aria-label="Your Message">
                        </div>
                        <div>

                        </div>
                        <button class="p-4 bg-blue-500 text-white font-semibold rounded-md">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')


    <style>
        #contact{fill:#ffffff}
        #service{fill:#ffffff}
    </style>

@endsection
