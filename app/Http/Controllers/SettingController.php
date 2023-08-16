<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        $setting = Setting::first();
        return view('admin.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingRequest $request)
    {
        //dd($request->all());
        $setting = Setting::find(1);
        $setting->update($request->all());

        if($request->has('logo')){
            $image = $request->logo;
            $image_new_name = time().".".$image->getClientOriginalExtension();
            $image->move('storage/setting', $image_new_name);
            $setting->logo = 'storage/setting/' . $image_new_name;
            $setting->save();
        }

        Session::flash('success', 'Session information updated Successfully');
        return redirect()->back();

    }


}
