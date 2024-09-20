<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     // Method to show the admin dashboard
     public function dashboard()
     {
         // Return the 'admin.dashboard' view
         return view('admin.dashboard');
     }
}

?>