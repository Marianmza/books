<?php



namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class APIBookController extends Controller
{
    public function index()
    {
      $query =  DB::select('SELECT * FROM `books` WHERE 1');
        return $query;
    }
}
