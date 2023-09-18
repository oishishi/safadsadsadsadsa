<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\value;
use App\Models\Status;
use App\Models\Times;

class ChartController extends Controller
{
    public function index()
    {
        $status = Status::first();
        $data = value::all(); // ดึงข้อมูลจากฐานข้อมูล
        $time = Times::all();
        return view('index', compact('status', 'data', 'time'));
    }

    public function toggleStatus(Request $request)

    {
        $status = Status::first();

        $status->status = $request->status;

        $status->save();
        return redirect()->route('index');

    }

    public function store(Request $request)
{
    $request->validate([
        'start_time' => 'required|date_format:H:i',
        'end_time' => 'required|date_format:H:i|after:start_time',
    ]);

    $time = Times::first();
    $time->start_time = $request->input('start_time');
    $time->end_time = $request->input('end_time');
    $time->save();
    return redirect()->route('index');
}
    public function statusUpdate(){
        $update = Status::where('status','>', now()->subseconds(5))->pluck('id');
        return response(compact('updated'));
    }
}

    
