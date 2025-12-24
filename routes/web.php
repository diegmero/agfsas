<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/nosotros', function () {
    return view('about');
})->name('about');

Route::get('/servicios', function () {
    return view('services');
})->name('services');

Route::get('/contacto', function () {
    return view('contact');
})->name('contact');

// Sitemap for SEO
Route::get('/sitemap.xml', function () {
    $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
    $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

    // Home page
    $sitemap .= '<url>';
    $sitemap .= '<loc>' . url('/') . '</loc>';
    $sitemap .= '<lastmod>' . now()->toAtomString() . '</lastmod>';
    $sitemap .= '<changefreq>weekly</changefreq>';
    $sitemap .= '<priority>1.0</priority>';
    $sitemap .= '</url>';

    // Services page
    $sitemap .= '<url>';
    $sitemap .= '<loc>' . route('services') . '</loc>';
    $sitemap .= '<lastmod>' . now()->toAtomString() . '</lastmod>';
    $sitemap .= '<changefreq>monthly</changefreq>';
    $sitemap .= '<priority>0.8</priority>';
    $sitemap .= '</url>';

    // About page
    $sitemap .= '<url>';
    $sitemap .= '<loc>' . route('about') . '</loc>';
    $sitemap .= '<lastmod>' . now()->toAtomString() . '</lastmod>';
    $sitemap .= '<changefreq>monthly</changefreq>';
    $sitemap .= '<priority>0.7</priority>';
    $sitemap .= '</url>';

    // Contact page
    $sitemap .= '<url>';
    $sitemap .= '<loc>' . route('contact') . '</loc>';
    $sitemap .= '<lastmod>' . now()->toAtomString() . '</lastmod>';
    $sitemap .= '<changefreq>monthly</changefreq>';
    $sitemap .= '<priority>0.6</priority>';
    $sitemap .= '</url>';

    $sitemap .= '</urlset>';

    return response($sitemap)->header('Content-Type', 'application/xml');
});
