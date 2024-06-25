<?php

namespace App\Http\Controllers;
use App\Models\Recreation;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class RecreationController extends Controller
{
    public function index()
    {
        $recreations = Recreation::all();
        return view('admin.recreations.index', compact('recreations'));
    }

    public function create()
    {
        return view('admin.recreations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'phone' => 'required|string|max:15',
            'image' => 'nullable|image|max:2048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Recreation::create([
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'date' => $request->date,
            'phone' => $request->phone,
            'image' => $imagePath
        ]);

        return redirect()->route('recreations.index')->with('success', 'Recreation created successfully.');
    }

    public function show($id)
    {
        $recreation = Recreation::findOrFail($id);
        return view('admin.recreations.show', compact('recreation'));
    }

    public function edit($id)
    {
        $recreation = Recreation::findOrFail($id);
        return view('admin.recreations.edit', compact('recreation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'phone' => 'required|string|max:15',
            'image' => 'nullable|image|max:2048'
        ]);

        $recreation = Recreation::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($recreation->image) {
                Storage::disk('public')->delete($recreation->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $recreation->image;
        }

        $recreation->update([
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'date' => $request->date,
            'phone' => $request->phone,
            'image' => $imagePath
        ]);

        return redirect()->route('recreations.index')->with('success', 'Recreation updated successfully.');
    }

    public function destroy($id)
    {
        $recreation = Recreation::findOrFail($id);
        if ($recreation->image) {
            Storage::disk('public')->delete($recreation->image);
        }
        $recreation->delete();
        return redirect()->route('recreations.index')->with('success', 'Recreation deleted successfully.');
    }
}
