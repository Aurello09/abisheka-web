@extends('layouts.frontend')
@section('title', $portfolio->title . ' – Portofolio PT. Abisheka Bangun Sarana')
@section('content')

<x-inner-hero
    subtitle="{{ $portfolio->category ?? 'PORTOFOLIO' }}"
    title="{{ $portfolio->title }}"
    description="{{ $portfolio->client_name ? 'Proyek untuk '.$portfolio->client_name : 'Proyek PT. Abisheka Bangun Sarana' }}"
/>

<section class="max-w-5xl mx-auto px-4 py-14">

    {{-- Info bar --}}
    <div class="flex flex-wrap gap-4 mb-10">
        @if($portfolio->client_name)
            <div class="flex items-center gap-2 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3">
                <div class="w-8 h-8 bg-abs-red/10 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-abs-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                <div>
                    <p class="text-[10px] text-gray-400 uppercase tracking-widest font-semibold">Klien</p>
                    <p class="font-bold text-sm text-abs-dark">{{ $portfolio->client_name }}</p>
                </div>
            </div>
        @endif
        @if($portfolio->location)
            <div class="flex items-center gap-2 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3">
                <div class="w-8 h-8 bg-abs-red/10 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-abs-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                </div>
                <div>
                    <p class="text-[10px] text-gray-400 uppercase tracking-widest font-semibold">Lokasi</p>
                    <p class="font-bold text-sm text-abs-dark">{{ $portfolio->location }}</p>
                </div>
            </div>
        @endif
        @if($portfolio->category)
            <div class="flex items-center gap-2 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3">
                <div class="w-8 h-8 bg-abs-red/10 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-abs-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                </div>
                <div>
                    <p class="text-[10px] text-gray-400 uppercase tracking-widest font-semibold">Kategori</p>
                    <p class="font-bold text-sm text-abs-dark">{{ $portfolio->category }}</p>
                </div>
            </div>
        @endif
        @if($portfolio->completion_date)
            <div class="flex items-center gap-2 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3">
                <div class="w-8 h-8 bg-abs-red/10 rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-abs-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
                <div>
                    <p class="text-[10px] text-gray-400 uppercase tracking-widest font-semibold">Selesai</p>
                    <p class="font-bold text-sm text-abs-dark">{{ $portfolio->completion_date->format('d M Y') }}</p>
                </div>
            </div>
        @endif
    </div>

    {{-- Main image --}}
    @if($portfolio->image)
        <div class="rounded-2xl overflow-hidden shadow-xl mb-10">
            <img src="{{ asset('images/'.$portfolio->image) }}"
                 alt="{{ $portfolio->title }}"
                 class="w-full max-h-[520px] object-cover">
        </div>
    @endif

    {{-- Description --}}
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8 mb-10">
        <h2 class="text-xl font-extrabold text-abs-dark mb-4 flex items-center gap-2">
            <span class="w-1 h-5 bg-abs-red rounded-full inline-block"></span>
            Tentang Proyek Ini
        </h2>
        <div class="prose max-w-none text-gray-600 leading-8">
            {!! nl2br(e($portfolio->description)) !!}
        </div>
    </div>

    {{-- CTA --}}
    <div class="bg-gradient-to-br from-abs-dark to-[#3b1216] rounded-2xl p-8 flex flex-col sm:flex-row items-center justify-between gap-6 text-white mb-10">
        <div>
            <h3 class="text-xl font-extrabold mb-1">Tertarik dengan Proyek Seperti Ini?</h3>
            <p class="text-white/70 text-sm">Hubungi kami untuk konsultasi gratis tanpa syarat.</p>
        </div>
        <a href="{{ route('contact') }}"
           class="flex-shrink-0 bg-abs-red hover:bg-[#8f2028] text-white font-bold px-7 py-3.5 rounded-full transition-all text-sm shadow-lg">
            Konsultasi Sekarang
        </a>
    </div>

    {{-- Back --}}
    <a href="{{ route('portfolio') }}"
       class="inline-flex items-center gap-2 text-abs-red font-semibold hover:gap-3 transition-all">
        <svg class="w-4 h-4 rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        Kembali ke Portofolio
    </a>
</section>

{{-- Other Projects --}}
@if($others->count() > 0)
<section class="bg-gray-50 py-14">
    <div class="max-w-6xl mx-auto px-4">
        <h3 class="text-xl font-extrabold text-abs-dark mb-6">Proyek Lainnya</h3>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($others as $other)
                <a href="{{ route('portfolio.show', $other) }}"
                   class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all overflow-hidden flex flex-col">
                    @if($other->image)
                        <div class="h-44 overflow-hidden">
                            <img src="{{ asset('images/'.$other->image) }}" alt="{{ $other->title }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                    @else
                        <div class="h-44 bg-gradient-to-br from-abs-dark to-[#3b1216] flex items-center justify-center">
                            <svg class="w-10 h-10 text-white/20" fill="currentColor" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                        </div>
                    @endif
                    <div class="p-5">
                        @if($other->category)
                            <span class="text-[10px] font-bold uppercase tracking-widest text-abs-red">{{ $other->category }}</span>
                        @endif
                        <h4 class="font-bold text-sm text-abs-dark mt-1 line-clamp-2">{{ $other->title }}</h4>
                        @if($other->client_name)
                            <p class="text-xs text-gray-400 mt-1">{{ $other->client_name }}</p>
                        @endif
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
