<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Log;
use Carbon\Carbon;
class LogController extends Controller
{
    public function index()
    {
        $logs = Log::with('user')->latest()->paginate(10);
        return view('admin.logs', compact('logs'));
    }

    public function stat()
    {
        // ดึงข้อมูล Log ตามประเภท (action) และนับจำนวนครั้งที่เกิดขึ้น
        $logStats = Log::selectRaw('action, COUNT(*) as count')
            ->groupBy('action')
            ->orderByDesc('count')
            ->get();

        // ดึงข้อมูล Log ในช่วง 7 วันที่ผ่านมา
        $logTrends = Log::selectRaw("DATE(created_at) as date, action, COUNT(*) as count")
            ->where('created_at', '>=', Carbon::now()->subDays(7))
            ->groupByRaw('DATE(created_at), action')
            ->orderByRaw('DATE(created_at) ASC')
            ->get();

        return view('admin.stat', compact('logStats', 'logTrends'));
    }
}