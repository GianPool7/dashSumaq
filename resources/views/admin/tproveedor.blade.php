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
          <h1><i class="fa fa-dashboard"></i>Proveedor</h1>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{url('view_category')}}">Proveedor</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">

                <thead>
                  <tr>
                    <th>Razon social </th>
                    <th>Representante </th>
                    <th>Ruc </th>
                    <th>Telefono </th>
                    <th>Direccion </th>
                    <th>Departamento </th>
                    <th>Distrito </th>
                    <th>Provincia </th>
                    <th>Correo </th>
                    <th>Estado </th>
                  </tr>
                </thead>

                <tbody>

                  @foreach($data_proveedor as $dataP)

                  <tr>
                    <td>{{$dataP->razonsocial}}</td>
                    <td>{{$dataP->representante}}</td>
                    <td>{{$dataP->ruc}}</td>
                    <td>{{$dataP->telefono}}</td>
                    <td>{{$dataP->direccion}}</td>
                    <td>{{$dataP->departamento}}</td>
                    <td>{{$dataP->distrito}}</td>
                    <td>{{$dataP->provincia}}</td>
                    <td>{{$dataP->correo}}</td>
                    <td>
                        <a href="{{url('cdelete',$dataP->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        /
                        <a href="{{url('cedit',$dataP->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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