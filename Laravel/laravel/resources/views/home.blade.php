@extends('layouts.app')

@section('content')

<title>Home - Neon Pulse</title>

<div class="min-h-screen bg-gradient-to-br from-black via-[#0f172a] to-[#020617] text-white py-10 px-6">

  <div class="text-center mb-12">
    <h1 class="text-4xl font-bold tracking-widest text-cyan-400 drop-shadow-lg">
      Welcome to Neon Pulse
    </h1>
    <p class="mt-3 text-gray-400">
      Dive into the digital universe of 
      <a href="/artist" class="text-cyan-400 hover:underline">Synthetic Echo</a>
    </p>

    <div class="mt-5 inline-block bg-cyan-500/10 border border-cyan-400/30 px-4 py-2 rounded-xl">
      <p class="text-cyan-300 font-semibold">Feel the frequency</p>
    </div>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

    <div class="cursor-pointer bg-[#111827] rounded-2xl overflow-hidden border border-cyan-500/20 hover:scale-105 hover:shadow-cyan-500/30 hover:shadow-xl transition duration-300">
      <img class="w-full h-52 object-cover" src="https://picsum.photos/400/300?random=10">
      <div class="p-5">
        <h2 class="text-xl font-bold text-cyan-400 mb-2">Sound Archives</h2>
        <p class="text-gray-400">Explore the sonic creations and digital albums of Neon Pulse.</p>
      </div>
    </div>

    <div class="cursor-pointer bg-[#111827] rounded-2xl overflow-hidden border border-pink-500/20 hover:scale-105 hover:shadow-pink-500/30 hover:shadow-xl transition duration-300">
      <img class="w-full h-52 object-cover" src="https://picsum.photos/400/300?random=11">
      <div class="p-5">
        <h2 class="text-xl font-bold text-pink-400 mb-2">Network</h2>
        <p class="text-gray-400">Connect with others inside the Neon Pulse digital community.</p>
      </div>
    </div>

    <div class="cursor-pointer bg-[#111827] rounded-2xl overflow-hidden border border-purple-500/20 hover:scale-105 hover:shadow-purple-500/30 hover:shadow-xl transition duration-300">
      <img class="w-full h-52 object-cover" src="https://picsum.photos/400/300?random=12">
      <div class="p-5">
        <h2 class="text-xl font-bold text-purple-400 mb-2">Signal Updates</h2>
        <p class="text-gray-400">Stay updated with transmissions, releases and future drops.</p>
      </div>
    </div>

  </div>

  <div class="mt-16 text-center text-gray-500 text-sm">
    Developed by <span class="text-cyan-400 font-semibold">Beatriz Batista</span>
  </div>

</div>

@endsection