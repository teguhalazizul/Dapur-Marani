<?php

namespace App\Http\Controllers;

use App\Models\FrozenFood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrozenFoodController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $frozenFoods = FrozenFood::all();
        return view('frozen_foods.index', compact('frozenFoods'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('frozen_foods.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        FrozenFood::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('frozen_foods.index')->with('success', 'Frozen food created successfully.');
    }

    // Display the specified resource
    public function show(FrozenFood $frozenFood)
    {
        return view('frozen_foods.show', compact('frozenFood'));
    }

    // Show the form for editing the specified resource
    public function edit(FrozenFood $frozenFood)
    {
        return view('frozen_foods.edit', compact('frozenFood'));
    }

    // Update the specified resource in storage
    public function update(Request $request, FrozenFood $frozenFood)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($frozenFood->image) {
                Storage::disk('public')->delete($frozenFood->image);
            }

            $frozenFood->image = $request->file('image')->store('images', 'public');
        }

        $frozenFood->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $frozenFood->image,
        ]);

        return redirect()->route('frozen_foods.index')->with('success', 'Frozen food updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy(FrozenFood $frozenFood)
    {
        if ($frozenFood->image) {
            Storage::disk('public')->delete($frozenFood->image);
        }

        $frozenFood->delete();

        return redirect()->route('frozen_foods.index')->with('success', 'Frozen food deleted successfully.');
    }
}