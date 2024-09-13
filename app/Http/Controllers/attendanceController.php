<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class attendanceController extends Controller
{
    public function store(request $request)
    {

        Attendance::create([
            "name"=>$request->input("name"),
            "date"=>$request->input("date"),
            "time_in"=>$request->input("time_in"),
            "description"=>$request->input("description"),
        ]);
        return back();
    }
    public function edit($id)
    {
        $attendance = Attendance::find($id);
        return view('edit', compact('attendance'));
    }
    public function update(Request $request, $id)
    {
        $attendance = Attendance::find($id);
        $attendance->update([
            "name" => $request->input("name"),
            "date" => $request->input("date"),
            "time_in" => $request->input("time_in"),
            "description" => $request->input("description"),
        ]);

        return back();
    }
    public function destroy($id)
    {
        $attendance = Attendance::find($id);
        $attendance->delete();

        return back();
    }

}
