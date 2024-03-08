<?php

namespace App\Http\Controllers;

use App\Models\Bejegyzes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BejegyzesController extends Controller
{
    public function index()
    {
        return Bejegyzes::all();
    }

    public function show($id)
    {
        return Bejegyzes::find($id);
    }

    public function destroy($id)
    {
        Bejegyzes::find($id)->delete();
    }

    public function update(Request $request, $id)
    {
        $bejegyzes = Bejegyzes::find($id);
        $bejegyzes->tevekenyseg_id = $request->tevekenyseg_id;
        $bejegyzes->user_id = $request->user_id;
        $bejegyzes->osztaly_id = $request->osztaly_id;
        $bejegyzes->allapot = $request->allapot;
        $bejegyzes->save();
    }

    public function store(Request $request)
    {
        $bejegyzes = new Bejegyzes();
        $bejegyzes->tevekenyseg_id = $request->tevekenyseg_id;
        $bejegyzes->user_id = $request->user_id;
        $bejegyzes->osztaly_id = $request->osztaly_id;
        $bejegyzes->allapot = $request->allapot;
        $bejegyzes->save();
    }



    public function bejegyzesOsztalyonkent($osztaly_id)
    {
        return DB::table('bejegyzes as b')
            ->join('tevekenysegs as t', 'b.tevekenyseg_id', '=', 'p.tevekenyseg_id')
            ->where('b.osztaly_id', '=', $osztaly_id)
            ->select('b.id', 't.tevekenyseg_nev', 't.pontszam')
            ->get();
    }
}
