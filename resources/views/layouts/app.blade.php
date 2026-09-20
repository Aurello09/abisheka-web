<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PT Abisheka Bangun Sarana')</title>
    <meta name="description" content="@yield('meta_description', 'PT Abisheka Bangun Sarana - Penyedia jasa outsourcing dan kontraktor: perawatan gedung, pengadaan barang, keamanan, kebersihan, dan lainnya.')">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        abs: {
                            red: '#B3282D',
                            dark: '#1A1A1A',
                            gray: '#4B5563',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-[#f6f7f5] text-abs-dark antialiased" style="font-family: 'Plus Jakarta Sans', sans-serif;">

    {{-- NAVBAR --}}
    <header class="bg-white/95 backdrop-blur sticky top-0 z-50 border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-4 flex items-center justify-between h-[76px]">
            <a href="{{ route('home') }}" class="flex items-center gap-2 font-bold text-lg">
                <span class="w-12 h-12 rounded-xl bg-white border border-gray-100 flex items-center justify-center overflow-hidden shadow-sm">
                    <img src="{{ asset('images/logo abisheka.jpg') }}" alt="Logo Abisheka Bangun Sarana" class="w-full h-full object-contain">
                </span>
                <span class="hidden sm:block">Abisheka Bangun Sarana</span>
            </a>
            <nav class="hidden md:flex items-center gap-7 text-sm font-semibold text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-abs-red transition">Beranda</a>
                <a href="{{ route('services.index') }}" class="text-abs-red transition">Layanan</a>
                <a href="{{ route('about') }}" class="hover:text-abs-red transition">Tentang Kami</a>
                <a href="{{ route('contact') }}" class="hover:text-abs-red transition">Kontak</a>
            </nav>
            <a href="https://wa.me/{{ config('services.whatsapp.number', '6282233117485') }}"
               target="_blank"
               class="hidden sm:inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition shadow-sm shadow-green-600/20">
                Hubungi via WA
            </a>
            {{-- Mobile menu toggle --}}
            <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="md:hidden text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <div id="mobile-menu" class="hidden md:hidden border-t bg-white">
            <div class="px-4 py-3 flex flex-col gap-3 text-sm font-medium text-gray-700">
                <a href="{{ route('home') }}">Beranda</a>
                <a href="{{ route('services.index') }}">Layanan</a>
                <a href="{{ route('about') }}">Tentang Kami</a>
                <a href="{{ route('contact') }}">Kontak</a>
                <a href="https://wa.me/{{ config('services.whatsapp.number', '6282233117485') }}" class="text-green-600 font-semibold">Hubungi via WA</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-abs-dark text-gray-300 mt-16">
        <div class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <div class="flex items-center gap-2 text-white font-bold text-lg mb-3">
                    <span class="w-12 h-12 rounded-xl bg-white flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('images/logo abisheka.jpg') }}" alt="Logo Abisheka Bangun Sarana" class="w-full h-full object-contain">
                    </span>
                    Abisheka Bangun Sarana
                </div>
                <p class="text-sm text-gray-400">Penyedia jasa outsourcing dan kontraktor terpercaya, bagian dari DPA Group — Holding Company of Universitas Airlangga.</p>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-3">Layanan</h4>
                <ul class="space-y-2 text-sm">
                    @foreach (\App\Models\Service::where('is_active', true)->get() as $footerService)
                        <li><a href="{{ route('services.show', $footerService) }}" class="hover:text-white transition">{{ $footerService->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-3">Kontak</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li>Jl. Dr. Soetomo No. 59-61, Surabaya, 60264</li>
                    <li>082-233-117-485</li>
                    <li><a href="https://wa.me/{{ config('services.whatsapp.number', '6282233117485') }}" class="text-green-500 hover:underline">Chat WhatsApp</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 text-center text-xs text-gray-500 py-4">
            &copy; {{ date('Y') }} PT Abisheka Bangun Sarana. Seluruh hak cipta dilindungi.
        </div>
    </footer>

</body>
</html>
