<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Slider;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $sliders = Slider::where('title', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('start_date', 'LIKE', "%$keyword%")
                ->orWhere('end_date', 'LIKE', "%$keyword%")
                ->orWhere('show_dots', 'LIKE', "%$keyword%")
                ->orWhere('infinite', 'LIKE', "%$keyword%")
                ->orWhere('speed', 'LIKE', "%$keyword%")
                ->orWhere('slides_to_show', 'LIKE', "%$keyword%")
                ->orWhere('adaptive_height', 'LIKE', "%$keyword%")
                ->orWhere('fade', 'LIKE', "%$keyword%")
                ->orWhere('cssEase', 'LIKE', "%$keyword%")
                ->orWhere('slides_to_scroll', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $sliders = Slider::latest()->paginate($perPage);
        }

        return view('admin.sliders.index', compact('sliders'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'title' => 'required|max:100',
            'description' => 'max:500'
		]);
         
        $requestData = $request->all();
        
        Slider::create($requestData);

        return redirect('admin/sliders')->with('flash_message', 'Slider added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $slider = Slider::findOrFail($id);

        return view('admin.sliders.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);

        return view('admin.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'title' => 'required|max:100',
            'description' => 'max:500'
		]);
        $requestData = $request->all();
        
        $slider = Slider::findOrFail($id);
        $slider->update($requestData);

        return redirect('admin/sliders')->with('flash_message', 'Slider updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Slider::destroy($id);

        return redirect('admin/sliders')->with('flash_message', 'Slider deleted!');
    }
}
