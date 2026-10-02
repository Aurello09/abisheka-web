@extends('layouts.frontend')

@section('title', 'Tentang Kami — PT. Abisheka Bangun Sarana')

@section('content')

{{-- ═══════════════════════════ PAGE HEADER ═══════════════════════════ --}}
<x-inner-hero subtitle="TENTANG KAMI" title="Mengenal PT. Abisheka<br>Bangun Sarana" description="Penyedia jasa outsourcing dan kontraktor terpercaya, bagian dari ekosistem bisnis DPA Group Universitas Airlangga." />

<div class="max-w-6xl mx-auto px-4 py-16">

    {{-- ═══ Profile + Legalitas ═══ --}}
    <div class="grid md:grid-cols-2 gap-8 mb-12">

        {{-- Profil perusahaan --}}
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-xl bg-abs-red/10 flex items-center justify-center">
                    <svg class="w-5 h-5 text-abs-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                <h2 class="font-extrabold text-abs-dark text-lg">Profil Perusahaan</h2>
            </div>
            <div class="space-y-4 text-[15px] text-gray-600 leading-8">
                <p>
                    <strong class="text-abs-dark">PT. Abisheka Bangun Sarana (ABS)</strong> adalah perusahaan penyedia jasa outsourcing dan kontraktor yang dibentuk pada <strong>10 Desember 2020</strong> sesuai Akta Pendirian No. 14.
                </p>
                <p>
                    Perusahaan mendapat pengesahan dari Keputusan Menteri Hukum & HAM RI dengan nomor <strong>AHU-0000286.AH.0101 Tahun 2021</strong>.
                </p>
                <p>
                    ABS merupakan bagian dari <strong class="text-abs-red">DPA Group</strong> — Holding Company of Universitas Airlangga, yang menaungi berbagai unit bisnis mulai dari konsultasi, travel, produk, hingga layanan korporat.
                </p>
            </div>
        </div>

        {{-- Legalitas --}}
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 rounded-xl bg-abs-red/10 flex items-center justify-center">
                    <svg class="w-5 h-5 text-abs-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h2 class="font-extrabold text-abs-dark text-lg">Legalitas & Perizinan</h2>
            </div>
            <ul class="space-y-4">
                @foreach([
                    ['label' => 'Nomor Induk Berusaha (NIB)', 'value' => '1214000100878'],
                    ['label' => 'NPWP Badan', 'value' => '96.903.975.9-607.000'],
                    ['label' => 'Akta Pendirian', 'value' => 'No. 14, 10 Desember 2020'],
                    ['label' => 'SK Kemenkumham', 'value' => 'AHU-0000286.AH.0101/2021'],
                ] as $item)
                <li class="flex items-start gap-3 border-b border-gray-50 pb-4 last:border-0 last:pb-0">
                    <span class="w-5 h-5 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-3 h-3 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    </span>
                    <div>
                        <p class="text-xs text-gray-400 font-medium mb-0.5">{{ $item['label'] }}</p>
                        <p class="text-sm font-bold text-abs-dark">{{ $item['value'] }}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- ═══ Stats ═══ --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">
        @foreach([
            ['num' => '450+', 'label' => 'Klien Terlayani'],
            ['num' => '6+',   'label' => 'Jenis Layanan'],
            ['num' => '5+',   'label' => 'Tahun Beroperasi'],
            ['num' => '1',    'label' => 'Holding DPA Group'],
        ] as $stat)
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 text-center">
            <p class="text-3xl font-extrabold text-abs-red mb-1">{{ $stat['num'] }}</p>
            <p class="text-xs text-gray-500 font-medium">{{ $stat['label'] }}</p>
        </div>
        @endforeach
    </div>

    {{-- ═══ Visi Misi ═══ --}}
    <div class="grid md:grid-cols-2 gap-6 mb-12">
        <div class="bg-abs-red rounded-2xl p-8 text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 18px 18px;"></div>
            <div class="relative">
                <p class="text-xs font-bold uppercase tracking-widest text-white/60 mb-3">Visi</p>
                <p class="text-lg font-bold leading-8">Menjadi mitra operasional terpercaya bagi perusahaan dan instansi di seluruh Indonesia.</p>
            </div>
        </div>
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8">
            <p class="text-xs font-bold uppercase tracking-widest text-abs-red mb-3">Misi</p>
            <ul class="space-y-2.5 text-sm text-gray-600">
                @foreach([
                    'Menyediakan layanan berkualitas dengan tenaga profesional',
                    'Mengutamakan kepuasan dan kepercayaan klien',
                    'Beroperasi dengan transparansi dan integritas tinggi',
                    'Mendukung pertumbuhan bisnis klien secara berkelanjutan',
                ] as $m)
                <li class="flex items-start gap-2.5">
                    <svg class="w-4 h-4 text-abs-red flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    {{ $m }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>


</div>

@endsection

