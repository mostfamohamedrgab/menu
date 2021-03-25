<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.brands.index',[
          'brands' => Brand::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
          "name" => "required|max:255",
          "background_color" => "required|max:255",
          "font_color" => "required|max:255",
          "phone" => "required|max:255",
          "whatsapp" => "nullable|max:255",
          "facebook" => "nullable|max:255",
          "instagram" => "nullable|max:255",
          'image_cover' => 'required|image',
        ],[],[
          "name" => "الاسم",
          "background_color" => "لون الخلفيه",
          "font_color" => "لون الخط",
          "phone" => "رقم الهاتف",
          "whatsapp" => "واتس اب",
          "facebook" => "فيس بوك",
          'image_cover' => 'صوره الخلفيه',
          "instagram" => "انستغرام",
        ]);

        $data['image_cover'] = uplode_img($request->image_cover);
        Brand::create($data);
        return back()->withSuccess('تم أنشاء البراند بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit( $brand)
    {
        $brand = Brand::findOrFail($brand);
        return view('admin.brands.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $brand)
    {
      $brand = Brand::findOrFail($brand);
      $data = $request->validate([
        "name" => "required|max:255",
        "background_color" => "required|max:255",
        "font_color" => "required|max:255",
        "phone" => "required|max:255",
        "whatsapp" => "nullable|max:255",
        "facebook" => "nullable|max:255",
        "instagram" => "nullable|max:255",
        'image_cover' => 'nullable|image',
      ],[],[
        "name" => "الاسم",
        "background_color" => "لون الخلفيه",
        "font_color" => "لون الخط",
        "phone" => "رقم الهاتف",
        "whatsapp" => "واتس اب",
        'image_cover' => 'صوره الخلفيه',
        "facebook" => "فيس بوك",
        "instagram" => "انستغرام",
      ]);

        // check if he want to change image_cover
        if($request->has('image_cover'))
        {
            $data['image_cover'] = uplode_img($request->image_cover);

        }else{
            $data['image_cover'] = $brand->image_cover;
        }

      $brand->update($data);
      return back()->withSuccess('تم تعديل بينات البراند بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy( $brand)
    {
        $brand = Brand::findOrFail($brand);
        delete_img($brand->image_cover);
        $brand->delete();
        return back()->withSuccess('تم الحذف بنجاح');
    }
}
