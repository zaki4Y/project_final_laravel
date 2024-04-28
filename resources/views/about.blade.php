@extends('layouts.index')
@section('content')
<section class="bg-gray-100">
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-lg">
                <h2 class="text-3xl  text-gray-900 sm:text-4xl font-[Montserrat-b]">About Us</h2>
                <p class="mt-4 text-gray-600 text-lg font-[OpenSans-b]">We are more than just a coworking space; we're a vibrant community designed to empower your success. Here, you'll find everything you need to thrive, from unparalleled security and dedicated community managers to personalized workspace options and premium amenities.
                    .</p>
                <div class="mt-8">
                    <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">Learn more about us
                        <span class="ml-2">&#8594;</span></a>
                </div>
            </div>
            <div class="mt-12 md:mt-0">
                <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Us Image" class="object-cover rounded-lg shadow-md">
            </div>
        </div>
    </div>
</section>
@endsection