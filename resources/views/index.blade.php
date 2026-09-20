@extends('layouts.app')

@section('title', 'Layanan — PT Abisheka Bangun Sarana')

@section('content')
    <section class="max-w-6xl mx-auto px-4 py-14 md:py-20">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-12">
            <div class="max-w-2xl">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-abs-red mb-4">Layanan profesional</p>
                <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight text-gray-950 mb-5">Dukungan operasional untuk bisnis yang terus bergerak.</h1>
                <p class="text-base md:text-lg leading-8 text-gray-500">Dari fasilitas gedung hingga tenaga kerja, kami membantu kebutuhan operasional Anda berjalan lebih tertata, aman, dan siap berkembang.</p>
            </div>
            <div class="flex items-center gap-6 border-l-2 border-abs-red pl-5 text-sm text-gray-500 lg:mb-2">
                <div><strong class="block text-2xl text-gray-950">06</strong> layanan utama</div>
                <div><strong class="block text-2xl text-gray-950">1</strong> partner operasional</div>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ($services as $service)
                <article class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-3 flex flex-col">
                    @if ($service->image)
                        <div class="relative w-full h-48 rounded-xl overflow-hidden mb-5 bg-gray-100">
                            <img src="{{ asset('images/' . $service->image) }}"
                                 alt="{{ $service->name }}"
                                 class="{{ in_array($service->image, ['jasa kebersihan.jpg', 'Jasa Desain Interior & Eksterior.jpg', 'Pengadaan Barang.jpg']) ? 'w-full h-full object-cover' : 'w-full h-full object-cover scale-[1.3]' }}"
                                 style="{{ $service->image === 'Pengadaan Barang.jpg' ? 'object-position: 60% center;' : '' }}">
                            <span class="absolute top-3 left-3 bg-white/90 backdrop-blur text-[11px] font-bold uppercase tracking-wider text-gray-700 px-3 py-1.5 rounded-full">ABS Service</span>
                        </div>
                    @else
                        <div class="w-full h-48 rounded-xl bg-[#f7e9e9] text-abs-red flex items-center justify-center font-bold text-5xl mb-5">
                            {{ substr($service->name, 0, 1) }}
                        </div>
                    @endif
                    <div class="px-3 pb-3 flex flex-col flex-1">
                        <h3 class="font-bold text-lg leading-snug text-gray-950 mb-2">{{ $service->name }}</h3>
                        <p class="text-sm leading-6 text-gray-500 flex-1">{{ $service->short_description }}</p>
                        <div class="flex items-center justify-between gap-3 mt-6 pt-4 border-t border-gray-100">
                            <a href="{{ route('services.show', $service) }}" class="inline-flex items-center gap-2 text-abs-red font-bold text-sm group-hover:gap-3 transition-all">
                                Lihat detail <span aria-hidden="true">&rarr;</span>
                            </a>
                            <a href="{{ $service->whatsappLink() }}" target="_blank" aria-label="Pesan {{ $service->name }} via WhatsApp" class="inline-flex items-center rounded-lg bg-green-50 text-green-600 px-3 py-2 text-sm font-bold hover:bg-green-600 hover:text-white transition">
                                Pesan
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection
