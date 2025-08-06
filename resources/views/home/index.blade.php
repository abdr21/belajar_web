
@extends('layouts.app')

@section('content')

<section class="text-center py-16 px-6 bg-cover bg-center h-[600px] text-white dark:text-gray-100 dark:bg-gray-900"
  style="background-image: url('{{ asset('img/mobil.png') }}')">

  <h2 class="text-3xl font-bold mb-4 mt-20 text-sky-600 dark:text-sky-300">{{ __('One Stop Solution for Car Maintenance and Modification') }}</h2>
  <p class="mb-6 text-lg dark:text-gray-300">{{ __('Boost your own Website') }}</p>
  <p class="mb-6 dark:text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  <div class="space-x-4">
    <a href="{{ route('service') }}" class="bg-sky-600 text-white px-6 py-2 rounded hover:bg-sky-700 dark:bg-sky-300 dark:text-gray-900 dark:hover:bg-sky-500">{{ __('Get Started') }}</a>
    <a href="{{ route('contact') }}" class="border border-sky-600 text-sky-600 px-6 py-2 rounded hover:bg-sky-300 dark:border-sky-300 dark:text-sky-300 dark:hover:bg-sky-100">{{ __('Contact Us') }}</a>
  </div>
</section>

<section class="py-16 px-6 bg-white dark:bg-gray-800 grid md:grid-cols-3 gap-6 text-center">
  <div class="pt-2">
    <i class="bi bi-wrench-adjustable text-sky-600 dark:text-sky-300 relative bottom-1/12" style="font-size: 3rem"></i>
    <h3 class="text-xl font-semibold mb-2 relative bottom-2 dark:text-sky-300">{{ __('Car Service – Top Performance, Safe on the Road') }}</h3>
    <p class="relative bottom-2 dark:text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  </div>
  <div>
    <i class="bi bi-car-front relative left-3 text-sky-600 dark:text-sky-300" style="font-size: 3rem"></i>
    <i class="bi bi-droplet-half relative bottom-4/12 right-6 text-sky-600 dark:text-sky-300"></i>
    <h3 class="text-xl font-semibold mb-2 dark:text-sky-300">{{ __('Car Wash – Shiny Like New') }}</h3>
    <p class="dark:text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  </div>
  <div>
    <i class="bi bi-speedometer text-sky-600 dark:text-sky-300" style="font-size: 3rem"></i>
    <h3 class="text-xl font-semibold mb-2 dark:text-sky-300">{{ __('Car Modification – Look Different, Look Cooler') }}</h3>
    <p class="dark:text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  </div>
</section>

<section class="py-16 px-6 bg-gray-100 dark:bg-gray-900">
  <h2 class="text-3xl font-bold text-center mb-8 dark:text-sky-300">{{ __('Latest Projects') }}</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    @foreach($projects as $project)
      <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
        <h3 class="text-xl font-semibold mb-2 dark:text-sky-300">{{ $project->title }}</h3>
        <p class="text-gray-600 mb-4 dark:text-gray-300">{{ $project->created_at->format('d M Y') }}</p>
        <p class="text-gray-600 mb-4 dark:text-gray-300">{{ $project->category->name }}</p>
        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-48 object-cover rounded-t-lg mb-4">
        <p class="text-gray-600 mb-4 dark:text-gray-300">{{ Str::limit($project->description, 100) }}</p>
      </div>
    @endforeach
  </div>
</section>

<section class="py-16 px-6 bg-white dark:bg-gray-800">
  <h2 class="text-3xl font-bold text-center mb-8 dark:text-sky-300">{{ __('Customer Testimonials') }}</h2>
  <div class="grid grid-cols-1 md:grid-cols-2  lg:grid-cols-3 gap-6">
    @foreach($testimonials as $testimonial)
      <div class="bg-gray-100 dark:bg-gray-900 p-4 rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
        <p class="text-gray-600 mb-4 dark:text-gray-300">{{ $testimonial->message }}</p>
        <p class="font-semibold dark:text-sky-300">{{ $testimonial->name }}</p>
      </div>
    @endforeach
  </div>
</section>

@endsection