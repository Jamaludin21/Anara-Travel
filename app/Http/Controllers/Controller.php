<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Models\Participant;
use App\Http\Models\Group;
use App\Http\Models\Payment;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $participant = Participant::all();
        $group = Group::all();
        $payment = Payment::all();
        return view('index', [
            'participants' => count($participant),
            'groups'       => count($group),
            'payments'     => count($payment)
        ]);
    }
}
