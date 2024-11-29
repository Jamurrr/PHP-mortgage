<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mortgage;


class MortgageCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mortgages = Mortgage::all(); // Можно добавить пагинацию ->paginate(10)
        return view('admin.index', compact('mortgages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'percent' => 'required|integer|max:40',
            'min_first_payment' => 'required|integer|max:98',
            'max_price' => 'required|numeric',
            'min_price' => 'required|numeric',
            'min_term' => 'required|integer',
            'max_term' => 'required|integer',
            'description' => 'nullable|string',
        ]);

        $validated['is_active'] = $request->has('is_active') ? 1 : 0;

        Mortgage::create($validated);

        return redirect()->route('mortgages.index')->with('success', 'Ипотека успешно создана.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mortgage = Mortgage::find($id);

        return view('admin.show', compact('mortgage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mortgage = Mortgage::find($id);

        return view('admin.edit', compact('mortgage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mortgage = Mortgage::find($id);

        $validated = $request->validate([
            'title' => 'required|string',
            'percent' => 'required|integer|max:40',
            'min_first_payment' => 'required|integer|max:98',
            'max_price' => 'required|numeric',
            'min_price' => 'required|numeric',
            'min_term' => 'required|integer',
            'max_term' => 'required|integer',
            'description' => 'nullable|string',
        ]);
        $validated['is_active'] = $request->has('is_active') ? 1 : 0;

        $mortgage->update($validated);

        return redirect()->route('mortgages.index')->with('success', 'Ипотека успешно обновлена.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mortgage = Mortgage::find($id);
        $mortgage->delete();

        return redirect()->route('mortgages.index')->with('success', 'Ипотека успешно удалена.');
    }
}
