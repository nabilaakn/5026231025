<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laravel Task Tree</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-tr from-indigo-100 via-blue-50 to-white min-h-screen flex items-center justify-center font-sans">

  <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-md text-center">
    <div class="mb-6">
      <img src="{{ asset('fotoformal.jpg') }}" alt="Laravel" class="w-20 h-20 mx-auto rounded-full shadow-md">
      <h1 class="text-2xl font-bold text-gray-800 mt-4">✨ Kumpulan Tugas PWEB ✨</h1>
      <p class="text-sm text-gray-500">Made by: 5026231025</p>
    </div>

    <div class="flex flex-col space-y-4 text-left">
      <a href="{{ url('/tugas1') }}" class="w-full px-4 py-3 rounded-xl bg-gradient-to-r from-blue-400 to-blue-600 text-white font-medium hover:scale-105 transition">
        Tugas 1 - pertama
      </a>
      <a href="{{ url('/tugas2') }}" class="w-full px-4 py-3 rounded-xl bg-gradient-to-r from-purple-400 to-purple-600 text-white font-medium hover:scale-105 transition">
        Tugas 2 - Layout1(5026231025)
      </a>
      <a href="{{ url('/tugas3') }}" class="w-full px-4 py-3 rounded-xl bg-gradient-to-r from-pink-400 to-pink-600 text-white font-medium hover:scale-105 transition">
        Tugas 3 - Tugas3
      </a>
      <a href="{{ url('/tugas4') }}" class="w-full px-4 py-3 rounded-xl bg-gradient-to-r from-teal-400 to-teal-600 text-white font-medium hover:scale-105 transition">
        Tugas 4 - js1
      </a>
      <a href="{{ url('/tugas5') }}" class="w-full px-4 py-3 rounded-xl bg-gradient-to-r from-yellow-400 to-yellow-600 text-white font-medium hover:scale-105 transition">
        Tugas 5 - js2
      </a>
      <a href="{{ url('/tugas6') }}" class="w-full px-4 py-3 rounded-xl bg-gradient-to-r from-red-400 to-red-600 text-white font-medium hover:scale-105 transition">
        Tugas 6 - js3
      </a>
      <a href="https://youtu.be/HUmj05Pn2xE" target="_blank" class="w-full px-4 py-3 rounded-xl bg-gradient-to-r from-lime-400 to-lime-600 text-white font-medium hover:scale-105 transition">
        Tugas 7 - Video CSS
      </a>
      <a href="{{ url('/tugas7') }}"class="w-full px-4 py-3 rounded-xl bg-gradient-to-r from-emerald-400 to-emerald-600 text-white font-medium hover:scale-105 transition">
        Tugas Linktree - Linktree Ateez
      </a>
      <a href="{{ url('/ETS') }}"class="w-full px-4 py-3 rounded-xl bg-gradient-to-r from-gray-500 to-gray-700 text-white font-medium hover:scale-105 transition">
        ETS - index ETS
      </a>
    </div>

    <p class="mt-8 text-xs text-gray-400">Made by: Nabila Rahadatul</p>
  </div>

</body>
</html>
