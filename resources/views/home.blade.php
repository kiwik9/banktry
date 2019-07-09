@extends('layouts.app')

@section('contenido')



<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-6">
       <!-- Basic Card Example -->
 <div class="card shadow mb-4 center">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">
                      Bienvenido a Bank Renzo Online
                  </h6>
                </div>
                <div class="card-body">
                  <hr>
                  Aqui podras realizar tranferencias entre usuarios, asi como pagar servios como TV, Telefonia, Netflix, etc..
                  <hr>
                  Para empezar a usar Renzo Bank da clic al boton "Crear Tarjeta" para que se genere tu tarjeta con un saldo de 500 soles.
                  
                  <br>
                  <br>
                      <div class="row">
                      <div class="col-sm"></div>
                      <div class="col-sm">
                        <a href="{{route('creartarjeta')}}" class="btn btn-success btn-icon-split">Crear tarjeta</a>
                    </div>
                      <div class="col-sm"></div>
                    </div>
                  
                </div>
</div>
    </div>
    <div class="col">
    </div>
  </div>
</div>

@endsection