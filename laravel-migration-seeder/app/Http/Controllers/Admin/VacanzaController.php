<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacanza;


class VacanzaController extends Controller
{
    public function index()
    {
        $vacanze = Vacanza::all();

        return view('admin.index', compact('vacanze'));
    }
}
