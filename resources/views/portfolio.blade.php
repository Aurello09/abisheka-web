@extends('layouts.frontend')
@section('title', 'Portofolio – PT. Abisheka Bangun Sarana')
@section('content')

<x-inner-hero
    subtitle="PORTOFOLIO KAMI"
    title="Proyek yang Telah<br>Kami Selesaikan"
    description="Rekam jejak nyata kerja keras tim kami — dari proyek kecil hingga skala besar, semuanya kami kerjakan dengan standar profesional tertinggi."
/>

<section class="max-w-6xl mx-auto px-4 py-16">

    {{-- Stats bar --}}
    <div class="flex flex-wrap justify-center gap-8 mb-14">
        <div class="text-center">
            <span class="block text-4xl font-extrabold text-abs-dark">{{ $portfolios->count() }}+</span>
            <span class="text-xs text-gray-500 uppercase tracking-widest font-semibold">Proyek Selesai</span>
        </div>
        <div class="w-px bg-gray-200 hidden sm:block"></div>
        <div class="text-center">
            <span class="block text-4xl font-extrabold text-abs-dark">10+</span>
            <span class="text-xs text-gray-500 uppercase tracking-widest font-semibold">Tahun Pengalaman</span>
        </div>
        <div class="w-px bg-gray-200 hidden sm:block"></div>
        <div class="text-center">
            <span class="block text-4xl font-extrabold text-abs-dark">100%</span>
            <span class="text-xs text-gray-500 uppercase tracking-widest font-semibold">Kepuasan Klien</span>
        </div>
    </div>

    {{-- Grid --}}
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($portfolios as $portfolio)
            <a href="{{ route('portfolio.show', $portfolio) }}"
               class="group relative bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 overflow-hidden flex flex-col">

                {{-- Image --}}
                @if($portfolio->image)
                    <div class="relative h-52 overflow-hidden">
                        <img src="{{ asset('images/'.$portfolio->image) }}"
                             alt="{{ $portfolio->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-abs-dark/70 via-transparent to-transparent"></div>
                        @if($portfolio->category)
                            <span class="absolute top-3 left-3 bg-abs-red text-white text-[10px] font-bold uppercase tracking-widest px-2.5 py-1 rounded-full">
                                {{ $portfolio->category }}
                            </span>
                        @endif
                    </div>
                @else
                    <div class="h-52 bg-gradient-to-br from-abs-dark to-[#3b1216] flex items-center justify-center relative overflow-hidden">
                        <svg class="w-16 h-16 text-white/10" fill="currentColor" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        @if($portfolio->category)
                            <span class="absolute top-3 left-3 bg-abs-red text-white text-[10px] font-bold uppercase tracking-widest px-2.5 py-1 rounded-full">
                                {{ $portfolio->category }}
                            </span>
                        @endif
                    </div>
                @endif

                {{-- Body --}}
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="font-bold text-base text-abs-dark leading-snug mb-1.5 line-clamp-2 group-hover:text-abs-red transition-colors">
                        {{ $portfolio->title }}
                    </h3>
                    @if($portfolio->client_name)
                        <p class="text-xs text-gray-400 mb-1 flex items-center gap-1">
                            <svg class="w-3 h-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            {{ $portfolio->client_name }}
                        </p>
                    @endif
                    @if($portfolio->location)
                        <p class="text-xs text-gray-400 flex items-center gap-1">
                            <svg class="w-3 h-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            {{ $portfolio->location }}
                        </p>
                    @endif
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100 mt-4">
                        @if($portfolio->completion_date)
                            <span class="text-xs text-gray-400">{{ $portfolio->completion_date->format('M Y') }}</span>
                        @else
                            <span></span>
                        @endif
                        <span class="inline-flex items-center gap-1 text-abs-red font-bold text-xs group-hover:gap-2 transition-all">
                            Lihat Detail
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </span>
                    </div>
                </div>
            </a>
        @empty
            <div class="col-span-full text-center py-24">
                <svg class="w-14 h-14 mx-auto mb-3 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                <p class="font-semibold text-gray-400">Belum ada portofolio yang ditampilkan.</p>
            </div>
        @endforelse
    </div>
</section>

@endsection
