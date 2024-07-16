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
          <h1><i class="fa fa-dashboard"></i> Crear proveedor</h1>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{url('view_category')}}">Proveedor</a></li>
        </ul>
      </div>

      <form method="post" action="{{url('insert_proveedor')}}">

        @csrf

        <div>

            <input type="text" placeholder="razon social" name="prs">
            <input type="text" placeholder="representante" name="pr">
            <input type="text" placeholder="ruc" name="pruc">

            <input type="text" placeholder="telefono" name="ptlf">
            <input type="text" placeholder="direccion" name="pdir">
            <input type="text" placeholder="departamento" name="pdep">

            <input type="text" placeholder="distrito" name="pdis">
            <input type="text" placeholder="provincia" name="pprov">
            <input type="text" placeholder="correo" name="pcor">

            <button type="submit" class="btn btn-primary">Agregar proveedor</button>
        </div>


      </form>



    </main>

    @include('admin.footer')
  </body>
</html>
