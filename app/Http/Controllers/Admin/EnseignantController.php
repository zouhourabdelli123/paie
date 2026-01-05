<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enseignant;

class EnseignantController extends Controller
{
    public function index()
    {
        $enseignants = Enseignant::get()
            ->where('actif', true);

        return view('admin.enseignants.index', compact('enseignants'));
    }


}
