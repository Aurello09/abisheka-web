<?php
namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Article;
use App\Models\Client;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->get();
        $clients = Client::where('is_active', true)->get();
        $testimonials = Testimonial::where('is_active', true)->get();
        return view('home.index', compact('services', 'clients', 'testimonials'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function portfolio()
    {
        $portfolios = Portfolio::where('is_active', true)->orderBy('completion_date', 'desc')->get();
        return view('portfolio', compact('portfolios'));
    }

    public function portfolioShow(Portfolio $portfolio)
    {
        abort_if(!$portfolio->is_active, 404);
        $others = Portfolio::where('is_active', true)
            ->where('id', '!=', $portfolio->id)
            ->orderBy('completion_date', 'desc')
            ->limit(3)
            ->get();
        return view('portfolio_show', compact('portfolio', 'others'));
    }

    public function articles()
    {
        $articles = Article::where('is_published', true)
            ->orderByRaw('COALESCE(published_at, created_at) DESC')
            ->get();
        return view('articles', compact('articles'));
    }

    public function articleShow(Article $article)
    {
        abort_if(!$article->is_published, 404);
        $others = Article::where('is_published', true)
            ->where('id', '!=', $article->id)
            ->orderByRaw('COALESCE(published_at, created_at) DESC')
            ->limit(3)
            ->get();
        return view('articles_show', compact('article', 'others'));
    }
}
