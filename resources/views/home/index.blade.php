@extends('layouts.app')

@section('title', 'Beranda - PT Abisheka Bangun Sarana')

@section('content')
    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="mb-10">
            <h1 class="text-3xl font-bold mb-2">Layanan Kami</h1>
            <p class="text-gray-500">Pilih layanan yang Anda butuhkan, lalu pesan langsung via WhatsApp.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($services as $service)
                <div class="bg-white rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition p-6 flex flex-col">
                    <div class="w-12 h-12 rounded-lg bg-abs-red/10 text-abs-red flex items-center justify-center font-bold mb-4">
                        {{ substr($service->name, 0, 1) }}
                    </div>
                    <h3 class="font-semibold text-lg mb-2">{{ $service->name }}</h3>
                    <p class="text-sm text-gray-500 flex-1">{{ $service->short_description }}</p>
                    <div class="flex items-center justify-between mt-4">
                        <a href="{{ route('services.show', $service) }}" class="text-abs-red font-semibold text-sm hover:underline">
                            Detail
                        </a>
                        <a href="{{ $service->whatsappLink() }}" target="_blank" class="text-green-600 font-semibold text-sm hover:underline">
                            Pesan &rarr;
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
