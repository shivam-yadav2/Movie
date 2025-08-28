<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        //return $videos;
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading'       => 'required|string|max:255',
            'category'      => 'nullable|string|max:255',
            'embed_code'    => 'nullable|string|max:255',
            'url'           => 'required|url|max:255',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $video = new Video();
        $video->heading = $request->heading;
        $video->category = $request->category;
        $video->embed_code = $request->embed_code;
        $video->url = $request->url;

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
           $originalExtension = strtolower($image->getClientOriginalExtension());

            $manager = new ImageManager(new GdDriver());

            $imageName = time() . '.webp';
            $destinationPath = public_path('assets/images/videos');

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

            $imageName = 'assets/images/videos/' . $imageName;
        }

        $video->image = $imageName;
        // $video->save();

        return redirect()->route('videos.index')->with('success', 'Video created successfully.');
    }

    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'heading'       => 'required|string|max:255',
            'category'      => 'nullable|string|max:255',
            'embed_code'    => 'nullable|string|max:255',
            'url'           => 'required|url|max:255',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $video->heading = $request->heading;
        $svideo->category = $request->category;
        $svideo->embed_code = $request->embed_code;
        $svideo->url = $request->url;

        if ($request->hasFile('image')) {
            if ($svideo->image && file_exists(public_path($svideo->image))) unlink(public_path($svideo->image));

            $image = $request->file('image');
            $ext = strtolower($image->getClientOriginalExtension());
            $manager = new ImageManager(new GdDriver());
            $imageName = time() . '.webp';
            $destinationPath = public_path('assets/images/videos');

            if (!file_exists($destinationPath)) mkdir($destinationPath, 0755, true);

            if (in_array($ext, ['jpg','jpeg','png'])) {
                $img = $manager->read($image->getRealPath())->toWebp(80);
                $img->save($destinationPath . '/' . $imageName);
            } else {
                return redirect()->back()->withInput()->with('error', 'Only JPG, JPEG, PNG, or WEBP allowed.');
            }

            $video->image = 'assets/images/videos/' . $imageName;
        }

        $video->save();
        return redirect()->route('videos.index')->with('success', 'Video updated successfully.');
    }

    public function destroy(Video $video)
    {
        if ($video->image && file_exists(public_path($video->image))) unlink(public_path($video->image));
        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Video deleted successfully.');
    }
}
