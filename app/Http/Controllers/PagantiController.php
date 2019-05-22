<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagantiController extends Controller
{
    public function getPaganti()
    {
      // $paganti= DB::select("
      // SELECT *
      // FROM paganti
      // ");
      $paganti = DB::table("paganti")->get();
      return view("paganti.index", ["paganti" => $paganti]);
    }

    public function getPagante($id)
    {
      $pagante = DB::select("
      SELECT *
      FROM paganti
      WHERE id = $id
      ");

      dd($pagante);
    }
}
