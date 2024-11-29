<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mortgage;

class PublicController extends Controller
{
    public function index()
    {
        $mortgages = Mortgage::where('is_active', 1)->get();

        return view('public.index', compact('mortgages'));
    }

    public function show($id)
    {
        $mortgage = Mortgage::find($id);

        return view('public.show', compact('mortgage'));
    }
}
