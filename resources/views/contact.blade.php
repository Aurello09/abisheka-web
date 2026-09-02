@extends('layouts.app')

@section('title', 'Kontak — PT Abisheka Bangun Sarana')

@section('content')
    <section class="max-w-4xl mx-auto px-4 py-16">
        <h1 class="text-3xl font-bold mb-6">Hubungi Kami</h1>
        <p class="text-gray-600 mb-8">Ada kebutuhan layanan atau pertanyaan? Tim kami siap membantu.</p>

        <div class="grid sm:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
                <h2 class="font-semibold mb-2">Alamat</h2>
                <p class="text-sm text-gray-600">Jl. Dr. Soetomo No. 59-61, Surabaya, 60264 (area Heritage House of Airlangga)</p>
            </div>
            <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
                <h2 class="font-semibold mb-2">Telepon / WhatsApp</h2>
                <p class="text-sm text-gray-600 mb-3">082-233-117-485</p>
                <a href="https://wa.me/{{ config('services.whatsapp.number', '6282233117485') }}" target="_blank" class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 transition text-white text-sm font-semibold px-4 py-2 rounded-lg">
                    Chat via WhatsApp
                </a>
            </div>
        </div>
    </section>
@endsection
