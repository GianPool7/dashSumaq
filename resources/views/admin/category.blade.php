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
          <h1><i class="fa fa-dashboard"></i> Crear categoria</h1>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{url('view_category')}}">Categoria</a></li>
        </ul>
      </div>

      <form method="post" action="{{url('add_category')}}">

        @csrf

        <div>
            <input type="text" placeholder="nombre de la categoria" name="cnombre">
            <input type="text" placeholder="descripcion" name="cdescripcion">
            <input type="text" placeholder="estado" name="cestado">
            <button type="submit" class="btn btn-primary">Agregar categoria</button>
        </div>


      </form>



    </main>

    @include('admin.footer')
  </body>
</html>
