<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'techs' => 'required|string|max:255',
            'github_link' => 'nullable|url',
            'live_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            try {
                $imageName = time() . '.' . $request->image->extension();
                $imagePath = storage_path('app/public/projects/' . $imageName);

                // Create image manager instance
                $manager = ImageManager::gd();

                // Process and resize the image
                $image = $manager->read($request->file('image'));

                // Resize to fit within 800x600 while maintaining aspect ratio
                $image->resize(800, 600, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                // Save the processed image
                $image->save($imagePath, quality: 90); // 90% quality

                $data['image'] = 'projects/' . $imageName;
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Image processing failed: ' . $e->getMessage());
            }
        }

        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'techs' => 'required|string|max:255',
            'github_link' => 'nullable|url',
            'live_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image && \Storage::exists('public/' . $project->image)) {
                \Storage::delete('public/' . $project->image);
            }

            try {
                $imageName = time() . '.' . $request->image->extension();
                $imagePath = storage_path('app/public/projects/' . $imageName);

                // Create image manager instance
                $manager = ImageManager::gd();

                // Process and resize the image
                $image = $manager->read($request->file('image'));

                // Resize to fit within 800x600 while maintaining aspect ratio
                $image->resize(800, 600, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                // Save the processed image
                $image->save($imagePath, quality: 90); // 90% quality

                $data['image'] = 'projects/' . $imageName;
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Image processing failed: ' . $e->getMessage());
            }
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // Delete image file if exists
        if ($project->image && \Storage::exists('public/' . $project->image)) {
            \Storage::delete('public/' . $project->image);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
