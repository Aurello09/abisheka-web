@extends('layouts.frontend')

@section('title', 'Kebijakan Privasi — PT. Abisheka Bangun Sarana')

@section('content')

{{-- ═══════════════════════════ PAGE HEADER ═══════════════════════════ --}}
<x-inner-hero subtitle="LEGAL & PRIVASI" title="Kebijakan Privasi" description="Komitmen PT. Abisheka Bangun Sarana dalam menjaga keamanan dan privasi data serta informasi pengunjung dan klien kami." />

<div class="max-w-4xl mx-auto px-4 py-16">
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8 md:p-12 space-y-8 text-gray-600 leading-relaxed text-[15px]">
        <div>
            <h2 class="text-xl font-bold text-abs-dark mb-3">1. Pendahuluan</h2>
            <p>
                Selamat datang di situs resmi <strong>{{ $siteSetting->company_name ?: 'PT. Abisheka Bangun Sarana' }}</strong>. Kami sangat menghargai privasi Anda dan berkomitmen untuk melindungi informasi pribadi yang Anda berikan saat mengakses layanan kami atau menghubungi kami melalui situs ini.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-bold text-abs-dark mb-3">2. Informasi yang Kami Kumpulkan</h2>
            <p class="mb-3">
                Kami dapat mengumpulkan informasi yang Anda berikan secara langsung saat Anda menghubungi kami, termasuk namun tidak terbatas pada:
            </p>
            <ul class="list-disc pl-5 space-y-1.5 text-gray-600">
                <li>Nama lengkap dan kontak (nomor telepon / WhatsApp, alamat email).</li>
                <li>Nama perusahaan atau instansi yang Anda wakili.</li>
                <li>Rincian kebutuhan pengadaan atau layanan yang Anda tanyakan.</li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-bold text-abs-dark mb-3">3. Penggunaan Informasi</h2>
            <p class="mb-3">
                Informasi yang kami peroleh digunakan semata-mata untuk:
            </p>
            <ul class="list-disc pl-5 space-y-1.5 text-gray-600">
                <li>Merespons pertanyaan, konsultasi, dan permintaan penawaran kerja sama.</li>
                <li>Menyediakan layanan pengelolaan fasilitas, pengadaan barang, atau outsourcing tenaga kerja sesuai kebutuhan Anda.</li>
                <li>Memperbaiki kualitas layanan dan komunikasi profesional perusahaan kami.</li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-bold text-abs-dark mb-3">4. Perlindungan dan Kerahasiaan Data</h2>
            <p>
                Kami menerapkan standar keamanan yang wajar untuk menjaga kerahasiaan data Anda dari akses tanpa izin, perubahan, pengungkapan, atau penghancuran yang tidak sah. Kami tidak menjual atau menyewakan informasi pribadi Anda kepada pihak ketiga mana pun.
            </p>
        </div>

        <div>
            <h2 class="text-xl font-bold text-abs-dark mb-3">5. Hubungi Kami</h2>
            <p>
                Apabila Anda memiliki pertanyaan, saran, atau kekhawatiran terkait Kebijakan Privasi ini, silakan menghubungi kami melalui:
            </p>
            <div class="mt-4 p-5 rounded-xl bg-gray-50 border border-gray-100 text-sm space-y-2">
                <p><strong class="text-abs-dark">Alamat:</strong> {!! nl2br(e($siteSetting->address ?: "Jl. Dr. Soetomo No. 59-61\nSurabaya, 60264")) !!}</p>
                <p><strong class="text-abs-dark">Telepon / WA:</strong> {{ $siteSetting->phone ?: '082-233-117-485' }}</p>
                <p><strong class="text-abs-dark">Email:</strong> {{ $siteSetting->email ?: 'info@abisheka.com' }}</p>
            </div>
        </div>
    </div>
</div>

@endsection
