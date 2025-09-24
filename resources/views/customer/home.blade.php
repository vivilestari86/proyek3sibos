@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white">

    <!-- Header -->
    <div class="rounded-b-[50px] p-4 relative" style="background-color: #1a1aff;">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="h-10 mr-2">
                <span class="text-white font-bold text-xl">SIBOS</span>
            </div>
            <div class="flex space-x-4">
                <button class="text-white"><i class="fas fa-user text-2xl"></i></button>
                <button class="text-white"><i class="fas fa-sign-out-alt text-2xl"></i></button>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="mt-4 flex items-center bg-white rounded-full px-5 py-3 shadow-md w-full max-w-md mx-auto">
            <i class="fas fa-search text-gray-500 mr-2"></i>
            <input type="text" placeholder="Cari Layanan"
                   class="flex-1 focus:outline-none text-gray-700">
            <i class="fas fa-times text-gray-400"></i>
        </div>
    </div>

    <!-- Navigation -->
    <div class="flex justify-around text-gray-700 mt-4 border-b pb-4">
        <a href="#" class="font-semibold" style="color: #1a1aff;">Beranda</a>
        <a href="#">Riwayat Booking</a>
        <a href="#">Notifikasi</a>
        <a href="#">Chat</a>
    </div>

    <!-- Welcome Text -->
    <div class="text-center mt-6">
        <h2 class="text-xl font-bold" style="color: #1a1aff;">
            Selamat Datang di Layanan Service Rumah Tangga
        </h2>
        <p class="text-gray-500">Nikmati layanan kami sesuai kebutuhan anda</p>
    </div>

    <!-- Services -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-6 px-6 justify-items-center">
        <!-- Card 1 -->
        <div class="shadow-lg rounded-xl overflow-hidden w-full max-w-xs">
            <div class="aspect-w-4 aspect-h-3">
                <img src="{{ asset('images/service_kulkas.jpg') }}" alt="Service Kulkas" class="object-cover rounded-t-xl w-full h-full">
            </div>
            <div class="bg-[#1a1aff] text-white text-center py-3 font-semibold">Service Kulkas</div>
        </div>

        <!-- Card 2 -->
        <div class="shadow-lg rounded-xl overflow-hidden w-full max-w-xs">
            <div class="aspect-w-4 aspect-h-3">
                <img src="{{ asset('images/service_AC.jpg') }}" alt="Service AC" class="object-cover rounded-t-xl w-full h-full">
            </div>
            <div class="bg-[#1a1aff] text-white text-center py-3 font-semibold">Service AC</div>
        </div>

        <!-- Card 3 -->
        <div class="shadow-lg rounded-xl overflow-hidden w-full max-w-xs">
            <div class="aspect-w-4 aspect-h-3">
                <img src="{{ asset('images/service_mesin_cuci.jpg') }}" alt="Cleaning Service" class="object-cover rounded-t-xl w-full h-full">
            </div>
            <div class="bg-[#1a1aff] text-white text-center py-3 font-semibold">Service Mesin Cuci</div>
        </div>
    </div>

    <!-- Daftar Teknisi -->
    <div class="flex justify-end items-center mt-8 px-6">
        <a href="#" class="flex items-center font-semibold" style="color: #1a1aff;">
            <i class="fas fa-plus-circle text-2xl mr-2"></i>
            Daftar Sebagai Teknisi
        </a>
    </div>
</div>
@endsection
