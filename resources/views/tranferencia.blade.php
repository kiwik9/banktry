@extends('layouts.app')

@section('contenido')



<div class="row">
  <div class="col-2"></div>
  <div class="col-8"> 
      <div class="card shadow mb-6 center">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">
                      Realizar tranferencia
                  </h6>
                </div>
                <div class="card-body">
                  

                <form>
                <div class="form-row">
                    <div class="col-md-8 mb-8">
                    <label for="validationServer01">Numero de cuenta</label>
                    <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                    <label for="validationServer03">Nombre de usuario</label>
                    <input type="text" class="form-control " id="validationServer03" placeholder="" readonly>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label for="validationServer04">Codigo de usuario</label>
                    <input type="text" class="form-control " id="validationServer04" placeholder="" readonly>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label for="validationServer05">Fecha</label>
                    <input type="text" class="form-control " id="validationServer05" placeholder="" readonly>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-8 mb-2">
                    <label for="validationServer03">Monto</label>
                    <input type="text" class="form-control" id="validationServer03" placeholder="" required>

                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>

                   
                   
                </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input " type="checkbox" value="" id="invalidCheck3" required>
                    <label class="form-check-label" for="invalidCheck3">
                        Confirmar
                    </label>
                    <div class="invalid-feedback">
                        Es necesario aceptar.
                    </div>
                    </div>
                </div>
                <button class="btn btn-success " type="submit">Realizar tranferencia</button>
                </form>







                </div>
</div></div>

  <div class="col-2"></div>
</div>





@endsection