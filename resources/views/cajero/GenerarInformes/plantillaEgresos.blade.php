@extends('cajero.plantilaBaseCajero')
@section('contenido')

<body>
    <h1 class="text-center">Agregar Egreso</h1>
   
    <main>
            <section class="display-4 text-danger">
                <div class="col">
                    <div class="card-body">
                        <div class="form-group col-md-4">
                            <label form="">Fecha:</label>
                                <input type ="date" class="form-control" />
                            </div>
                        </div>
                    
                </div>
            </section>

            <section class="display-4 text-danger">
                <div class="col">
                    <table class="table">
                      <thead>
                         <tr>
                            <th scope="col">INGREDIENTE</th>
                            <th scope="col">ID_CHEF</th>
                            <th scope="col">CANTIDAD</th>
                            <th scope="col">MEDIDA</th>
                            <th scope="col">TOTAL</th>
                         </tr>
                      </thead>
                    </table>
                </div>
                <div class="col">
                        <button href="/proveedores" type="button" class="btn btn-darkbtn-large">INSERTAR_PROVEEDOR</button>
                        <button type="button" class="btn btn-darkbtn-large">GUARDAR</button>
                        <button type="button" class="btn btn-darkbtn-large">REPORTE</button>
                        <button type="button" class="btn btn-darkbtn-large">VOLVER</button>
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
