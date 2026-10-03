<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PT. Abisheka Bangun Sarana')</title>
    <meta name="description" content="@yield('meta_description', 'PT. Abisheka Bangun Sarana - Penyedia jasa outsourcing dan kontraktor: perawatan gedung, pengadaan barang, keamanan, kebersihan, dan lainnya.')">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800,900" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        abs: {
                            red:    '#B3282D',
                            redhov: '#8f1f23',
                            dark:   '#1A1A1A',
                            gray:   '#4B5563',
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }

        /* Nav underline effect */
        .nav-link { position: relative; }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px; left: 0;
            width: 0; height: 2px;
            background: #B3282D;
            transition: width .25s ease;
            border-radius: 2px;
        }
        .nav-link:hover::after, .nav-link.active::after { width: 100%; }
        .nav-link.active { color: #B3282D; }

        /* WhatsApp floating button pulse */
        @keyframes wa-pulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(37,211,102,.5); }
            60%       { box-shadow: 0 0 0 10px rgba(37,211,102,0); }
        }
        .wa-float { animation: wa-pulse 2.5s infinite; }
    </style>
    @yield('head')
</head>
<body class="bg-[#f6f7f5] text-abs-dark antialiased">

    {{-- ══════════════ NAVBAR ══════════════ --}}
    <header class="bg-white/95 backdrop-blur sticky top-0 z-50 shadow-sm border-b border-gray-100">
        <div class="w-full max-w-7xl xl:max-w-[95%] mx-auto px-6 lg:px-10 flex items-center justify-between h-[72px]">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group flex-shrink-0">
                <img src="{{ asset('images/logo_abhiseka_final.png') }}" alt="Logo Abisheka Bangun Sarana" class="w-10 h-10 object-contain transition group-hover:scale-105">
                <div class="hidden sm:flex items-center gap-1.5 whitespace-nowrap mt-0.5">
                    <span class="font-extrabold text-abs-dark text-[15px] md:text-base tracking-wide">PT. ABISHEKA</span>
                    <span class="text-abs-red font-extrabold text-[15px] md:text-base tracking-wide">BANGUN SARANA</span>
                </div>
            </a>

            {{-- Desktop Nav --}}
            <nav class="hidden md:flex items-center gap-8 text-[15px] font-semibold text-gray-600">
                <a href="{{ route('home') }}" class="nav-link pb-1 hover:text-abs-dark transition {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('about') }}" class="nav-link pb-1 hover:text-abs-dark transition {{ request()->routeIs('about') ? 'active' : '' }}">Tentang Kami</a>
                <a href="{{ route('services.index') }}" class="nav-link pb-1 hover:text-abs-dark transition {{ request()->routeIs('services.*') ? 'active' : '' }}">Layanan</a>
                <a href="{{ route('portfolio') }}" class="nav-link pb-1 hover:text-abs-dark transition {{ request()->routeIs('portfolio') ? 'active' : '' }}">Portofolio</a>
                <a href="{{ route('articles') }}" class="nav-link pb-1 hover:text-abs-dark transition {{ request()->routeIs('articles') ? 'active' : '' }}">Artikel</a>
                <a href="{{ route('contact') }}" class="nav-link pb-1 hover:text-abs-dark transition {{ request()->routeIs('contact') ? 'active' : '' }}">Kontak</a>
            </nav>

            {{-- Hamburger (mobile only) --}}
            <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="md:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100 transition">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden md:hidden border-t border-gray-100 bg-white">
            <div class="max-w-6xl mx-auto px-4 py-4 flex flex-col gap-1">
                <a href="{{ route('home') }}" class="px-3 py-2.5 rounded-lg text-sm font-semibold {{ request()->routeIs('home') ? 'bg-red-50 text-abs-red' : 'text-gray-700 hover:bg-gray-50' }}">Beranda</a>
                <a href="{{ route('about') }}" class="px-3 py-2.5 rounded-lg text-sm font-semibold {{ request()->routeIs('about') ? 'bg-red-50 text-abs-red' : 'text-gray-700 hover:bg-gray-50' }}">Tentang Kami</a>
                <a href="{{ route('services.index') }}" class="px-3 py-2.5 rounded-lg text-sm font-semibold {{ request()->routeIs('services.*') ? 'bg-red-50 text-abs-red' : 'text-gray-700 hover:bg-gray-50' }}">Layanan</a>
                <a href="{{ route('portfolio') }}" class="px-3 py-2.5 rounded-lg text-sm font-semibold {{ request()->routeIs('portfolio') ? 'bg-red-50 text-abs-red' : 'text-gray-700 hover:bg-gray-50' }}">Portofolio</a>
                <a href="{{ route('articles') }}" class="px-3 py-2.5 rounded-lg text-sm font-semibold {{ request()->routeIs('articles') ? 'bg-red-50 text-abs-red' : 'text-gray-700 hover:bg-gray-50' }}">Artikel</a>
                <a href="{{ route('contact') }}" class="px-3 py-2.5 rounded-lg text-sm font-semibold {{ request()->routeIs('contact') ? 'bg-red-50 text-abs-red' : 'text-gray-700 hover:bg-gray-50' }}">Kontak</a>
                <div class="pt-2 mt-1 border-t border-gray-100">
                    <a href="https://wa.me/{{ $siteSetting->clean_whatsapp ?: '6282233117485' }}" target="_blank"
                       class="flex items-center gap-2 px-3 py-2.5 rounded-lg text-sm font-bold text-green-700 bg-green-50">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.555 4.116 1.524 5.847L.057 23.082a.75.75 0 00.921.919l5.356-1.459A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.967 0-3.814-.536-5.4-1.47l-.386-.23-4.01 1.092 1.064-3.913-.254-.4A10 10 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                        Hubungi via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    {{-- ══════════════ FOOTER ══════════════ --}}
    <footer class="bg-abs-dark text-gray-400 mt-12">
        {{-- Main grid --}}
        <div class="max-w-6xl mx-auto px-4 py-16 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">

            {{-- Brand --}}
            <div class="lg:col-span-5">
                <div class="flex items-center gap-4 mb-3">
                    <img src="{{ asset('images/logo_abhiseka_final.png') }}" alt="Logo Abisheka" class="w-12 h-12 object-contain flex-shrink-0">
                    <h3 class="font-extrabold text-white text-[20px] md:text-[22px] tracking-wide leading-none">{{ $siteSetting->company_name ?: 'PT. Abisheka Bangun Sarana' }}</h3>
                </div>
                @if($siteSetting->holding_name)
                <p class="text-[13px] text-white font-semibold mb-6">
                    Part of <a href="{{ $siteSetting->holding_url ?: 'https://dpacorp.id/' }}" target="_blank" rel="noopener" class="text-[#eab0a8] hover:text-white transition">{{ $siteSetting->holding_name }}</a>
                </p>
                @endif
                <p class="text-sm leading-[1.8] text-gray-400 mb-8 pr-4">
                    {{ $siteSetting->footer_description ?: 'PT. Abisheka Bangun Sarana siap menjadi mitra strategis Anda dalam merumuskan solusi manajemen fasilitas dan outsourcing tenaga kerja profesional guna mengoptimalkan kinerja operasional bisnis Anda.' }}
                </p>

                {{-- Social Icons --}}
                <div class="flex items-center gap-3.5">
                    @if($siteSetting->instagram_url && $siteSetting->instagram_url !== '#')
                    <a href="{{ $siteSetting->instagram_url }}" target="_blank" rel="noopener" aria-label="Instagram" class="w-11 h-11 rounded-full bg-white/5 hover:bg-abs-red text-white flex items-center justify-center transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    @endif
                    @if($siteSetting->linkedin_url && $siteSetting->linkedin_url !== '#')
                    <a href="{{ $siteSetting->linkedin_url }}" target="_blank" rel="noopener" aria-label="LinkedIn" class="w-11 h-11 rounded-full bg-white/5 hover:bg-abs-red text-white flex items-center justify-center transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    @endif
                    <a href="https://wa.me/{{ $siteSetting->clean_whatsapp ?: '6282233117485' }}" target="_blank" aria-label="WhatsApp" class="w-11 h-11 rounded-full bg-white/5 hover:bg-[#25D366] text-white flex items-center justify-center transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347zM12 0C5.373 0 0 5.373 0 12c0 2.123.555 4.116 1.524 5.847L.057 23.082a.75.75 0 00.921.919l5.356-1.459A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.967 0-3.814-.536-5.4-1.47l-.386-.23-4.01 1.092 1.064-3.913-.254-.4A10 10 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Layanan --}}
            <div class="lg:col-span-3 lg:ml-8">
                <h4 class="text-white font-bold text-sm uppercase tracking-widest mb-6">Layanan Kami</h4>
                <ul class="space-y-3 text-sm">
                    @foreach (\App\Models\Service::where('is_active', true)->get() as $footerService)
                        <li>
                            <a href="{{ route('services.show', $footerService) }}" class="flex items-center gap-2 hover:text-white transition group">
                                <span class="w-1 h-1 rounded-full bg-abs-red group-hover:w-2 transition-all"></span>
                                {{ $footerService->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Kontak --}}
            <div class="lg:col-span-4">
                <h4 class="text-white font-bold text-sm uppercase tracking-widest mb-6">Kontak</h4>
                <ul class="space-y-4 text-sm">
                    <li class="flex gap-3">
                        <svg class="w-4 h-4 mt-1 text-abs-red flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span class="leading-[1.7]">{!! nl2br(e($siteSetting->address ?: "Jl. Dr. Soetomo No. 59-61\nSurabaya, 60264")) !!}</span>
                    </li>
                    <li class="flex gap-3">
                        <svg class="w-4 h-4 mt-0.5 text-abs-red flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <a href="tel:{{ $siteSetting->clean_phone ?: '082233117485' }}" class="hover:text-white transition">{{ $siteSetting->phone ?: '082-233-117-485' }}</a>
                    </li>
                    <li class="flex gap-3">
                        <svg class="w-4 h-4 mt-0.5 text-abs-red flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span>{{ $siteSetting->operational_hours ?: 'Senin – Jumat, 08.00 – 17.00 WIB' }}</span>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="border-t border-gray-800">
            <div class="max-w-6xl mx-auto px-4 py-5 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-gray-500">
                <span>&copy; {{ date('Y') }} {{ $siteSetting->copyright_text ?: 'PT. Abisheka Bangun Sarana. Seluruh hak cipta dilindungi.' }}</span>
                <div class="flex items-center gap-6 text-xs text-gray-400">
                    <a href="{{ route('contact') }}" class="hover:text-white transition">Hubungi Kami</a>
                    <a href="{{ route('privacy') }}" class="hover:text-white transition">Kebijakan Privasi</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- ══════════════ FLOATING WA BUTTON ══════════════ --}}
    <a href="https://wa.me/{{ $siteSetting->clean_whatsapp ?: '6282233117485' }}"
       target="_blank"
       rel="noopener"
       title="Chat via WhatsApp"
       class="wa-float fixed bottom-6 right-6 z-50 w-14 h-14 bg-[#25D366] hover:bg-[#1ebe5d] rounded-full shadow-lg shadow-green-500/40 flex items-center justify-center transition-transform hover:scale-110">
        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
            <path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.555 4.116 1.524 5.847L.057 23.082a.75.75 0 00.921.919l5.356-1.459A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.967 0-3.814-.536-5.4-1.47l-.386-.23-4.01 1.092 1.064-3.913-.254-.4A10 10 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
        </svg>
    </a>

</body>
</html>




