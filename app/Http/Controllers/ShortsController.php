<?php

namespace App\Http\Controllers;

use App\Models\Short;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;

class ShortsController extends Controller
{
    public function index()
    {
        $shorts = Short::all();
        //return $shorts;
        return view('shorts.index', compact('shorts'));
    }

    public function create()
    {
        return view('shorts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading'   => 'required|string|max:255',
            'category'  => 'nullable|string|max:255',
            'url'       => 'required|url|max:255',
            'image'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $short = new Short();
        $short->heading = $request->heading;
        $short->category = $request->category;
        $short->url = $request->url;

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
           $originalExtension = strtolower($image->getClientOriginalExtension());

            $manager = new ImageManager(new GdDriver());

            $imageName = time() . '.webp';
            $destinationPath = public_path('assets/images/shorts');

            if (!file_exists($destinationPath)){
                mkdir($destinationPath, 0755, true);
            }

            if (in_array($originalExtension, ['jpg','jpeg','png'])) {
                $img = $manager->read($image->getRealPath())->toWebp(80);
                $img->save($destinationPath . '/' . $imageName);
            } else {
                return redirect()->back()
                ->withInput()
                ->with('error', 'Only JPG, JPEG, PNG, or WEBP allowed.');
            }

            $imageName = 'assets/images/shorts/' . $imageName;
        }

        $short->image = $imageName;
        $short->save();

        return redirect()->route('shorts.index')->with('success', 'Short created successfully.');
    }

    public function edit(Short $short)
    {
        return view('shorts.edit', compact('short'));
    }

    public function update(Request $request, Short $short)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'url' => 'required|url|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $short->heading = $request->heading;
        $short->category = $request->category;
        $short->url = $request->url;

        if ($request->hasFile('image')) {
            if ($short->image && file_exists(public_path($short->image))) unlink(public_path($short->image));

            $image = $request->file('image');
            $ext = strtolower($image->getClientOriginalExtension());
            $manager = new ImageManager(new GdDriver());
            $imageName = time() . '.webp';
            $destinationPath = public_path('assets/images/shorts');

            if (!file_exists($destinationPath)) mkdir($destinationPath, 0755, true);

            if (in_array($ext, ['jpg','jpeg','png'])) {
                $img = $manager->read($image->getRealPath())->toWebp(80);
                $img->save($destinationPath . '/' . $imageName);
            } else {
                return redirect()->back()->withInput()->with('error', 'Only JPG, JPEG, PNG, or WEBP allowed.');
            }

            $short->image = 'assets/images/shorts/' . $imageName;
        }

        $short->save();
        return redirect()->route('shorts.index')->with('success', 'Short updated successfully.');
    }

    public function destroy(Short $short)
    {
        if ($short->image && file_exists(public_path($short->image))) unlink(public_path($short->image));
        $short->delete();
        return redirect()->route('shorts.index')->with('success', 'Short deleted successfully.');
    }
}
