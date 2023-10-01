<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Participant;
use Illuminate\Http\Request;
use App\Http\Models\User;
use App\Http\Requests\StoreParticipantRequest;
use App\Http\Requests\UpdateParticipantRequest;
use Facade\FlareClient\Http\Response;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Http\RedirectResponse;

class ParticipantController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        // $users = User::latest()->paginate(5);
        $participant = Participant::all();
        return view('View.participant', compact('participant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Form.participant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreParticipantRequest  $request
     */
    public function store(StoreParticipantRequest $request)
    {

        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'passport' => ['required', 'integer'],
        //     'gender' => ['required', 'boolean'],
        //     'group' => ['required', 'integer'],
        //     'start' => ['required', 'string'],
        //     'birth' => ['required', 'date'],
        //     'passport_exp' => ['required', 'date'],
        //     'image' => 'required|mimes:jpeg,jpg,png'
        // ]);

        $participant = Participant::updateOrCreate(
            ['id' => $request->id],
            [
                'name' => $request->name,
                'passport' => $request->passport,
                'gender' => $request->gender,
                'group_code' => $request->group_code,
                'start_from' => $request->start_from,
                'date_birth' => date('Y-m-d H:i:s', strtotime($request->date_birth)),
                'passport_exp' => date('Y-m-d H:i:s', strtotime($request->passport_exp)),
                'image' => $request->image
            ]
        );

        if ($request->hasFile('image')) {
            $profilePicture = $request->file('image');
            $path = $profilePicture->store('image', 'public');
            $participant->image = $path;
        }


        $participant->save();

        return response()->json(['success' => 'Data berhasil disimpan.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Http\Models\Participant;  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(Participant $participant)
    {
        $participant = Participant::all();
        return response()->json($participant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Models\Participant;  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateParticipantRequest  $request
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParticipantRequest $request, Participant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant, $id, Request $request)
    {
        $participant = DB::table("participants")->find($id)->delete();
        //    $participant->delete();
        //  redirect()
        //         ->route('participant_view')
        //         ->send([
        //             'success' => 'Participant has been deleted successfully'
        //         ]);

        // $participant = $request->where('id');
        // $data = $participant->db->get_where('participants');
        echo json_encode($participant);

        // var_dump($participant);
        // die;

        // if ($participant) {
        //     return redirect()
        //         ->route('participant_view')
        //         ->with([
        //             'success' => 'Participant has been deleted successfully'
        //         ]);
        // } else {
        //     return redirect()
        //         ->route('participant_view')
        //         ->with([
        //             'error' => 'Some problem has occurred, please try again'
        //         ]);
        // }
    }
}
