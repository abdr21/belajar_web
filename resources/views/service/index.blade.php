@extends ('layouts.app')

@section('content')
<section class="py-16 px-6 bg-white">
  <h2 class="text-3xl font-bold text-center mb-8">Layanan Kami</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="bg-gray-100 p-4 rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
      <h3 class="text-xl font-semibold mb-2">Servis Mobil</h3>
      <p class="text-gray-600 mb-4">Performa Prima, Aman di Jalan</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
    <div class="bg-gray-100 p-4 rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
      <h3 class="text-xl font-semibold mb-2">Cuci Mobil</h3>
      <p class="text-gray-600 mb-4">Kinclong Seperti Baru</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
    <div class="bg-gray-100 p-4 rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
      <h3 class="text-xl font-semibold mb-2">Modifikasi Mobil</h3>
      <p class="text-gray-600 mb-4">Tampil Beda, Lebih Keren</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
  </div>
</section>  
@endsection