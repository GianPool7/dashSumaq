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
          <h1><i class="fa fa-dashboard"></i>Categorias</h1>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{url('view_category')}}">Categoria</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">

                <thead>
                  <tr>
                    <th>Nombre de categoria</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Accion</th>
                  </tr>
                </thead>

                <tbody>

                  @foreach($data as $data)

                  <tr>
                    <td>{{$data->nombrecategoria}}</td>
                    <td>{{$data->descripcion}}</td>
                    <td>{{$data->estado}}</td>
                    <td>
                        <a href="{{url('cdelete',$data->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        /
                        <a href="{{url('cedit',$data->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    </td>
                  </tr>

                  @endforeach

                </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>




    </main>

    @include('admin.footer')
  </body>
</html>
