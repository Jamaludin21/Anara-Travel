<?php

namespace App\Http\Controllers;

use App\Http\Models\Payment;
use App\Http\Models\Group;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment = Payment::all();
        return view('View.payment', compact('payment'));
    }

    public function get_data()
    {
        $group = Group::all();
        return view('Form.payment', compact('group'));
        // return response()->json($group);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('Form.payment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentRequest $request)
    {
        // $Payment = Payment::updateOrCreate(
        //     ['id' => $request->id],
        //     [
        //         'group_code' => $request->group_code,
        //         'chairman_name' => $request->chairman_name,
        //         'regist_date' => date('Y-m-d H:i:s', strtotime($request->regist_date)),
        //         'phone_number' => $request->phone_number,
        //         'invoice_number' => $request->invoice_number,
        //         'participant_number' => $request->participant_number,
        //         // 'customer' => $request->customer,
        //         'start_from' => $request->start_from,
        //         'type_tour' => $request->type_tour,
        //         'date_departure' => date('Y-m-d H:i:s', strtotime($request->date_departure)),
        //     ]
        // );


        // $Payment->save();

        // return response()->json(['success' => 'Data berhasil disimpan.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return response()->json($payment);
    }

    // public function show_data(Group $group)
    // {
    //     $group = Group::all();
    //     return view('Form.payment', compact('group'));
    // }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
