@extends('layouts.frontend')

@section('title', $service->name . ' — PT. Abisheka Bangun Sarana')
@section('meta_description', $service->short_description)

@section('content')

<style>
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

{{-- ═══════════════════════════ PAGE BACKGROUND ═══════════════════════════ --}}
<div class="bg-[#f8f9fa] min-h-screen pb-24">

    {{-- BREADCRUMB --}}
    <div class="pt-8 pb-6">
        <div class="max-w-6xl mx-auto px-4">
            <nav class="flex items-center justify-center gap-2 text-sm text-gray-500 font-medium">
                <a href="{{ route('home') }}" class="hover:text-abs-red transition">Beranda</a>
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                <a href="{{ route('services.index') }}" class="hover:text-abs-red transition">Layanan</a>
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                <span class="text-abs-dark font-bold">{{ $service->name }}</span>
            </nav>
        </div>
    </div>

    {{-- HEADER TEXT --}}
    <div class="max-w-4xl mx-auto px-4 text-center mb-12" style="animation: fadeInUp 0.8s ease-out forwards;">
        <span class="inline-flex items-center gap-2 bg-red-50 text-abs-red text-[11px] font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-6 ring-1 ring-abs-red/10">
            <span class="w-1.5 h-1.5 rounded-full bg-abs-red animate-pulse"></span>
            Layanan Kami
        </span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-abs-dark leading-tight mb-6 tracking-tight">
            {{ $service->name }}
        </h1>
        <p class="text-lg md:text-[22px] text-gray-500 leading-relaxed max-w-3xl mx-auto font-medium">
            {{ $service->short_description }}
        </p>
    </div>

    {{-- BIG IMAGE WITH PREMIUM FRAME --}}
    <div class="max-w-6xl mx-auto px-4 mb-20" style="animation: fadeInUp 1s ease-out 0.2s forwards; opacity: 0;">
        @if ($service->image)
            <div class="w-full aspect-video md:aspect-[21/9] rounded-[2.5rem] bg-white p-2.5 shadow-[0_20px_60px_-15px_rgba(0,0,0,0.1)] ring-1 ring-black/5">
                <div class="w-full h-full rounded-[2rem] overflow-hidden relative group">
                    <img src="{{ asset('images/' . $service->image) }}"
                         alt="{{ $service->name }}"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors duration-700"></div>
                </div>
            </div>
        @endif
    </div>

    {{-- CONTENT GRID --}}
    <div class="max-w-6xl mx-auto px-4" style="animation: fadeInUp 1s ease-out 0.4s forwards; opacity: 0;">
        <div class="grid lg:grid-cols-[1fr_360px] gap-12 items-start">

            {{-- ═══ MAIN CONTENT ═══ --}}
            <div class="space-y-10">
                
                {{-- Deskripsi --}}
                <div class="bg-white rounded-[2rem] p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all">
                    <h2 class="text-2xl font-extrabold text-abs-dark mb-8 flex items-center gap-4">
                        <span class="w-12 h-12 rounded-2xl bg-red-50 flex items-center justify-center text-abs-red shadow-inner">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"/></svg>
                        </span>
                        Tentang Layanan Ini
                    </h2>
                    <div class="text-gray-600 leading-[1.85] text-[17px] space-y-6">
                        {!! nl2br(e($service->description)) !!}
                    </div>
                </div>

                {{-- Kenapa Memilih Kami --}}
                <div class="bg-white rounded-[2rem] p-8 md:p-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all">
                    <h2 class="text-2xl font-extrabold text-abs-dark mb-8 flex items-center gap-4">
                        <span class="w-12 h-12 rounded-2xl bg-red-50 flex items-center justify-center text-abs-red shadow-inner">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </span>
                        Nilai Lebih Kami
                    </h2>
                    <div class="grid sm:grid-cols-2 gap-5">
                        @foreach([
                            'Tenaga Profesional & Terlatih', 
                            'Sistem & Prosedur Standar', 
                            'Harga Kompetitif & Transparan', 
                            'DPA Group — Universitas Airlangga', 
                            'Respons & Penanganan Cepat', 
                            'Fokus Kepuasan Klien'
                        ] as $point)
                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white border border-gray-100 hover:border-abs-red/40 hover:shadow-lg transition-all group cursor-default">
                            <span class="w-10 h-10 rounded-full bg-red-50 shadow-sm flex items-center justify-center flex-shrink-0 text-abs-red group-hover:bg-abs-red group-hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span class="text-[15px] font-bold text-gray-700 leading-snug mt-1 group-hover:text-abs-dark transition-colors">{{ $point }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- ═══ SIDEBAR ═══ --}}
            <div class="space-y-6">
                {{-- Floating Action Card (Konsisten) --}}
                <div class="bg-gradient-to-b from-abs-dark to-[#260e11] rounded-3xl p-8 text-white shadow-2xl relative overflow-hidden border border-white/10 group">
                    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px;"></div>
                    
                    {{-- Dekorasi merah --}}
                    <div class="absolute -right-10 -top-10 w-32 h-32 bg-abs-red/30 rounded-full blur-[40px] group-hover:bg-abs-red/50 transition-colors duration-700"></div>

                    <div class="relative z-10 text-center">
                        <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center mx-auto mb-6 border border-white/20">
                            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        </div>
                        <h3 class="font-extrabold text-2xl mb-3">Butuh Layanan Ini?</h3>
                        <p class="text-[15px] text-white/70 leading-relaxed mb-8">
                            Konsultasikan kebutuhan operasional Anda dengan tim ahli kami sekarang juga.
                        </p>
                        <a href="{{ $service->whatsappLink() }}" target="_blank"
                           class="flex items-center justify-center gap-2.5 w-full bg-[#25D366] hover:bg-[#1ebd5b] text-white font-bold py-4 rounded-xl transition-all shadow-[0_5px_20px_rgba(37,211,102,0.3)] hover:shadow-[0_5px_25px_rgba(37,211,102,0.4)] hover:-translate-y-0.5 text-[15px]">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.555 4.116 1.524 5.847L.057 23.082a.75.75 0 00.921.919l5.356-1.459A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.967 0-3.814-.536-5.4-1.47l-.386-.23-4.01 1.092 1.064-3.913-.254-.4A10 10 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                            Chat via WhatsApp
                        </a>
                    </div>
                </div>

                {{-- Back to services --}}
                <a href="{{ route('services.index') }}" class="flex items-center justify-center gap-2.5 w-full bg-white hover:bg-gray-50 text-abs-dark font-bold py-4 rounded-3xl transition-all shadow-sm hover:shadow-md border border-gray-200">
                    <svg class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    Jelajahi Layanan Lain
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
