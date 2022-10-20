@extends('cajero.plantilaBaseCajero')
@section('contenido')

<body>
    <script type="text/javascript">
        function ConfirmDelete()
        {
            var respuesta=confirm("Estas seguro de guardar");
            if(respuesta==true){
                return true;
            }else{
                return false;
            }

        }
        
    </script>
    <h1 class="text-center">FACTURA</h1>
    <main>
            <section class="display-4 text-danger">
                <div class="col">
                    <div class="col">
                        <div class="card-body">
                          <<form class="row">
                            <div class="form-group col-md-12">
                                <label form="">ID-PEDIDO</label>
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label form="">Nombre/Razon Social</label>
                                <input type ="text" class="form-control" placeholder="Razon Social"/>
                            </div>
                            <div class="form-group col-md-4">
                                <label form="">CI/NIT</label>
                                <input type ="text" class="form-control" placeholder="CI/NIT"/>
                            </div>
                            <div class="form-group col-md-4">
                                <label form="">Nro:</label>
                                <input type ="text" class="form-control" placeholder="Nro"/>
                            </div>
                            <div class="form-group col-md-8">
                                <label form="">Direccion:</label>
                                <input type ="text" class="form-control" placeholder="direccion"/>
                            </div>
                            <div class="form-group col-md-4">
                                <label form="">Fecha:</label>
                                <input type ="date" class="form-control" />
                            </div>
                          </form>>
                          <div class="col">
                              <button type="button" class="btn btn-dark btn-large" onclick="return ConfirmDelete()">GUARDAR</button>
                              <button type="button" class="btn btn-dark btn-large">FACTURAR</button>
                              <button type="button" class="btn btn-dark btn-large">VOLVER</button>
                          </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="display-4 text-danger">
                <div class="col">
                    <table class="table">
                      <thead>
                         <tr>
                          <th>CANTIDAD</th>
                          <th>CATEGORIA</th>
                          <th>NOMBRE</th>
                          <th>P_UNI</th>
                          <th>P_TOTAL</th>
                         </tr>
                      </thead>
                    </table>
                </div>
            </section>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

  @endsection
