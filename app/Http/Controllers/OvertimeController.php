<?php

namespace App\Http\Controllers;

use App\Overtime;
use App\Project;
use App\User;
use Illuminate\Http\Request;

class OvertimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $user = User::find(auth()->id());

        return view('overtime.index', compact('user'));
    }

    public function view_all()
    {
        $user = User::find(auth()->id());

        return view('overtime/view_all', compact('user'));
    }

    public function create()
    {
        $list = Project::get()->all();

        return view('overtime.create')->with('list', $list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate inputs
        $this->validate(request(), [
            'project_id' => 'required',
            'date' => 'required',
            'hours' => 'required',
            'description' => 'required',
        ]);

        //insert into database

        auth()->user()->post_overtime(
            new Overtime(request(['project_id', 'date', 'hours', 'description']))
        );

        return redirect('over/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function show(Overtime $overtime)
    {
        $user = User::find(auth()->id());

        return view('overtime.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function edit(Overtime $overtime)
    {
        $list = Project::get()->all();

        return view('overtime.edit', compact('overtime'))->with('list', $list);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Overtime $overtime)
    {
        $over = Overtime::find($id);

        //insert into database

        $over->project_id = $request->project_id;
        $over->user_id = auth()->user()->id;
        $over->date = $request->date;
        $over->hours = $request->hours;
        $over->description = $request->description;
        $over->save();

        return redirect('over/all')->with('message', 'Entry updated successfully');
        ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Overtime $overtime)
    {
        //
    }
}
