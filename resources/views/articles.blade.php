@extends('layouts.frontend')
@section('title', 'Artikel & Berita – PT. Abisheka Bangun Sarana')
@section('content')

<x-inner-hero
    subtitle="ARTIKEL & BERITA"
    title="Wawasan & Informasi<br>Terkini"
    description="Tips, berita, dan pembaruan seputar dunia outsourcing, kontraktor, dan manajemen fasilitas dari tim ahli kami."
/>

<section class="max-w-6xl mx-auto px-4 py-16">

    @if($articles->count() > 0)
        {{-- Featured Article (first one) --}}
        @php $featured = $articles->first(); $rest = $articles->skip(1); @endphp

        <a href="{{ route('articles.show', $featured) }}"
           class="group flex flex-col lg:flex-row gap-0 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden mb-10">
            <div class="lg:w-1/2 relative overflow-hidden h-64 lg:h-auto">
                @if($featured->image)
                    <img src="{{ asset('images/'.$featured->image) }}" alt="{{ $featured->title }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                @else
                    <div class="w-full h-full bg-gradient-to-br from-abs-dark to-[#3b1216] flex items-center justify-center">
                        <span class="text-7xl font-extrabold text-white/10">{{ substr($featured->title, 0, 1) }}</span>
                    </div>
                @endif
                <div class="absolute inset-0 bg-gradient-to-r from-transparent to-black/10"></div>
                <span class="absolute top-4 left-4 bg-abs-red text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1.5 rounded-full">Terbaru</span>
            </div>
            <div class="lg:w-1/2 p-8 flex flex-col justify-center">
                @if($featured->category)
                    <span class="text-xs font-bold uppercase tracking-widest text-abs-red mb-3">{{ $featured->category }}</span>
                @endif
                <h2 class="text-2xl font-extrabold text-abs-dark leading-snug mb-3 group-hover:text-abs-red transition-colors line-clamp-3">
                    {{ $featured->title }}
                </h2>
                <p class="text-gray-500 text-sm leading-7 line-clamp-3 mb-5">
                    {{ $featured->excerpt ?: Str::limit(strip_tags($featured->content), 160) }}
                </p>
                <div class="flex items-center gap-3">
                    <span class="text-xs text-gray-400">{{ ($featured->published_at ?? $featured->created_at)->format('d M Y') }}</span>
                    <span class="inline-flex items-center gap-1 text-abs-red font-bold text-sm group-hover:gap-2 transition-all">
                        Baca Selengkapnya
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </span>
                </div>
            </div>
        </a>

        {{-- Rest of articles --}}
        @if($rest->count() > 0)
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($rest as $article)
                    <a href="{{ route('articles.show', $article) }}"
                       class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 overflow-hidden flex flex-col">
                        @if($article->image)
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ asset('images/'.$article->image) }}"
                                     alt="{{ $article->title }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                        @else
                            <div class="h-48 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                <span class="text-5xl font-extrabold text-abs-red/20">{{ substr($article->title, 0, 1) }}</span>
                            </div>
                        @endif
                        <div class="p-5 flex flex-col flex-1">
                            @if($article->category)
                                <span class="text-[10px] font-bold uppercase tracking-widest text-abs-red mb-2">{{ $article->category }}</span>
                            @endif
                            <h3 class="font-bold text-base text-abs-dark leading-snug mb-2 line-clamp-2 group-hover:text-abs-red transition-colors">
                                {{ $article->title }}
                            </h3>
                            <p class="text-sm text-gray-500 leading-6 flex-1 line-clamp-3">
                                {{ $article->excerpt ?: Str::limit(strip_tags($article->content), 120) }}
                            </p>
                            <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100">
                                <span class="text-xs text-gray-400">{{ ($article->published_at ?? $article->created_at)->format('d M Y') }}</span>
                                <span class="inline-flex items-center gap-1 text-abs-red font-bold text-xs group-hover:gap-2 transition-all">
                                    Baca
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif
    @else
        <div class="text-center py-24">
            <svg class="w-14 h-14 mx-auto mb-3 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            <p class="font-semibold text-gray-400">Belum ada artikel yang diterbitkan.</p>
        </div>
    @endif
</section>

@endsection
