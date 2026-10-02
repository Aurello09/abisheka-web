@extends('layouts.frontend')
@section('title', $article->title . ' – PT. Abisheka Bangun Sarana')

@section('content')

{{-- ══════════ READING PROGRESS BAR ══════════ --}}
<div id="progress-bar"
     class="fixed top-0 left-0 z-[999] h-[3px] bg-gradient-to-r from-abs-red to-[#e05a60] transition-all duration-100"
     style="width:0%"></div>
<script>
    window.addEventListener('scroll', () => {
        const el = document.documentElement;
        const scrolled = el.scrollTop / (el.scrollHeight - el.clientHeight) * 100;
        document.getElementById('progress-bar').style.width = scrolled + '%';
    });
</script>

{{-- ══════════ FULL-BLEED HERO ══════════ --}}
<div class="relative min-h-[70vh] flex items-end overflow-hidden bg-abs-dark">

    {{-- BG: cover image or gradient --}}
    @if($article->image)
        <div class="absolute inset-0">
            <img src="{{ asset('images/'.$article->image) }}"
                 alt="{{ $article->title }}"
                 class="w-full h-full object-cover scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-[#0d0000] via-abs-dark/70 to-abs-dark/30"></div>
        </div>
    @else
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a0608] via-abs-dark to-[#2a0c0f]"></div>
        <div class="absolute top-1/4 left-0 w-[500px] h-[500px] bg-abs-red/10 rounded-full blur-[140px]"></div>
        <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-abs-red/8 rounded-full blur-[120px]"></div>
    @endif

    {{-- subtle grid overlay --}}
    <div class="absolute inset-0 opacity-[0.025]"
         style="background-image:linear-gradient(rgba(255,255,255,.6) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.6) 1px,transparent 1px);background-size:48px 48px;"></div>

    {{-- Hero content --}}
    <div class="relative z-10 w-full max-w-5xl mx-auto px-6 pb-16 pt-32">

        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 text-xs text-white/40 mb-6 font-medium">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
            <span>/</span>
            <a href="{{ route('articles') }}" class="hover:text-white transition-colors">Artikel</a>
            @if($article->category)
                <span>/</span>
                <span class="text-white/60">{{ $article->category }}</span>
            @endif
        </nav>

        {{-- Category pill --}}
        @if($article->category)
            <span class="inline-flex items-center gap-1.5 bg-abs-red text-white text-[10px] font-black uppercase tracking-[0.15em] px-3 py-1.5 rounded-full mb-4 shadow-lg shadow-abs-red/30">
                <span class="w-1.5 h-1.5 bg-white/70 rounded-full"></span>
                {{ $article->category }}
            </span>
        @endif

        {{-- Title --}}
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white leading-[1.15] mb-5 max-w-3xl drop-shadow-sm">
            {{ $article->title }}
        </h1>

        {{-- Excerpt --}}
        @if($article->excerpt)
            <p class="text-white/60 text-base sm:text-lg leading-relaxed max-w-2xl mb-8">
                {{ Str::limit($article->excerpt, 160) }}
            </p>
        @endif

        {{-- Meta pills --}}
        <div class="flex flex-wrap items-center gap-3">
            <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/10 rounded-full px-4 py-2">
                <svg class="w-3.5 h-3.5 text-abs-red flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                <span class="text-xs text-white/70 font-medium">{{ ($article->published_at ?? $article->created_at)->format('d M Y') }}</span>
            </div>
            <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/10 rounded-full px-4 py-2">
                <svg class="w-3.5 h-3.5 text-abs-red flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span class="text-xs text-white/70 font-medium">{{ max(1, (int)(str_word_count(strip_tags($article->content)) / 200)) }} menit baca</span>
            </div>
        </div>
    </div>
</div>

{{-- ══════════ CONTENT ══════════ --}}
<div class="bg-gray-50 pb-24">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col lg:flex-row gap-8 -mt-8 items-start">

            {{-- ── MAIN ARTICLE ── --}}
            <article class="flex-1 min-w-0 space-y-0">

                {{-- Main image card (pops out of hero) --}}
                @if($article->image)
                    <div class="rounded-2xl overflow-hidden shadow-2xl mb-0 ring-4 ring-white">
                        <img src="{{ asset('images/'.$article->image) }}"
                             alt="{{ $article->title }}"
                             class="w-full max-h-[480px] object-cover">
                    </div>
                @endif

                {{-- Article body card --}}
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-100 {{ $article->image ? 'rounded-t-none -mt-0' : 'mt-0' }} p-8 sm:p-12">

                    {{-- Decorative opening rule --}}
                    <div class="flex items-center gap-3 mb-8">
                        <span class="h-[3px] w-8 bg-abs-red rounded-full"></span>
                        <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400">PT. Abisheka Bangun Sarana</span>
                    </div>

                    {{-- Content --}}
                    <div id="article-content"
                         class="prose prose-lg max-w-none
                                [&_h2]:text-2xl [&_h2]:font-extrabold [&_h2]:text-abs-dark [&_h2]:mt-12 [&_h2]:mb-5 [&_h2]:pb-3 [&_h2]:border-b [&_h2]:border-gray-100 [&_h2]:leading-snug
                                [&_h3]:text-xl [&_h3]:font-bold [&_h3]:text-abs-dark [&_h3]:mt-8 [&_h3]:mb-3
                                [&_p]:text-gray-600 [&_p]:leading-[1.95] [&_p]:text-[15.5px] [&_p]:mb-5
                                [&_a]:text-abs-red [&_a]:font-semibold [&_a]:underline-offset-2
                                [&_img]:rounded-2xl [&_img]:shadow-lg [&_img]:mx-auto [&_img]:my-8
                                [&_blockquote]:not-italic [&_blockquote]:border-l-[4px] [&_blockquote]:border-abs-red [&_blockquote]:bg-[#fdf5f5] [&_blockquote]:rounded-r-2xl [&_blockquote]:px-7 [&_blockquote]:py-5 [&_blockquote]:my-8 [&_blockquote]:text-gray-700 [&_blockquote]:text-base [&_blockquote]:leading-8
                                [&_strong]:text-abs-dark [&_strong]:font-bold
                                [&_ul]:text-gray-600 [&_ul]:space-y-2 [&_li]:text-[15px] [&_li]:leading-7
                                [&_ol]:text-gray-600 [&_ol]:space-y-2
                                [&_code]:text-abs-red [&_code]:bg-red-50 [&_code]:px-1.5 [&_code]:py-0.5 [&_code]:rounded [&_code]:text-sm [&_code]:font-mono
                                [&_hr]:border-gray-100 [&_hr]:my-10">
                        {!! $article->content !!}
                    </div>

                    {{-- Tags / kategori footer --}}
                    @if($article->category)
                        <div class="mt-10 pt-8 border-t border-gray-100 flex items-center gap-2">
                            <span class="text-xs text-gray-400 font-semibold">Topik:</span>
                            <span class="bg-abs-red/10 text-abs-red font-bold text-xs px-3 py-1.5 rounded-full">{{ $article->category }}</span>
                        </div>
                    @endif
                </div>

                {{-- Share bar --}}
                <div class="mt-4 flex flex-col sm:flex-row items-center justify-between gap-4 bg-white rounded-2xl ring-1 ring-gray-100 shadow-sm px-6 py-4">
                    <a href="{{ route('articles') }}"
                       class="inline-flex items-center gap-2 text-gray-500 hover:text-abs-red font-semibold text-sm transition-colors group">
                        <svg class="w-4 h-4 group-hover:-translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                        Kembali ke Daftar Artikel
                    </a>

                    <div class="flex items-center gap-3">
                        <span class="text-[10px] text-gray-300 font-bold uppercase tracking-widest">Bagikan</span>
                        {{-- WhatsApp --}}
                        <a href="https://wa.me/?text={{ urlencode($article->title.' — '.url()->current()) }}"
                           target="_blank" rel="noopener"
                           title="Bagikan ke WhatsApp"
                           class="group w-9 h-9 bg-[#25D366] hover:bg-[#1dbc5c] text-white rounded-full flex items-center justify-center transition-all hover:scale-110 shadow-md shadow-green-500/20">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </a>
                        {{-- Copy link --}}
                        <button id="copy-btn"
                                onclick="copyLink(this)"
                                title="Salin tautan"
                                class="w-9 h-9 bg-gray-100 hover:bg-gray-200 text-gray-400 hover:text-gray-600 rounded-full flex items-center justify-center transition-all hover:scale-110">
                            <svg class="w-4 h-4" id="copy-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                        </button>
                    </div>
                </div>
            </article>

            {{-- ── SIDEBAR ── --}}
            <aside class="lg:w-[280px] xl:w-[300px] flex-shrink-0 space-y-5 lg:sticky lg:top-24 mt-8 lg:mt-0">

                {{-- Article meta card --}}
                <div class="bg-white rounded-2xl ring-1 ring-gray-100 shadow-sm overflow-hidden">
                    <div class="h-1 bg-gradient-to-r from-abs-red to-[#e05a60]"></div>
                    <div class="p-5 space-y-5">
                        @if($article->category)
                            <div>
                                <p class="text-[9px] text-gray-400 uppercase tracking-[0.15em] font-bold mb-2">Kategori</p>
                                <span class="inline-flex items-center gap-1.5 bg-abs-red text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1.5 rounded-full">
                                    <span class="w-1 h-1 bg-white/60 rounded-full"></span>
                                    {{ $article->category }}
                                </span>
                            </div>
                            <div class="h-px bg-gray-100"></div>
                        @endif
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 bg-gray-50 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-abs-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <p class="text-[9px] text-gray-400 uppercase tracking-[0.15em] font-bold mb-0.5">Tanggal Terbit</p>
                                <p class="text-sm font-semibold text-abs-dark">{{ ($article->published_at ?? $article->created_at)->format('d M Y') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 bg-gray-50 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-abs-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <p class="text-[9px] text-gray-400 uppercase tracking-[0.15em] font-bold mb-0.5">Waktu Baca</p>
                                <p class="text-sm font-semibold text-abs-dark">{{ max(1, (int)(str_word_count(strip_tags($article->content)) / 200)) }} menit</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- CTA --}}
                <div class="relative overflow-hidden rounded-2xl bg-abs-dark p-6 text-white shadow-xl">
                    {{-- decorative circles --}}
                    <div class="absolute -top-6 -right-6 w-28 h-28 bg-abs-red/20 rounded-full blur-xl"></div>
                    <div class="absolute -bottom-8 -left-4 w-24 h-24 bg-abs-red/10 rounded-full blur-xl"></div>
                    <div class="relative z-10">
                        <div class="w-10 h-10 bg-abs-red/20 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-abs-red" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        </div>
                        <h3 class="font-extrabold text-[15px] leading-snug mb-2">Butuh Solusi untuk Bisnis Anda?</h3>
                        <p class="text-white/55 text-xs leading-5 mb-5">Tim ahli kami siap membantu Anda menemukan layanan yang paling sesuai.</p>
                        <a href="{{ route('contact') }}"
                           class="flex items-center justify-center gap-2 w-full bg-abs-red hover:bg-[#9e2227] text-white font-bold text-sm py-3 rounded-xl transition-all shadow-lg shadow-abs-red/30">
                            Konsultasi Gratis
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Related articles --}}
                @if($others->count() > 0)
                    <div class="bg-white rounded-2xl ring-1 ring-gray-100 shadow-sm overflow-hidden">
                        <div class="px-5 py-4 border-b border-gray-50 flex items-center justify-between">
                            <h3 class="font-extrabold text-sm text-abs-dark">Artikel Lainnya</h3>
                            <a href="{{ route('articles') }}" class="text-[10px] font-bold text-abs-red hover:underline uppercase tracking-wide">Lihat semua</a>
                        </div>
                        <div class="divide-y divide-gray-50">
                            @foreach($others as $other)
                                <a href="{{ route('articles.show', $other) }}"
                                   class="flex gap-3.5 px-5 py-4 hover:bg-gray-50/70 transition-colors group">
                                    {{-- Thumbnail --}}
                                    @if($other->image)
                                        <div class="w-[52px] h-[52px] flex-shrink-0 rounded-xl overflow-hidden ring-1 ring-gray-100">
                                            <img src="{{ asset('images/'.$other->image) }}"
                                                 alt="{{ $other->title }}"
                                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                        </div>
                                    @else
                                        <div class="w-[52px] h-[52px] flex-shrink-0 rounded-xl bg-gradient-to-br from-[#fdf0f0] to-[#fde0e0] flex items-center justify-center ring-1 ring-red-100">
                                            <span class="text-xl font-extrabold text-abs-red/30">{{ substr($other->title, 0, 1) }}</span>
                                        </div>
                                    @endif
                                    <div class="flex-1 min-w-0">
                                        <h4 class="text-xs font-bold text-abs-dark leading-snug line-clamp-2 group-hover:text-abs-red transition-colors">{{ $other->title }}</h4>
                                        <p class="text-[10px] text-gray-400 mt-1.5 font-medium">{{ ($other->published_at ?? $other->created_at)->format('d M Y') }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif

            </aside>
        </div>
    </div>
</div>

<script>
function copyLink(btn) {
    navigator.clipboard.writeText('{{ url()->current() }}').then(() => {
        btn.classList.add('!bg-green-500', '!text-white');
        document.getElementById('copy-icon').innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>';
        setTimeout(() => {
            btn.classList.remove('!bg-green-500', '!text-white');
            document.getElementById('copy-icon').innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>';
        }, 2000);
    });
}
</script>

@endsection
