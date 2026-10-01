@extends('layouts.app')

@section('title', 'Beranda — PT Abisheka Bangun Sarana')

@section('content')

{{-- ═══════════════════════════ HERO ═══════════════════════════ --}}
<section class="relative bg-[#741c25] text-white">
    {{-- Background image — same style as original: split grid, image on right --}}
    <div class="relative grid lg:grid-cols-[0.88fr_1.12fr] min-h-[580px]">

        {{-- Left: text content --}}
        <div class="relative flex flex-col justify-center px-7 py-16 sm:px-12 lg:px-14 z-10">
            {{-- Dot pattern overlay on left side --}}
            <div class="absolute inset-0 opacity-15" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 22px 22px;"></div>

            <div class="relative">
                <div class="inline-flex items-center gap-2 bg-white/15 border border-white/20 rounded-full px-4 py-1.5 mb-8">
                    <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                    <span class="text-xs font-bold uppercase tracking-widest text-white/90">PT Abisheka Bangun Sarana</span>
                </div>
                <h1 class="max-w-xl text-4xl sm:text-5xl xl:text-6xl font-extrabold leading-[1.05] tracking-tight mb-6">
                    Partner operasional yang <span class="text-[#eab0a8]">siap bekerja.</span>
                </h1>
                <p class="max-w-lg text-base sm:text-lg leading-8 text-white/75 mb-9">
                    Kami membantu perusahaan dan instansi menjaga fasilitas, tenaga kerja, keamanan, serta kebutuhan operasional tetap berjalan dengan baik.
                </p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="{{ route('services.index') }}"
                       class="inline-flex items-center justify-center gap-2.5 rounded-xl bg-white px-6 py-3.5 text-sm font-bold text-[#8f2028] hover:bg-[#fff3f0] transition">
                        Lihat Semua Layanan
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center justify-center rounded-xl border border-white/35 px-6 py-3.5 text-sm font-bold text-white hover:bg-white/10 transition">
                        Konsultasi Gratis
                    </a>
                </div>
            </div>
        </div>

        {{-- Right: image --}}
        <div class="relative min-h-[360px] lg:min-h-0 overflow-hidden bg-[#54151b]">
            <img src="{{ asset('images/images 7.jpg') }}" alt="Tim Abisheka Bangun Sarana bekerja"
                 class="absolute inset-0 w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-gradient-to-r from-[#741c25]/50 via-transparent to-black/10"></div>
            {{-- Stats badge --}}
            <div class="absolute right-5 top-5 sm:right-8 sm:top-8 rounded-2xl bg-[#17151a]/85 px-5 py-4 shadow-xl backdrop-blur-sm">
                <strong class="block text-3xl font-extrabold text-[#eab0a8]">450+</strong>
                <span class="text-xs font-semibold uppercase tracking-wider text-white/65">Happy clients</span>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════ TRUST BAR ═══════════════════════════ --}}
