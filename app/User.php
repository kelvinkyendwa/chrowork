<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //timesheets

    public function timesheets()
    {
        return $this->hasMany(Timesheet::class);
    }

    public function post_timesheet(Timesheet $timesheet)
    {
        $this->timesheets()->save($timesheet);
    }

    public function update_timesheet(Timesheet $timesheet)
    {
        $this->timesheets()->save($timesheet);
    }

    //overtime
    public function overtimes()
    {
        return $this->hasMany(Overtime::class);
    }

    public function post_overtime(Overtime $overtime)
    {
        $this->overtimes()->save($overtime);
    }

    public function update_overtime(Overtime $overtime)
    {
        $this->overtimes()->save($overtime);
    }
}
