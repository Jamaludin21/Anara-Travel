<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Group;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use Illuminate\Http\Request;
use App\Http\Models\User;

class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $group = Group::all();
        return view('View.group', compact('group'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Form.group');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGroupRequest  $request
     */
    public function store(StoreGroupRequest $request)
    {
        $group = Group::updateOrCreate(
            ['id' => $request->id],
            [
                'group_code' => $request->group_code,
                'chairman_name' => $request->chairman_name,
                'regist_date' => date('Y-m-d H:i:s', strtotime($request->regist_date)),
                'phone_number' => $request->phone_number,
                'invoice_number' => $request->invoice_number,
                'participant_number' => $request->participant_number,
                // 'customer' => $request->customer,
                'start_from' => $request->start_from,
                'type_tour' => $request->type_tour,
                'date_departure' => date('Y-m-d H:i:s', strtotime($request->date_departure)),
            ]
        );


        $group->save();

        return response()->json(['success' => 'Data berhasil disimpan.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        $group = Group::all();
        return response()->json($group);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGroupRequest  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
