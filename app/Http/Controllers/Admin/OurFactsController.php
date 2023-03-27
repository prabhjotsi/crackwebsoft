<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\OurFact;
use Illuminate\Http\Request;

class OurFactsController extends Controller
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
            $ourfacts = OurFact::where('title', 'LIKE', "%$keyword%")
                ->orWhere('number', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ourfacts = OurFact::latest()->paginate($perPage);
        }

        return view('admin.our-facts.index', compact('ourfacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.our-facts.create');
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
          'number' => 'required|max:255|gte:0',
    		]);
        $requestData = $request->all();
        $requestData['image'] = $request->file('image')
                                       ->store('uploads', 'public');

        OurFact::create($requestData);

        return redirect('admin/our-facts')->with('flash_message', 'Fact added!');
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
        $ourfact = OurFact::findOrFail($id);

        return view('admin.our-facts.edit', compact('ourfact'));
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
          'number' => 'required|max:255|gte:0',
    		]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                                            ->store('uploads', 'public');
        }

        $ourfact = OurFact::findOrFail($id);
        $ourfact->update($requestData);

        return redirect('admin/our-facts')->with('flash_message', 'Fact updated!');
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
        OurFact::destroy($id);

        return redirect('admin/our-facts')->with('flash_message', 'Fact deleted!');
    }
}
