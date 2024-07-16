<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Producto;

use App\Models\Proveedor;





class AdminController extends Controller
{
    //
    public function view_category(){
        return view('admin.category');
    }

    public function add_category(Request $request){

        $category=new Category;

        $category->nombrecategoria= $request->cnombre;
        $category->descripcion= $request->cdescripcion;
        $category->estado= $request->cestado;
        $category->save();

        // para la alerta
        toastr()->timeOut(5000)->success('Categoria creada');

        return redirect()->back();
    }

    public function tcategory(){

        $data=Category::all();
        return view('admin.ctable',compact('data'));

    }

    public function cdelete($id){

        $data= Category::find($id);
        $data->delete();


        // para la alerta
        toastr()->timeOut(5000)->error('Categoria Eliminada');

        return redirect()->back();
    }

    public function cedit($id){

       $data=Category::find($id);

        return view('admin.cedit',compact('data'));
        //return view('admin.cedit');
    }

    public function update_category(Request $request,$id){

        $data=Category::find($id);
        $data->nombrecategoria=$request->cnombre;
        $data->descripcion=$request->cdescripcion;
        $data->estado=$request->cestado;

        $data->save();

        return redirect('/tcategory');
    }

    // proveedor

    public function add_proveedor(){

        return view('admin.add_proveedor');

    }

    public function tproveedor(){
        $data_proveedor=Proveedor::all();
        return view('admin.tproveedor',compact('data_proveedor'));
    }

    public function insert_proveedor(Request $request){

        $proveedor=new Proveedor;

        $proveedor->razonsocial=$request->prs;
        $proveedor->representante=$request->pr;
        $proveedor->ruc=$request->pruc;
        $proveedor->telefono=$request->ptlf;
        $proveedor->direccion=$request->pdir;
        $proveedor->departamento=$request->pdep;
        $proveedor->distrito=$request->pdis;
        $proveedor->provincia=$request->pprov;
        $proveedor->correo=$request->pcor;

        $proveedor->save();

        // para la alerta
        toastr()->timeOut(5000)->success('Proveedor creado');

        return redirect()->back();

    }





    //productos

    public function add_producto(Request $request){

        $category=Category::all();
        $proveedor=Proveedor::all();


        return view('admin.add_producto',compact('category','proveedor'));

    }

    public function agregar_producto(Request $request){

        $producto=new Producto;

        $producto->codcategoria=$request->pcat;
        $producto->codproveedor=$request->ppro;

        $producto->nombreproducto=$request->pnom;
        $producto->descripcion=$request->pdes;
        $producto->unidadmedida=$request->puni;
        $producto->preciocompra=$request->pprecc;
        $producto->precioventa=$request->pprecv;
        $producto->descontinuados=$request->pdes;
        $producto->cantidadactual=$request->pcant;

        $img=$request->pimg;

        if ($img) {
            $imagenombre=time().'.'.$img->getClientOriginalExtension();
            $request->pimg->move('productos',$imagenombre);
            $producto->img=$imagenombre;
        }
        //$producto->img_producto=$request->pimg;

        $producto->save();

        // para la alerta
        toastr()->timeOut(5000)->success('Producto creado');

        return redirect()->back();
    }

    public function tproducto(){
        $data_producto=Producto::paginate(1);
        return view('admin.tproducto',compact('data_producto'));
    }

    public function pdelete($id){

        $data_producto= Producto::find($id);
        $data_producto->delete();


        // para la alerta
        toastr()->timeOut(5000)->error('producto Eliminada');

        return redirect()->back();
    }

    //pagina de prueba

    public function prueba(){
        return view('admin.prueba');
    }

}
