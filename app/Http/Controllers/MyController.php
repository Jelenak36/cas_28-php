<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $proizvodi=[
         ['id'=>1, 'ime'=>'tastaura', 'opis'=>'odlicn tastatura'],
         ['id'=>2, 'ime'=>'mis', 'opis'=>'Precizan mis'],
         ['id'=>3, 'ime'=>'monitor', 'opis'=>'Monitor sa dobrim kucistem'],
         ['id'=>4, 'ime'=>'kuciste', 'opis'=>'Dobro kuciste'],
         ['id'=>5, 'ime'=>'graficka kartica', 'opis'=>'Grafika'],
    ];
    public function saberi($broj1, $broj2 = 0){
    $zbir = $broj1 + $broj2;
    //return "<h1>Zbir brojeva $broj1 i $broj2  je $zbir</h1>";
    return view('rezultat', 
    [
        'b1' => $broj1,
        'b2' => $broj2,
        'z' => $zbir
    ]
    );
}

     public function sviProizvodi($mode, $show) {
    $proizvodi =[
        ' tastatura',
        'mis',
        'Monitor',
        'kuciste',
        'graficka kartica'

    ];
    return view(
        'proizvodi',
        [
            'mode' => $mode,
            'show' => $show,
            'proizvodi' =>$this->proizvodi,
        ]
        );
}
  public function proizvod($id)
  {
  
       foreach($this->proizvodi as $proizvod){
           foreach ($proizvod as $key => $value){
               if ($key == 'id' && $value == $id){
                   $nadjenproizvod = $proizvod;
                   break;
               }
           }
       }

       // dd($nadjeniproizvod);


      return view( 
       'proizvod',
       [
           'proizvod' =>$nadjenproizvod
       ]
    );
}

}
