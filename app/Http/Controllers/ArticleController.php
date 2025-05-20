<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::where('status', '1') // Assuming '1' is active/published
                           ->orderBy('created', 'desc')
                           ->paginate(10); // Paginate articles (e.g., 10 per page)

        $categories = ArticleCategory::where('status', '1') // Assuming '1' is active
                                      ->withCount('articles') // Count articles in each category
                                      ->orderBy('article_category_name', 'asc')
                                      ->get();

        $recentPosts = Article::where('status', '1')
                               ->orderBy('created', 'desc')
                               ->take(3) // Get latest 3 posts for the sidebar
                               ->get();

        // You might want to implement tag fetching logic if needed
        $tags = []; // Placeholder for tags

        return view('page.article.index', compact('articles', 'categories', 'recentPosts', 'tags'));
    }

    /**
     * Display the specified article.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)
                          ->where('status', '1')
                          ->firstOrFail(); // Find by slug or fail
        
        // Increment view count (optional)
        // $article->increment('count_article'); 

        // Fetch categories and recent posts for sidebar consistency
        $categories = ArticleCategory::where('status', '1')
                                      ->withCount('articles')
                                      ->orderBy('article_category_name', 'asc')
                                      ->get();
        $recentPosts = Article::where('status', '1')
                               ->where('id_article', '!=', $article->id_article) // Exclude current post
                               ->orderBy('created', 'desc')
                               ->take(3)
                               ->get();
        $tags = []; // Placeholder

        // You might want a different view for single articles, e.g., 'page.article.detail'
        return view('page.article.detail', compact('article', 'categories', 'recentPosts', 'tags')); 
    }

    /**
     * Display articles by category.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function category($slug)
    {
        $category = ArticleCategory::where('slug', $slug)->where('status', '1')->firstOrFail();
        
        $articles = Article::where('id_article_category', $category->id_article_category)
                           ->where('status', '1')
                           ->orderBy('created', 'desc')
                           ->paginate(10);

        // Fetch all categories and recent posts for sidebar
        $categories = ArticleCategory::where('status', '1')
                                      ->withCount('articles')
                                      ->orderBy('article_category_name', 'asc')
                                      ->get();
        $recentPosts = Article::where('status', '1')
                               ->orderBy('created', 'desc')
                               ->take(3)
                               ->get();
        $tags = []; // Placeholder

        // Reuse the index view but pass the specific category title
        $pageTitle = $category->article_category_name; // For breadcrumb/title
        return view('page.article.index', compact('articles', 'categories', 'recentPosts', 'tags', 'pageTitle', 'category'));
    }

} 