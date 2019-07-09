@extends('layouts.app')

@section('contenido')


<div class="row">

           
            

          

          <div class="container">
  <div class="row">
    <div class="col"> <!-- Earnings (Monthly) Card Example -->
            <div class="">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Gastado</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$0</div>
                    </div>
                    <div class="col-auto">
                      <i class="  fas fa-trash fa-2x text-gray-300"></i>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>
    <div class="col"><!-- Earnings (Monthly) Card Example -->
           
    <div class="">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Dinero depositado</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$ 0</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div></div>
            
    <div class="w-100"></div>
    <div class="col">  <!-- Earnings (Monthly) Card Example -->
    <hr>        
    <div class="">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Limite de cuenta</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
    <div class="col">  <hr><!-- Pending Requests Card Example -->
            <div class="">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Transacciones realizadas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div></div>
  </div>
</div>


@endsection