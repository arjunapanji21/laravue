<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $master = [
            'title' => 'Dashboard'
        ];
        return inertia()->render('admin/dashboard', compact('master'));
    }
    public function article()
    {
        $master = [
            'title' => 'Article'
        ];
        return inertia()->render('admin/article', compact('master'));
    }
}
