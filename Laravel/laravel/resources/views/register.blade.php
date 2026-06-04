@extends('layouts.app')

@section('content')

<title>Register - Neon Pulse</title>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-black via-[#0f172a] to-[#020617]">

  <div class="bg-[#111827] w-[380px] p-8 rounded-2xl border border-pink-500/20 shadow-xl shadow-pink-500/10 text-center text-white">

    <h2 class="text-2xl font-bold text-pink-400 mb-6 tracking-wide">
      Create Your Access
    </h2>

    <form class="space-y-6">

      <input 
        type="text" 
        required 
        placeholder="Name"
        class="w-full px-3 py-2 rounded-lg bg-black/40 border border-pink-400/20 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:shadow-pink-400/30 focus:shadow-md transition"
      >

      <input 
        type="email" 
        required 
        placeholder="E-mail"
        class="w-full px-3 py-2 rounded-lg bg-black/40 border border-cyan-400/20 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:shadow-cyan-400/30 focus:shadow-md transition"
      >

      <input 
        type="password" 
        required 
        placeholder="Password"
        class="w-full px-3 py-2 rounded-lg bg-black/40 border border-purple-400/20 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:shadow-purple-400/30 focus:shadow-md transition"
      >

      <input 
        type="password" 
        required 
        placeholder="Confirm Password"
        class="w-full px-3 py-2 rounded-lg bg-black/40 border border-green-400/20 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-green-400 focus:shadow-green-400/30 focus:shadow-md transition"
      >

      <a 
        href="/home" 
        class="block w-full bg-pink-500/20 border border-pink-400 text-pink-300 py-2 rounded-lg font-semibold hover:bg-pink-400 hover:text-black transition duration-300"
      >
        Register
      </a>

    </form>

    <div class="my-6 border-t border-gray-700"></div>

    <p class="text-gray-400 text-sm">
      Already registered?
      <a href="/login" class="text-cyan-400 hover:underline">Sign In</a>
    </p>

    <div class="mt-6 text-xs text-gray-500">
      Developed by <span class="text-cyan-400">Beatriz Batista</span>
    </div>

  </div>

</div>

@endsection