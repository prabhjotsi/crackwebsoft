<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\FactSection;
use Illuminate\Http\Request;

class FactSectionController extends Controller
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
        $factsection = FactSection::findOrFail($id);

        return view('admin.fact-section.edit', compact('factsection'));
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
          'description' => 'required|max:60000',
    		]);
        $requestData = $request->all();

        $factsection = FactSection::findOrFail($id);
        $factsection->update($requestData);

        return redirect()->back()->with('flash_message', 'Fact Section updated!');
    }

}
