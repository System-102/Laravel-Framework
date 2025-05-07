<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Workout;
use Illuminate\Support\Str;

class WorkoutAdminController extends Controller
{
    // Display all workouts
    public function index()
    {
        $workouts = Workout::latest()->get();
        return view('admin.workouts.index', compact('workouts'));
    }

    // Show the form to create a workout
    public function create()
    {
        return view('admin.workouts.create');
    }

    // Store a new workout
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'color' => 'required',
            'image' => 'required|image',
            'gif_image' => 'nullable|image|mimes:gif',
            'video_url' => 'nullable|url',
        ]);

        // Upload workout image
        $imageName = time() . '_main.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        // Upload GIF image if exists
        $gifName = null;
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
        ]);

        return redirect()->route('admin.workouts.index')->with('success', 'Workout created successfully.');
    }

    // Show the form to edit a workout
    public function edit($id)
    {
        $workout = Workout::findOrFail($id);
        return view('admin.workouts.edit', compact('workout'));
    }

    // Update an existing workout
    public function update(Request $request, $id)
    {
        $workout = Workout::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'color' => 'required',
            'image' => 'nullable|image',
            'gif_image' => 'nullable|image|mimes:gif',
            'video_url' => 'nullable|url',
        ]);

        // Upload new image if provided
        if ($request->hasFile('image')) {
            $imageName = time() . '_main.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $workout->image = $imageName;
        }

        // Upload new gif if provided
        if ($request->hasFile('gif_image')) {
            $gifName = time() . '_gif.' . $request->gif_image->extension();
            $request->gif_image->move(public_path('images'), $gifName);
            $workout->gif_image = $gifName;
        }

        $workout->title = $request->title;
        $workout->description = $request->description;
        $workout->color = $request->color;
        $workout->video_url = $request->video_url;
        $workout->steps = $request->steps;
        $workout->benefits = $request->benefits;
        $workout->duration = $request->duration;
        $workout->level = $request->level;
        $workout->target_muscles = $request->target_muscles;

        $workout->save();

        return redirect()->route('admin.workouts.index')->with('success', 'Workout updated successfully.');
    }

    // Delete a workout
    public function destroy($id)
    {
        $workout = Workout::findOrFail($id);

        // Optionally delete images from public path if needed

        $workout->delete();

        return redirect()->route('admin.workouts.index')->with('success', 'Workout deleted successfully.');
    }
}
