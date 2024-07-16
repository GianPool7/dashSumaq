<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body class="app sidebar-mini rtl">

    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
        @include('admin.barra')
    </header>

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

    @include('admin.sidebar')

    <main class="app-content">

      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Crear Producto</h1>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{url('view_category')}}">Categoria</a></li>
        </ul>
      </div>

      <form method="post" action="{{url('agregar_producto')}}" enctype="multipart/form-data">

        @csrf

        <div>

            <select name="pcat" id="">
                <label>Categoria</label>

                @foreach($category as $categorys)

                <option value="{{$categorys->id}}">{{$categorys->nombrecategoria}}</option>

                @endforeach

            </select>

            <select name="ppro" id="">

                @foreach($proveedor as $dproveedor)

                <label>Proveedor</label>
                <option value="{{$dproveedor->id}}">{{$dproveedor->razonsocial}}</option>

                @endforeach

            </select>

            <input type="text" placeholder="nombre de producto" name="pnom">
            <input type="text" placeholder="descripcion" name="pdes">
            <input type="text" placeholder="unidad de medida" name="puni">
            <input type="text" placeholder="precio de compra" name="pprecc">
            <input type="text" placeholder="precio de venta" name="pprecv">

            <input type="file" placeholder="img_producto" name="pimg">
            
            <input type="text" placeholder="descontinuado" name="pdes">
            <input type="text" placeholder="cantidad actual" name="pcant">

            <button type="submit" class="btn btn-primary">Agregar producto</button>
        </div>


      </form>



    </main>

    @include('admin.footer')
  </body>
</html>
