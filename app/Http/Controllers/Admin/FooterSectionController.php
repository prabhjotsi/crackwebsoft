<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\FooterSection;
use Illuminate\Http\Request;

class FooterSectionController extends Controller
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
      $footer = FooterSection::findOrFail($id);

      return view('admin.footer.edit', compact('footer'));
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
        'logo' => 'file|image|mimes:jpeg,png,jpg,gif,svg',
        'logo_name' => 'required|max:255',
        'email' => 'required|max:255|email',
        'mail_address' => 'required|max:255',
        'phone' => 'required|max:255',
        'address' => 'required|max:255',
        'facebook' => 'nullable|url|max:255',
        'twitter' => 'nullable|url|max:255',
        'instagram' => 'nullable|url|max:255',
        'google_plus' => 'nullable|url|max:255',
        'Linkedin' => 'nullable|url|max:255',
      ]);
      $requestData = $request->all();
      if ($request->hasFile('logo')) {
          $requestData['logo'] = $request->file('logo')
                                          ->store('uploads', 'public');
      }

      $footer = FooterSection::findOrFail($id);
      $footer->update($requestData);

      return redirect()->back()->with('flash_message', 'Footer Section updated!');
  }
}
