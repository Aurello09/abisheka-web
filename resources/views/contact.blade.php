@extends('layouts.frontend')

@section('title', 'Kontak — PT. Abisheka Bangun Sarana')

@section('content')

{{-- ═══════════════════════════ PAGE HEADER ═══════════════════════════ --}}
<x-inner-hero subtitle="HUBUNGI KAMI" title="Mari Diskusikan<br>Kebutuhan Anda." description="Tim PT. Abisheka Bangun Sarana siap membantu Anda. Jangan ragu untuk menghubungi kami untuk pertanyaan atau penawaran kerja sama." />

<div class="max-w-6xl mx-auto px-4 py-16">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">

        {{-- Alamat --}}
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-7">
            <div class="w-12 h-12 rounded-xl bg-abs-red/10 flex items-center justify-center mb-5">
                <svg class="w-6 h-6 text-abs-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <h2 class="font-bold text-abs-dark mb-2">Alamat Kantor</h2>
            <p class="text-sm text-gray-500 leading-7">
                Jl. Dr. Soetomo No. 59-61<br>
                Surabaya, 60264<br>
                <span class="text-xs text-gray-400">(area Heritage House of Airlangga)</span>
            </p>
        </div>

        {{-- Telepon --}}
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-7">
            <div class="w-12 h-12 rounded-xl bg-abs-red/10 flex items-center justify-center mb-5">
                <svg class="w-6 h-6 text-abs-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </div>
            <h2 class="font-bold text-abs-dark mb-2">Telepon / WhatsApp</h2>
            <p class="text-sm text-gray-500 mb-5 leading-7">
                <a href="tel:082233117485" class="hover:text-abs-red transition font-semibold text-abs-dark">082-233-117-485</a><br>
                Senin – Jumat, 08.00 – 17.00 WIB
            </p>
            <a href="https://wa.me/{{ config('services.whatsapp.number', '6282233117485') }}" target="_blank"
               class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white text-sm font-bold px-5 py-2.5 rounded-xl transition">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.555 4.116 1.524 5.847L.057 23.082a.75.75 0 00.921.919l5.356-1.459A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.967 0-3.814-.536-5.4-1.47l-.386-.23-4.01 1.092 1.064-3.913-.254-.4A10 10 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                Chat WhatsApp
            </a>
        </div>

        {{-- Jam operasional --}}
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-7">
            <div class="w-12 h-12 rounded-xl bg-abs-red/10 flex items-center justify-center mb-5">
                <svg class="w-6 h-6 text-abs-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <h2 class="font-bold text-abs-dark mb-4">Jam Operasional</h2>
            <ul class="space-y-2 text-sm text-gray-600">
                @foreach([
                    ['day' => 'Senin – Jumat', 'time' => '08.00 – 17.00 WIB', 'open' => true],
                    ['day' => 'Sabtu',          'time' => '08.00 – 13.00 WIB', 'open' => true],
                    ['day' => 'Minggu',         'time' => 'Tutup',              'open' => false],
                ] as $schedule)
                <li class="flex items-center justify-between border-b border-gray-50 pb-2 last:border-0">
                    <span class="font-medium text-abs-dark">{{ $schedule['day'] }}</span>
                    <span class="{{ $schedule['open'] ? 'text-gray-500' : 'text-red-400 font-semibold' }}">{{ $schedule['time'] }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- ═══ WA CTA Section ═══ --}}
    <div class="bg-abs-red rounded-2xl p-8 md:p-12 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 22px 22px;"></div>
        <div class="relative flex flex-col md:flex-row items-center justify-between gap-8">
            <div>
                <p class="text-white/70 text-xs font-bold uppercase tracking-widest mb-3">Cara Tercepat Menghubungi Kami</p>
                <h2 class="text-2xl md:text-3xl font-extrabold text-white mb-2">Langsung chat via WhatsApp</h2>
                <p class="text-white/70 text-sm leading-7">Tim kami aktif merespons pertanyaan dan kebutuhan Anda di jam kerja.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 flex-shrink-0">
                <a href="https://wa.me/{{ config('services.whatsapp.number', '6282233117485') }}" target="_blank"
                   class="inline-flex items-center justify-center gap-2.5 bg-white text-abs-red font-bold px-7 py-4 rounded-xl hover:bg-gray-50 transition text-sm shadow-lg">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.555 4.116 1.524 5.847L.057 23.082a.75.75 0 00.921.919l5.356-1.459A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.967 0-3.814-.536-5.4-1.47l-.386-.23-4.01 1.092 1.064-3.913-.254-.4A10 10 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                    Chat Sekarang
                </a>
                <a href="{{ route('services.index') }}"
                   class="inline-flex items-center justify-center gap-2 border border-white/30 text-white font-bold px-7 py-4 rounded-xl hover:bg-white/10 transition text-sm">
                    Lihat Layanan
                </a>
            </div>
        </div>
    </div>

    {{-- ═══ Google Maps embed ═══ --}}
    <div class="mt-8 bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-gray-50 flex items-center gap-3">
            <svg class="w-5 h-5 text-abs-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>
            <h3 class="font-bold text-abs-dark">Lokasi Kami di Peta</h3>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6204939066327!2d112.7293!3d-7.2674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f97d1d21fc23%3A0x4e28fb5fd3edbd02!2sJl.%20Dr.%20Soetomo%2C%20Surabaya!5e0!3m2!1sid!2sid!4v1696000000000!5m2!1sid!2sid"
            width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="w-full">
        </iframe>
    </div>
</div>

@endsection

