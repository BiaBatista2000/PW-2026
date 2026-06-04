@extends('layouts.app')

@section('content')

<title>Login - Neon Pulse</title>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-black via-[#0f172a] to-[#020617]">

  <div class="bg-[#111827] w-[360px] p-8 rounded-2xl border border-cyan-500/20 shadow-xl shadow-cyan-500/10 text-center text-white">

    <h2 class="text-2xl font-bold text-cyan-400 mb-6 tracking-wide">
      Access the System
    </h2>

    <form class="space-y-6">

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
        class="w-full px-3 py-2 rounded-lg bg-black/40 border border-pink-400/20 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-pink-400 focus:shadow-pink-400/30 focus:shadow-md transition"
      >

      <a 
        href="/home" 
        class="block w-full bg-cyan-500/20 border border-cyan-400 text-cyan-300 py-2 rounded-lg font-semibold hover:bg-cyan-400 hover:text-black transition duration-300"
      >
        Sign In
      </a>

    </form>

    <div class="my-6 border-t border-gray-700"></div>

    <p class="text-gray-400 text-sm">
      No account yet?
      <a href="/register" class="text-pink-400 hover:underline">Create one</a>
    </p>

    <div class="mt-6 text-xs text-gray-500">
      Developed by <span class="text-cyan-400">Beatriz Batista</span>
    </div>

  </div>

</div>

@endsection