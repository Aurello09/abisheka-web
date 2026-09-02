@extends('layouts.app')

@section('title', $service->name . ' — PT Abisheka Bangun Sarana')
@section('meta_description', $service->short_description)

@section('content')
    <section class="max-w-4xl mx-auto px-4 py-16">
        <a href="{{ route('services.index') }}" class="text-sm text-gray-500 hover:text-abs-red mb-6 inline-block">&larr; Kembali ke semua layanan</a>

        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8">
            <div class="w-14 h-14 rounded-lg bg-abs-red/10 text-abs-red flex items-center justify-center font-bold text-xl mb-6">
                {{ substr($service->name, 0, 1) }}
            </div>

            <h1 class="text-2xl md:text-3xl font-bold mb-3">{{ $service->name }}</h1>
            <p class="text-gray-500 mb-6">{{ $service->short_description }}</p>

            <div class="prose max-w-none text-gray-700 mb-8">
                <p>{{ $service->description }}</p>
            </div>

            {{-- Tombol pesan -> langsung ke WhatsApp dengan pesan otomatis --}}
            <a href="{{ $service->whatsappLink() }}"
               target="_blank"
               class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 transition text-white font-semibold px-6 py-3 rounded-lg">
                Pesan Layanan Ini via WhatsApp
            </a>
        </div>
    </section>
@endsection
