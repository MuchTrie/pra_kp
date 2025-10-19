<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Dashboard untuk user biasa
     */
    public function userDashboard(): View
    {
        return view('dashboard.user.index', [
            'title' => 'User Dashboard',
            'user' => auth()->user()
        ]);
    }

    /**
     * Dashboard untuk admin
     */
    public function adminDashboard(): View
    {
        return view('dashboard.admin.index', [
            'title' => 'Admin Dashboard',
            'user' => auth()->user()
        ]);
    }

    /**
     * Dashboard untuk super admin
     */
    public function superAdminDashboard(): View
    {
        return view('dashboard.super-admin.index', [
            'title' => 'Super Admin Dashboard',
            'user' => auth()->user()
        ]);
    }
}
