<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\FeatureSection;
use Illuminate\Http\Request;

class FeatureSectionController extends Controller
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
      $featuresection = FeatureSection::findOrFail($id);

      return view('admin.feature-section.edit', compact('featuresection'));
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

      $featuresection = FeatureSection::findOrFail($id);
      $featuresection->update($requestData);

      return redirect()->back()->with('flash_message', 'Feature updated!');
  }
}
