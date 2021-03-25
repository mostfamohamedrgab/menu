<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Payment;
use Illuminate\Http\Request;
use App\Brand;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.payments.index',[
          'payments' => Payment::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.payments.create',[
          'brands' => Brand::all()
        ]);
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
          "brand_id" => "required|exists:brands,id",
          "date" => "required",
          "note" => 'nullable',
        ],[],[
          "brand_id" => "البراند",
          "date" => "التاريخ",
          "note" => 'ملاحظات',
        ]);

        Payment::create($data);
        return back()->withSuccess('تم أضافه الدفعه بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit( $payment)
    {
      $payment = Payment::findOrFail($payment);
      return view('admin.payments.edit',[
        'payment' => $payment,
        'brands' => Brand::all()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $payment)
    {
      $payment = Payment::findOrFail($payment);
      $data = $request->validate([
        "brand_id" => "required|exists:brands,id",
        "date" => "required",
        "note" => 'nullable',
      ],[],[
        "brand_id" => "البراند",
        "date" => "التاريخ",
        "note" => 'ملاحظات',
      ]);

      $payment->update($data);
      return back()->withSuccess('تم تعديل الدفعه بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy( $payment)
    {
        $payment = Payment::findOrFail($payment);
        $payment->delete();
        return back()->withSuccess('تم الحذف بنجاح');
    }
}
