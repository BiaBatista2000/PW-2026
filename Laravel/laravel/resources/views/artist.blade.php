@extends('layouts.app')

@section('content')

<title>Neon Pulse - Synthetic Echo</title>

<div class="min-h-screen bg-gradient-to-br from-black via-[#0f172a] to-[#020617] text-white p-6">

    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold tracking-widest text-cyan-400 drop-shadow-lg">
            NEON PULSE
        </h1>
        <p class="text-gray-400 mt-2">Synthetic Echo Experience</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

        <div class="bg-[#111827] rounded-2xl overflow-hidden border border-cyan-500/20 hover:scale-105 hover:shadow-cyan-500/30 hover:shadow-xl transition duration-300">
            <img class="w-full h-60 object-cover" src="https://picsum.photos/300/400?random=1">
            <div class="p-4 text-center">
                <h2 class="text-xl font-bold text-cyan-400">Aiden Flux</h2>
                <p class="text-gray-400">Lead Synth</p>
            </div>
        </div>

        <div class="bg-[#111827] rounded-2xl overflow-hidden border border-pink-500/20 hover:scale-105 hover:shadow-pink-500/30 hover:shadow-xl transition duration-300">
            <img class="w-full h-60 object-cover" src="https://picsum.photos/300/400?random=2">
            <div class="p-4 text-center">
                <h2 class="text-xl font-bold text-pink-400">Nova Vex</h2>
                <p class="text-gray-400">Vocals</p>
            </div>
        </div>

        <div class="bg-[#111827] rounded-2xl overflow-hidden border border-purple-500/20 hover:scale-105 hover:shadow-purple-500/30 hover:shadow-xl transition duration-300">
            <img class="w-full h-60 object-cover" src="https://picsum.photos/300/400?random=3">
            <div class="p-4 text-center">
                <h2 class="text-xl font-bold text-purple-400">Kai Draven</h2>
                <p class="text-gray-400">Bass Pulse</p>
            </div>
        </div>

        <div class="bg-[#111827] rounded-2xl overflow-hidden border border-green-500/20 hover:scale-105 hover:shadow-green-500/30 hover:shadow-xl transition duration-300">
            <img class="w-full h-60 object-cover" src="https://picsum.photos/300/400?random=4">
            <div class="p-4 text-center">
                <h2 class="text-xl font-bold text-green-400">Zyra Volt</h2>
                <p class="text-gray-400">Digital Guitar</p>
            </div>
        </div>

    </div>

    <div class="mt-12 max-w-3xl mx-auto text-center">
        <p class="text-gray-300 leading-relaxed">
            <span class="text-cyan-400 font-semibold">Neon Pulse</span> is a futuristic experimental band blending 
            electronic waves, synth energy, and cyberpunk aesthetics. Their sound mixes atmospheric beats, 
            digital distortion, and emotional vocals, creating a unique immersive experience inspired by a 
            dystopian digital world.
        </p>
    </div>

    <div class="mt-16 text-center text-gray-500 text-sm">
        Developed by <span class="text-cyan-400 font-semibold">Beatriz Batista</span>
    </div>

</div>

@endsection