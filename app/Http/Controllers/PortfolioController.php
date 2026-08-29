<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
{
    $portfolios = Portfolio::latest()->get();

    return view('portfolio.index', compact('portfolios'));
}
}
