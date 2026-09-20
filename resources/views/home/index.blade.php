@extends('layouts.app')

@section('title', 'Beranda - PT Abisheka Bangun Sarana')

@section('content')
    <section class="w-full">
        <div class="relative overflow-hidden bg-[#741c25] text-white shadow-2xl shadow-[#741c25]/20">
            <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 22px 22px;"></div>
            <div class="relative grid lg:grid-cols-[0.88fr_1.12fr] min-h-[620px]">
                <div class="flex flex-col justify-center px-7 py-12 sm:px-12 lg:px-14 lg:py-16">
                    <div class="flex items-center gap-3 mb-8">
                        <span class="h-px w-10 bg-white/70"></span>
                        <p class="text-xs font-bold uppercase tracking-[0.25em] text-white/80">PT Abisheka Bangun Sarana</p>
                    </div>
                    <h1 class="max-w-xl text-4xl sm:text-5xl xl:text-6xl font-extrabold leading-[1.05] tracking-tight mb-6">Partner operasional yang <span class="text-[#eab0a8]">siap bekerja.</span></h1>
                    <p class="max-w-lg text-base sm:text-lg leading-8 text-white/80 mb-9">Kami membantu perusahaan dan instansi menjaga fasilitas, tenaga kerja, keamanan, serta kebutuhan operasional tetap berjalan dengan baik.</p>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('services.index') }}" class="inline-flex items-center justify-center gap-3 rounded-xl bg-white px-6 py-3.5 text-sm font-bold text-[#8f2028] hover:bg-[#fff3f0] transition">Lihat layanan <span aria-hidden="true">&rarr;</span></a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-xl border border-white/40 px-6 py-3.5 text-sm font-bold text-white hover:bg-white/10 transition">Konsultasi kebutuhan</a>
                    </div>
                </div>
                <div class="relative min-h-[360px] lg:min-h-0 overflow-hidden bg-[#54151b]">
                    <img src="{{ asset('images/images 7.jpg') }}" alt="Tim Abisheka Bangun Sarana bekerja" class="absolute inset-0 w-full h-full object-cover object-center">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#741c25]/35 via-transparent to-black/10"></div>
                    <div class="absolute right-5 top-5 sm:right-8 sm:top-8 rounded-2xl bg-[#17151a]/90 px-5 py-4 shadow-xl backdrop-blur-sm">
                        <strong class="block text-3xl font-extrabold text-[#eab0a8]">450+</strong>
                        <span class="text-xs font-semibold uppercase tracking-wider text-white/70">Happy clients</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-5 pt-20 pb-10">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-abs-red mb-3">Layanan profesional</p>
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-gray-950">Solusi yang bisa diandalkan.</h2>
                </div>
                <p class="max-w-md text-sm leading-6 text-gray-500">Pilih layanan yang Anda butuhkan, lalu hubungi kami untuk membahas kebutuhan secara langsung.</p>
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
        </div>
    </section>
@endsection
