@props(['subtitle' => '', 'title' => '', 'description' => ''])
<section class="relative bg-abs-dark text-white overflow-hidden border-b-[4px] border-abs-red">
    {{-- Rich gradient background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-[#540d16] via-[#161616] to-[#3b0a10]"></div>
    
    {{-- Animated Glows --}}
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-abs-red/30 rounded-full blur-[120px] -translate-y-1/3 translate-x-1/3 animate-[pulse_6s_ease-in-out_infinite]"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-abs-red/20 rounded-full blur-[100px] translate-y-1/3 -translate-x-1/3 animate-[pulse_8s_ease-in-out_infinite_reverse]"></div>

    {{-- Moving Dot pattern --}}
    <div class="absolute inset-0 opacity-[0.08]" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 24px 24px; animation: slideBg 40s linear infinite;"></div>
    
    {{-- Animated Ornaments --}}
    {{-- 1. Spinning Asterisk --}}
    <svg class="absolute right-[5%] top-[10%] text-white/[0.04] w-64 h-64 animate-[spin_30s_linear_infinite]" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 2L13.5 10.5L22 12L13.5 13.5L12 22L10.5 13.5L2 12L10.5 10.5L12 2Z" />
    </svg>
    {{-- 2. Rotating Hexagon (Structure) --}}
    <svg class="absolute left-[8%] top-[15%] text-abs-red/20 w-32 h-32 animate-[spin_40s_linear_infinite_reverse]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
        <polygon points="12 2 22 7.8 22 16.2 12 22 2 16.2 2 7.8"/>
    </svg>
    {{-- 3. Floating Double Chevron (Growth/Direction) --}}
    <svg class="absolute left-[18%] bottom-[20%] text-white/15 w-16 h-16" style="animation: floatUp 8s ease-in-out infinite;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M7 13L12 8L17 13M7 17L12 12L17 17"/>
    </svg>
    {{-- 4. Floating Grid Block (Architecture/Foundation) --}}
    <svg class="absolute right-[22%] bottom-[15%] text-white/10 w-24 h-24" style="animation: float 10s ease-in-out infinite reverse;" fill="currentColor" viewBox="0 0 24 24">
        <rect x="2" y="2" width="4" height="4"/><rect x="10" y="2" width="4" height="4"/><rect x="18" y="2" width="4" height="4"/>
        <rect x="2" y="10" width="4" height="4"/><rect x="10" y="10" width="4" height="4"/><rect x="18" y="10" width="4" height="4"/>
        <rect x="2" y="18" width="4" height="4"/><rect x="10" y="18" width="4" height="4"/><rect x="18" y="18" width="4" height="4"/>
    </svg>
    {{-- 5. Animated Diagonal Lines --}}
    <div class="absolute left-[40%] top-[-5%] w-40 h-40 opacity-20" style="background: repeating-linear-gradient(45deg, transparent, transparent 4px, #fff 4px, #fff 5px); animation: float 12s ease-in-out infinite;"></div>
    {{-- 6. Floating Triangle (Abisheka Logo Vibe) --}}
    <svg class="absolute right-[35%] top-[25%] text-abs-red/30 w-12 h-12" style="animation: floatUp 7s ease-in-out infinite reverse;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M12 3L22 20H2L12 3Z"/>
    </svg>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(10deg); }
        }
        @keyframes floatUp {
            0%, 100% { transform: translateY(0px) scale(1); opacity: 0.1; }
            50% { transform: translateY(-30px) scale(1.1); opacity: 0.3; }
        }
        @keyframes slideBg { from { background-position: 0 0; } to { background-position: 240px 240px; } }
    </style>

    <div class="relative max-w-6xl mx-auto px-4 py-20 pb-24">
        <div class="flex items-center gap-2 mb-4">
            <span class="h-px w-8 bg-abs-red"></span>
            <p class="text-xs font-bold uppercase tracking-[0.22em] text-white/50">{{ $subtitle }}</p>
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight mb-4">
            {!! $title !!}
        </h1>
        <p class="text-white/60 text-base md:text-lg leading-8 max-w-2xl">
            {!! $description !!}
        </p>
    </div>
</section>



