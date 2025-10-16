<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Telpas;
use App\Models\Kategorijas;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class DataController extends Controller
{
    
 public function showalldata(){

$data = new Data();

//dd($data->all());

return view('alldata', ['data'=> $data->orderBy('id', 'asc')->get() ]);
}

public function showalltelpas()
{

    $telpas = DB::table('Telpas')->orderBy('id', 'asc')->paginate(3);

 
    return view('alldata_telpas', ['telpas' => $telpas]);
}

public function delete($id){

   Data::find($id)->delete();
  return redirect()->to('/data/alldata')->with('success', 'Ieraksts tika dzests');

}

public function deletetelpas($id){
    
    Telpas::find($id)->delete();
   return redirect()->to('/data/alldata_telpas')->with('success', 'Ieraksts tika dzests');
 }  


public function details($id)
{
    
 $dati = new Data;

return view('details',['data1'=> $dati->find($id)]);


 }  

 public function detailstelpas($id)
{
    
 $dati = new Telpas;

return view('detailstelpas',['data2'=> $dati->find($id)]);


}  

public function createTelpas()
{
  return view('createtelpas');
}

public function storeTelpas(Request $request)
{
  // VALIDATION
  $validated = $request->validate([
    'Stavs' => 'nullable|integer',
    'Korpuss' => 'nullable|string|max:1',
    'Platiba' => 'nullable|numeric',
    'Statuss' => 'required|in:Briva,Aiznemta,Remontdarbi',
  ]);

  // INSERT NEW TELPAS
  DB::table('Telpas')->insert([
    'Stavs' => $validated['Stavs'] ?? null,
    'Korpuss' => $validated['Korpuss'] ?? null,
    'Platiba' => $validated['Platiba'] ?? null,
    'Statuss' => $validated['Statuss'],
  ]);

  return redirect()->to('/data/alldata_telpas')->with('success', 'Telpa veiksmīgi pievienota');
}
//EDIT TELPAS
public function edittelpas($id)
{
    $et = DB::table('Telpas')->where('id', $id)->orWhere('ID', $id)->first();
 
 
    return view('edittelpas', compact('et'));

}

public function updatetelpas(Request $request, $id)
{
    $validated = $request->validate([
        'Stavs'    => 'nullable|integer',
        'Korpuss'  => 'nullable|string|size:1',
        'Platiba'  => 'nullable|numeric|min:0',
        'Statuss'  => 'nullable|in:Briva,Aiznemta,Remontdarbi',
    ]);

    $updated = DB::table('Telpas')
        ->where('id', $id)
        ->update([
            'Stavs'    => $validated['Stavs'] ?? null,
            'Korpuss'  => $validated['Korpuss'] ?? null,
            'Platiba'  => $validated['Platiba'] ?? null,
            'Statuss'  => $validated['Statuss'] ?? null,
        ]);

   return redirect('/data/alldata_telpas')->with(
    'success',
    $updated ? 'Telpas dati veiksmīgi atjaunināti!' : 'Nav veiktas izmaiņas.'
);
}

//KATEGORIJAS TABULA
public function showallkategorijas()
{

    $kategorijas = DB::table('Kategorijas')->orderBy('id', 'asc')->paginate(5);

 
    return view('alldata_kategorijas', ['kategorijas' => $kategorijas]);
}

public function detailskategorijas($id)
{
    
$kategorijas = new Kategorijas;

return view('detailskategorijas',['data3'=> $kategorijas->find($id)]);


}



}