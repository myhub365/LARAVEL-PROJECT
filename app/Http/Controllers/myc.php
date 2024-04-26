<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mym;
class myc extends Controller
{
    //

function insert(request $req){






    $pimg=$req->file("pimg")->getClientOriginalName();

    $req->pimg->move(public_path("Product"),$pimg);

    $pname= $req->get("pname");

    $pprice=$req->get("pprice");


$sql=new mym();



$sql->pimg=$pimg;
$sql->pname=$pname;
$sql->pprice=$pprice;


$sql->save();;

return redirect('insert');




}

function show(){

$sql=mym::all();
return view('show',['data'=>$sql]);


}

function delete($id){
$sql=mym::find($id);
$sql->delete();
return redirect('s');
}

function upshow($id){
    $sql=mym::find($id);
    return view('update',['row'=>$sql]);
}

function update(request $req){

    $sql=mym::find($req->id);






    $pimg=$req->file("pimg")->getClientOriginalName();
    $req->pimg->move(public_path('Product'),$pimg);


    $sql->pimg=$req->pimg->getClientOriginalName();







    $sql->pname=$req->pname;
    $sql->pprice=$req->pprice;

    $sql->save();
    return redirect('s');
}














function wshow(){
$sql=mym::all();

return view('website',['data'=>$sql]);

}


function zshow($id){
    $sql=mym::find($id);
    return view('zoom',['row'=>$sql]);
}



}
