<?php

namespace App\Http\Controllers;

use App\Timesheet;
use App\User;
use App\Project;
use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->id());

        return view('time.index', compact('user'));
    }

    public function view_all()
    {
        $user = User::find(auth()->id());

        return view('time/view_all', compact('user'));
    }

    public function create()
    {
        $list = Project::get()->all();

        return view('time.create')->with('list', $list);
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

        auth()->user()->post_timesheet(
            new Timesheet(request(['project_id', 'date', 'hours', 'description']))
        );

        return redirect('time/all')->with('message', 'You have successfully applied');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Timesheet  $timesheets
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find(auth()->id());
        $time = Timesheet::find($id);

        return view('time/show', compact('time'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Timesheet  $timesheets
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = Project::get()->all();
        $time = Timesheet::find($id);

        return view('time/edit', compact('time', 'list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Timesheet  $timesheets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $time = Timesheet::find($id);

        //insert into database

        $time->project_id = $request->project_id;
        $time->user_id = auth()->user()->id;
        $time->date = $request->date;
        $time->hours = $request->hours;
        $time->description = $request->description;
        $time->save();

        return redirect('time/all')->with('message', 'Entry updated successfully');
        ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Timesheet  $timesheets
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $time = Timesheet::find($id);

        $time->delete();

        return redirect('time/all')->with('message', 'Timesheet Deleted successfully');
    }
}
