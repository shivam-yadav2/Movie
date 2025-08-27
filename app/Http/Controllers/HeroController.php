<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager; // Ensure you have Intervention Image installed
use Intervention\Image\Drivers\Gd\Driver as GdDriver; // Import GD driver


class HeroController extends Controller
{
   // Display all hero slides
    public function index()
    {
        $heroes = Hero::all();
        return view('hero.index', compact('heroes'));
    }

    // Show create form
    public function create()
    {
        return view('hero.create');
    }

    // Store new hero slide
    public function store(Request $request)
    {
        $request->validate([
            'heading'       => 'required|string|max:255',
            'subheading'    => 'nullable|string|max:255',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $hero = new Hero();
        $hero->heading = $request->heading;
        $hero->subheading = $request->subheading;

        $imageName= null;
        if ($request->hasFile('image')) {
            // $file = $request->file('image');

            // $filename = time() . '.webp';
            // $relativePath = 'assets/images/hero/' . $filename;

            // $directory = public_path('assets/images/hero');
            // if (!file_exists($directory)) {
            //     mkdir($directory, 0777, true);
            // }

            // // Convert image to WebP using ImageManager
            // $this->imageManager
            //     ->make($file)
            //     ->encode('webp', 90)
            //     ->save(public_path($relativePath));

            // $hero->image = $relativePath;
             // Process the uploaded file
            $image = $request->file('image');
            $originalExtension = strtolower($image->getClientOriginalExtension());

            $manager = new ImageManager(new GdDriver());

            // Assign filename properly
            $imageName = time() . '.webp'; 
            $destinationPath = public_path('assets/images/hero');

            // Create directory if it doesn't exist
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
            // Convert and save the image
            if(in_array($originalExtension, ['jpg', 'jpeg', 'png']))
            {
                // Convert image to webp format
                $img = $manager->read($image->getRealPath())->toWebp(80);
                $img->save($destinationPath . '/' . $imageName);
            }
            else 
            {
                return redirect()->back()
                ->withInput() // keep old input
                 ->with('error', 'Only JPG, JPEG, PNG, or WEBP formats allowed.');
            }

            // Save relative path in DB
            $imageName = 'assets/images/hero/' . $imageName;
         }

          // ⚡ Fix: assign image path or null before saving
        $hero->image = $imageName;
    
        $hero->save();

        return redirect()->route('heroes.index')->with('success', 'Hero created successfully.');
    }

    // Show edit form
    public function edit(Hero $hero)
    {
        return view('hero.edit', compact('hero'));
    }

    // Update hero slide
    public function update(Request $request, Hero $hero)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'subheading' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $hero->heading = $request->heading;
        $hero->subheading = $request->subheading;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($hero->image && file_exists(public_path($hero->image))) {
                unlink(public_path($hero->image));
            }

            $file = $request->file('image');
            $filename = time() . '.webp';
            $relativePath = 'assets/images/hero/' . $filename;

            $directory = public_path('assets/images/hero');
            if (!file_exists($directory)) {
                mkdir($directory, 0777, true);
            }

            $this->imageManager
                ->make($file)
                ->encode('webp', 90)
                ->save(public_path($relativePath));

            $hero->image = $relativePath;
        }

        $hero->save();

        return redirect()->route('heroes.index')->with('success', 'Hero updated successfully.');
    }

    // Delete hero slide
    public function destroy(Hero $hero)
    {
        if ($hero->image && file_exists(public_path($hero->image))) {
            unlink(public_path($hero->image));
        }

        $hero->delete();

        return redirect()->route('heroes.index')->with('success', 'Hero deleted successfully.');
    }
}

?>
