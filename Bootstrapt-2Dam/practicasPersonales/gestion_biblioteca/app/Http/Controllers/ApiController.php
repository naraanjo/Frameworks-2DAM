<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Books;

class ApiController extends Controller
{
    public function index(){
      $libros = Books::with('author')->get();
      return response()->json($libros);
    }
}
