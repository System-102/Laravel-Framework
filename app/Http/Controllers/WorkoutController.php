<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workout;

class WorkoutController extends Controller
{
    // Show all workouts (for user)
    public function index()
    {
        $workouts = Workout::all();
        return view('workouts.index', compact('workouts'));
    }

    // Show single workout details
    public function show($id)
    {
        $workout = Workout::findOrFail($id);
        return view('workouts.show', compact('workout'));
    }

    // Start Workout (page with video/gif/steps)
    public function start($id)
    {
        $workout = Workout::findOrFail($id);
        return view('workouts.start', compact('workout'));
    }

    // Admin - List Workouts
    public function adminIndex()
    {
        $workouts = Workout::latest()->paginate(10);
        return view('admin.workouts.index', compact('workouts'));
    }

    // Admin - Create Form
    public function create()
    {
        return view('admin.workouts.create');
    }

    // Admin - Store Workout
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'color' => 'required|string',
            'image' => 'nullable|image',
            'gif_image' => 'nullable|image|mimes:gif',
            'video_url' => 'nullable|string',
            'steps' => 'nullable|string',
            'benefits' => 'nullable|string',
            'duration' => 'nullable|string',
            'level' => 'nullable|string',
            'target_muscles' => 'nullable|string',
        ]);

        $imageName = null;
        $gifName = null;

        if ($request->hasFile('image')) {
            $imageName = time() . '_img.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        if ($request->hasFile('gif_image')) {
            $gifName = time() . '_gif.' . $request->gif_image->extension();
            $request->gif_image->move(public_path('images'), $gifName);
        }

        Workout::create([
            'title' => $request->title,
            'description' => $request->description,
            'color' => $request->color,
            'image' => $imageName,
            'gif_image' => $gifName,
            'video_url' => $request->video_url,
            'steps' => $request->steps,
            'benefits' => $request->benefits,
            'duration' => $request->duration,
            'level' => $request->level,
            'target_muscles' => $request->target_muscles,
            'extra_info' => $request->extra_info,
        ]);

        return redirect()->route('admin.workouts.index')->with('success', 'Workout created successfully!');
    }

    // Admin - Edit Form
    public function edit($id)
    {
        $workout = Workout::findOrFail($id);
        return view('admin.workouts.edit', compact('workout'));
    }

    // Admin - Update Workout
    public function update(Request $request, $id)
    {
        $workout = Workout::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'color' => 'required|string',
            'image' => 'nullable|image',
            'gif_image' => 'nullable|image|mimes:gif',
            'video_url' => 'nullable|string',
            'steps' => 'nullable|string',
            'benefits' => 'nullable|string',
            'duration' => 'nullable|string',
            'level' => 'nullable|string',
            'target_muscles' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '_img.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $workout->image = $imageName;
        }

        if ($request->hasFile('gif_image')) {
            $gifName = time() . '_gif.' . $request->gif_image->extension();
            $request->gif_image->move(public_path('images'), $gifName);
            $workout->gif_image = $gifName;
        }

        $workout->update([
            'title' => $request->title,
            'description' => $request->description,
            'color' => $request->color,
            'video_url' => $request->video_url,
            'steps' => $request->steps,
            'benefits' => $request->benefits,
            'duration' => $request->duration,
            'level' => $request->level,
            'target_muscles' => $request->target_muscles,
            'extra_info' => $request->extra_info,
        ]);

        return redirect()->route('admin.workouts.index')->with('success', 'Workout updated successfully!');
    }

    // Admin - Delete Workout
    public function destroy($id)
    {
        $workout = Workout::findOrFail($id);
        $workout->delete();
        return redirect()->route('admin.workouts.index')->with('success', 'Workout deleted successfully!');
    }
}