<section class="bg-white border-b border-gray-100">
    <div class="max-w-6xl mx-auto px-4 py-5">
        <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-3 text-[13px] text-gray-500 font-medium">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-abs-red" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                Berdiri sejak 2020
            </div>
            <div class="w-px h-4 bg-gray-200 hidden sm:block"></div>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-abs-red" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                NIB Resmi Terdaftar
            </div>
            <div class="w-px h-4 bg-gray-200 hidden sm:block"></div>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-abs-red" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                Wajib Pajak Badan
            </div>
            <div class="w-px h-4 bg-gray-200 hidden sm:block"></div>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-abs-red" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                Bagian DPA Group — Unair
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════ LAYANAN ═══════════════════════════ --}}
<section class="max-w-6xl mx-auto px-4 pt-16 pb-6">
    {{-- Section header --}}
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8 mb-12">
        <div class="max-w-2xl">
            <div class="flex items-center gap-2 mb-3">
                <span class="h-px w-8 bg-abs-red"></span>
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-abs-red">Layanan Profesional</p>
            </div>
            <h2 class="text-3xl md:text-[2.5rem] font-extrabold tracking-tight text-abs-dark leading-tight">
                Solusi yang bisa diandalkan.
            </h2>
        </div>
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm lg:w-[400px] flex-shrink-0 relative overflow-hidden group">
            <div class="absolute right-0 top-0 w-24 h-24 bg-red-50 rounded-bl-full transition-transform group-hover:scale-110"></div>
            <p class="text-sm leading-relaxed text-gray-600 mb-5 relative z-10">
                Pilih layanan yang Anda butuhkan, lalu hubungi kami untuk membahas kebutuhan secara langsung.
            </p>
            <a href="{{ route('services.index') }}" class="inline-flex items-center justify-center gap-2 text-sm font-bold text-white bg-abs-dark hover:bg-abs-red w-full px-5 py-3 rounded-xl transition-colors relative z-10 shadow-sm">
                Lihat semua layanan
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>

    {{-- Cards --}}
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach ($services as $service)
        <article class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 overflow-hidden flex flex-col">
            @if ($service->image)
                <div class="relative w-full h-52 overflow-hidden bg-gray-100">
                    <img src="{{ asset('images/' . $service->image) }}"
                         alt="{{ $service->name }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                    <span class="absolute bottom-3 left-3 bg-abs-red text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">ABS Service</span>
                </div>
            @else
                <div class="w-full h-52 bg-gradient-to-br from-[#f7e9e9] to-[#f0d0d0] flex items-center justify-center">
                    <span class="text-5xl font-extrabold text-abs-red/30">{{ substr($service->name, 0, 1) }}</span>
                </div>
            @endif
            <div class="p-5 flex flex-col flex-1">
                <h3 class="font-bold text-base leading-snug text-abs-dark mb-2">{{ $service->name }}</h3>
                <p class="text-sm leading-6 text-gray-500 flex-1">{{ $service->short_description }}</p>
                <div class="flex items-center justify-between gap-3 mt-5 pt-4 border-t border-gray-100">
                    <a href="{{ route('services.show', $service) }}" class="inline-flex items-center gap-1.5 text-abs-red font-bold text-sm group-hover:gap-2.5 transition-all">
                        Detail layanan
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ $service->whatsappLink() }}" target="_blank"
                       aria-label="Pesan {{ $service->name }} via WhatsApp"
                       class="inline-flex items-center gap-1.5 rounded-lg bg-green-50 text-green-700 px-3.5 py-1.5 text-xs font-bold hover:bg-green-600 hover:text-white transition">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.555 4.116 1.524 5.847L.057 23.082a.75.75 0 00.921.919l5.356-1.459A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.967 0-3.814-.536-5.4-1.47l-.386-.23-4.01 1.092 1.064-3.913-.254-.4A10 10 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                        Pesan
                    </a>
                </div>
            </div>
        </article>
        @endforeach
    </div>
</section>

{{-- ═══════════════════════════ CTA BANNER ═══════════════════════════ --}}
<section class="max-w-6xl mx-auto px-4 pb-10 mt-16">
    <div class="relative bg-gradient-to-br from-abs-dark to-[#3b1216] rounded-[2rem] p-10 sm:p-14 flex flex-col lg:flex-row items-center justify-between gap-10 shadow-2xl overflow-hidden">
        
        {{-- Decorative Asterisk / Star --}}
        <svg class="absolute right-0 top-0 text-white/5 w-64 h-64 -translate-y-1/4 translate-x-1/4 rotate-12" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2L13.5 10.5L22 12L13.5 13.5L12 22L10.5 13.5L2 12L10.5 10.5L12 2Z" />
        </svg>

        <div class="relative z-10 flex-1">
            <h2 class="text-3xl sm:text-4xl md:text-[2.5rem] font-extrabold text-white leading-[1.25] max-w-3xl">
                Siap mendiskusikan kebutuhan operasional organisasi Anda?
            </h2>
        </div>

        <a href="{{ route('contact') }}"
           class="relative z-10 flex-shrink-0 inline-flex items-center justify-center gap-2.5 bg-abs-red hover:bg-[#8f2028] text-white font-bold px-9 py-4 rounded-full transition-all text-[15px] shadow-lg hover:shadow-xl whitespace-nowrap">
            {{-- Calendar Icon --}}
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            Jadwalkan Diskusi
        </a>
    </div>
</section>

@endsection
