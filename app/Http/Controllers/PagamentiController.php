<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagamentiController extends Controller
{
    public function getPagamenti()
    {
      // dd("Hello World");
      $pagamenti = DB::select("
        SELECT *
        FROM pagamenti
        ORDER BY price DESC
      ");
      // dd($pagamenti);

      // CON ELOQUENT
      // $pagamenti = DB::table("pagamenti") -> get(); // Select * From pagamenti
      // dd($pagamenti);

      // $pagamenti = DB::table("pagamenti")
      //                   -> selectRaw("id, status, price") // or -> select("id", "status", "price")
      //                   -> where("status", "LIKE", "pending")
      //                   -> orderBy("price", "DESC")
      //                   -> get();


      return view("pagamenti.index", ["pagamenti" => $pagamenti]);
    }
    public function getPagamento($id)
    {
      // dd($id);
      $pagamento = DB::table("pagamenti")
                    ->where("id", "=", $id)
                    -> get();

      dd($pagamento);
    }

}
