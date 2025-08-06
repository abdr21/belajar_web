@extends ('layouts.app')

@section('content')

<section class="text-center py-16 px-6  bg-cover bg-center h-[600px] text-white"
  style="background-image: url('{{asset('img/mobil.png')}}')">

  <h2 class="text-3xl font-bold mb-4 mt-20 text-amber-600">One Stop Solution untuk Perawatan dan Modifikasi Mobil</h2>
  <p class="mb-6 text-lg">Boost your own Website</p>
  <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  <div class="space-x-4">
    <a href="{{route('service')}}" class="bg-amber-600 text-white px-6 py-2 rounded hover:bg-amber-700">Get Started</a>
    <a href="{{route('contact')}}" class="border border-amber-600 text-amber-600 px-6 py-2 rounded hover:bg-amber-300">Contact Us</a>
  </div>
</section>

<section class="py-16 px-6 bg-white grid md:grid-cols-3 gap-6 text-center">
  <div class="pt-2">
    <i class="bi bi-wrench-adjustable text-amber-600 relative bottom-1/12" style="font-size: 3rem"></i>
    <!--<button class="bg-amber-600 text-blue-400  py-2 rounded-full mb-4 w-12 h-12 mx-auto text-2xl font-bold hover:bg-amber-800">1</button>-->

    <h3 class="text-xl font-semibold mb-2 relative bottom-2">1. Servis Mobil – Performa Prima, Aman di Jalan</h3>
    <p class="relative bottom-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  </div>
  <div>
    <!--<i class="bi bi-airplane-fill mx-auto text-amber-600 text-5x pt-2"style="font-size: 3rem"></i>-->
    <!--<div class="bg-amber-600 text-white  py-2 rounded-full mb-4 w-12 h-12 mx-auto text-2xl ">2</div>-->
    <i class="bi bi-car-front relative left-3 text-amber-600" style="font-size: 3rem"></i>
    <i class="bi bi-droplet-half relative bottom-4/12 right-6 text-amber-600"></i>
    <h3 class="text-xl font-semibold mb-2 ">2. Cuci Mobil – Kinclong Seperti Baru</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  </div>
  <div>
    <!--<div class="bg-amber-600 text-white  py-2 rounded-full mb-4 w-12 h-12 mx-auto text-2xl ">3</div>-->
    <i class="bi bi-speedometer text-amber-600 " style="font-size: 3rem"></i>
    <h3 class="text-xl font-semibold mb-2 ">3. Modifikasi Mobil – Tampil Beda, Lebih Keren</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  </div>
  </div>
</section>

<section class="py-16 px-6 bg-gray-100">
  <h2 class="text-3xl font-bold text-center mb-8">Proyek Terbaru</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    @foreach($projects as $project)
      <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
        <h3 class="text-xl font-semibold mb-2">{{ $project->title }}</h3>
        <p class="text-gray-600 mb-4">{{ $project->created_at->format('d M Y') }}</p>
        <p class="text-gray-600 mb-4">{{ $project->category->name }}</p>
        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-48 object-cover rounded-t-lg mb-4">
        
        <p class="text-gray-600 mb-4">{{ Str::limit($project->description, 100) }}</p>
        
      </div>
    @endforeach
  </div>

</section>
<section class="py-16 px-6 bg-white">
  <h2 class="text-3xl font-bold text-center mb-8">Testimoni Pelanggan</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($testimonials as $testimonial)
      <div class="bg-gray-100 p-4 rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
        <p class="text-gray-600 mb-4">{{ $testimonial->message }}</p>
        <p class="font-semibold">{{ $testimonial->name }}</p>
      </div>
    @endforeach
  </div>
</section>

@endsection