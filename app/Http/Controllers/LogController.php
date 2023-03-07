<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    public function index()
    {
        $logs = Log::get();
        return view('logs.index', compact('logs'));
    }

    public function get_logs() {
        $user = Auth::user();
        $this->authorize('index', Log::class);
        $logs = DB::table('logs')->orderBy('id')->limit(10000)->get();
        return $logs;
    }
}
