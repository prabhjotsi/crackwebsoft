<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MainFeaturesSection;
use Illuminate\Http\Request;

class MainFeaturesSectionController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $mainfeaturessection = MainFeaturesSection::findOrFail($id);

        return view('admin.main-features-section.edit', compact('mainfeaturessection'));
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
          'sub_title' => 'required|max:255',
          'years' => 'required|gte:0|max:255',
          'experince' => 'required|max:255',
    			'description' => 'required|max:60000',
          'image' => 'file|image|mimes:jpeg,png,jpg,gif,svg',
    		]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                                            ->store('uploads', 'public');
        }

        $mainfeaturessection = MainFeaturesSection::findOrFail($id);
        $mainfeaturessection->update($requestData);

        return redirect()->back()->with('flash_message', 'Main Features Section updated!');
    }
}
