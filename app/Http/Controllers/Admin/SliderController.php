<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Models\Slider;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;
    use Illuminate\View\View;

    class SliderController extends Controller
    {
        public function index(): View
        {
            $sliders = Slider::latest()->paginate(10);
            return view('admin.sliders.index', compact('sliders'));
        }

        public function create(): View
        {
            return view('admin.sliders.create');
        }

        public function store(Request $request)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'subtitle' => 'nullable|string|max:255',
                'button_text' => 'nullable|string|max:255',
                'button_link' => 'nullable|url|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public/sliders', $imageName);
            $imageUrl = 'sliders/' . $imageName;

            Slider::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'button_text' => $request->button_text,
                'button_link' => $request->button_link,
                'image_url' => $imageUrl,
                'is_active' => $request->has('is_active'),
            ]);

            return redirect()->route('admin.sliders.index')->with('success', 'Slider created successfully.');
        }

        public function edit(Slider $slider): View
        {
            return view('admin.sliders.edit', compact('slider'));
        }

        public function update(Request $request, Slider $slider)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'subtitle' => 'nullable|string|max:255',
                'button_text' => 'nullable|string|max:255',
                'button_link' => 'nullable|url|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            $imageUrl = $slider->image_url;
            if ($request->hasFile('image')) {
                // Delete old image
                Storage::delete('public/' . $slider->image_url);

                // Store new image
                $imageName = time().'.'.$request->image->extension();
                $request->image->storeAs('public/sliders', $imageName);
                $imageUrl = 'sliders/' . $imageName;
            }

            $slider->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'button_text' => $request->button_text,
                'button_link' => $request->button_link,
                'image_url' => $imageUrl,
                'is_active' => $request->has('is_active'),
            ]);

            return redirect()->route('admin.sliders.index')->with('success', 'Slider updated successfully.');
        }

        public function destroy(Slider $slider)
        {
            Storage::delete('public/' . $slider->image_url);
            $slider->delete();
            return redirect()->route('admin.sliders.index')->with('success', 'Slider deleted successfully.');
        }
    }
    
