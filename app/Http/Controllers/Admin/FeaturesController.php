<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeaturesController extends Controller
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
            $features = Feature::where('title', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $features = Feature::latest()->paginate($perPage);
        }

        return view('admin.features.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.features.create');
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
          'title' => 'required|max:255',
          'image' => 'required|file|image|mimes:jpeg,png,jpg,gif,svg',
          'icon' => 'required|file|image|mimes:jpeg,png,jpg,gif,svg',
    		]);
        $requestData = $request->all();
        $requestData['image'] = $request->file('image')
                                       ->store('uploads', 'public');
        $requestData['icon'] = $request->file('icon')
                                       ->store('uploads', 'public');

        Feature::create($requestData);

        return redirect('admin/features')->with('flash_message', 'Feature added!');
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
        $feature = Feature::findOrFail($id);

        return view('admin.features.edit', compact('feature'));
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
          'title' => 'required|max:255',
          'image' => 'file|image|mimes:jpeg,png,jpg,gif,svg',
          'icon' => 'file|image|mimes:jpeg,png,jpg,gif,svg',
    		]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                                            ->store('uploads', 'public');
        }
        if ($request->hasFile('icon')) {
            $requestData['icon'] = $request->file('icon')
                                            ->store('uploads', 'public');
        }

        $feature = Feature::findOrFail($id);
        $feature->update($requestData);

        return redirect('admin/features')->with('flash_message', 'Feature updated!');
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
        Feature::destroy($id);

        return redirect('admin/features')->with('flash_message', 'Feature deleted!');
    }
}
