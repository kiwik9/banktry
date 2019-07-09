@extends('layouts.app')

@section('contenido')


   <!-- DataTales Example -->
   <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Codigo usuario</th>
                      <th>Nombre de usuario</th>
                      <th>Cuenta</th>
                      <th>Monto</th>
                      <th>Fecha</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>12</td>
                      <td>2545das</td>
                      <td>Julio Perez</td>
                      <td>5411254</td>
                      <td>s/ 260</td>
                      <td>10/7/19</td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        <!-- /.container-fluid -->

@endsection