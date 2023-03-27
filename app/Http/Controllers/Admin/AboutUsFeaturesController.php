<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\AboutUsFeature;
use Illuminate\Http\Request;

class AboutUsFeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $aboutusfeatures = AboutUsFeature::where('title', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $aboutusfeatures = AboutUsFeature::latest()->paginate($perPage);
        }

        return view('admin.about-us-features.index', compact('aboutusfeatures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.about-us-features.create');
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
    			'title' => 'required|max:255'
    		]);
        $requestData = $request->all();

        AboutUsFeature::create($requestData);

        return redirect('admin/about-us-features')->with('flash_message', 'About Us Feature added!');
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
      abort(404);
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
        $aboutusfeature = AboutUsFeature::findOrFail($id);

        return view('admin.about-us-features.edit', compact('aboutusfeature'));
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
    			'title' => 'required|max:255'
    		]);
        $requestData = $request->all();

        $aboutusfeature = AboutUsFeature::findOrFail($id);
        $aboutusfeature->update($requestData);

        return redirect('admin/about-us-features')->with('flash_message', 'About Us Feature updated!');
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
        AboutUsFeature::destroy($id);

        return redirect('admin/about-us-features')->with('flash_message', 'About Us Feature deleted!');
    }
}
