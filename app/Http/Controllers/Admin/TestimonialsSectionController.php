<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\TestimonialsSection;
use Illuminate\Http\Request;

class TestimonialsSectionController extends Controller
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
        $testsection = TestimonialsSection::findOrFail($id);

        return view('admin.testimonials-section.edit', compact('testsection'));
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

        $testsection = TestimonialsSection::findOrFail($id);
        $testsection->update($requestData);

        return redirect()->back()->with('flash_message', 'Testimonials Section updated!');
    }
}
