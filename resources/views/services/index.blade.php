@extends('layouts.frontend')

@section('title', 'Layanan — PT. Abisheka Bangun Sarana')

@section('content')

{{-- ═══════════════════════════ PAGE HEADER ═══════════════════════════ --}}
<x-inner-hero subtitle="LAYANAN KAMI" title="Solusi Tepat untuk<br>Kebutuhan Anda" description="Kami menyediakan berbagai layanan profesional di bidang outsourcing dan general contractor untuk mendukung efisiensi operasional organisasi Anda." />

{{-- ═══════════════════════════ CARDS ═══════════════════════════ --}}
<section class="max-w-6xl mx-auto px-4 -mt-10 pb-20">
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ($services as $service)
        <article class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 overflow-hidden flex flex-col">
            @if ($service->image)
                <div class="relative w-full h-52 overflow-hidden bg-gray-100">
                    <img src="{{ asset('images/' . $service->image) }}"
                         alt="{{ $service->name }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/10 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 bg-abs-red text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">ABS Service</span>
                </div>
            @else
                <div class="w-full h-52 bg-gradient-to-br from-[#f7e9e9] to-[#f0d0d0] flex items-center justify-center">
                    <span class="text-6xl font-extrabold text-abs-red/25">{{ substr($service->name, 0, 1) }}</span>
                </div>
            @endif

            <div class="p-5 flex flex-col flex-1">
                <h2 class="font-bold text-base leading-snug text-abs-dark mb-2">{{ $service->name }}</h2>
                <p class="text-sm leading-6 text-gray-500 flex-1">{{ $service->short_description }}</p>
                <div class="flex items-center justify-between gap-3 mt-5 pt-4 border-t border-gray-100">
                    <a href="{{ route('services.show', $service) }}" class="inline-flex items-center gap-1.5 text-abs-red font-bold text-sm group-hover:gap-3 transition-all">
                        Detail
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ $service->whatsappLink() }}" target="_blank"
                       class="inline-flex items-center gap-1.5 rounded-lg bg-green-50 text-green-700 px-3.5 py-1.5 text-xs font-bold hover:bg-green-600 hover:text-white transition">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.555 4.116 1.524 5.847L.057 23.082a.75.75 0 00.921.919l5.356-1.459A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.967 0-3.814-.536-5.4-1.47l-.386-.23-4.01 1.092 1.064-3.913-.254-.4A10 10 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                        Pesan WA
                    </a>
                </div>
            </div>
        </article>
        @endforeach
    </div>

    {{-- Bottom CTA --}}
    <div class="mt-14 bg-abs-dark rounded-2xl p-8 md:p-10 flex flex-col md:flex-row items-center justify-between gap-6 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px;"></div>
        <div class="relative">
            <h3 class="text-xl md:text-2xl font-extrabold text-white mb-1">Tidak menemukan yang Anda cari?</h3>
            <p class="text-sm text-gray-400">Hubungi kami langsung, kami siap diskusikan kebutuhan khusus Anda.</p>
        </div>
        <a href="{{ route('contact') }}" class="relative flex-shrink-0 inline-flex items-center gap-2 bg-abs-red hover:bg-abs-redhov text-white font-bold px-7 py-3.5 rounded-xl transition text-sm shadow-lg shadow-abs-red/30">
            Hubungi Kami
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</section>

@endsection

