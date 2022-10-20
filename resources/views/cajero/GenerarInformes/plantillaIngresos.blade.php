
@extends('cajero.plantilaBaseCajero')
@section('contenido')

<body>
    <h1 class="text-center">Informe de Ingresos</h1>
   
    <main>
            <section class="display-4 text-danger">
                <div class="col">
                    <div class="card-body">
                        
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    MES
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">ENERO</a>
                                    <a class="dropdown-item" href="#">FEBRERO</a>
                                    <a class="dropdown-item" href="#">MARZO</a>
                                    <a class="dropdown-item" href="#">ABRIL</a>
                                    <a class="dropdown-item" href="#">MAYO</a>
                                    <a class="dropdown-item" href="#">JUNIO</a>
                                    <a class="dropdown-item" href="#">JULIO</a>
                                    <a class="dropdown-item" href="#">AGOSTO</a>
                                    <a class="dropdown-item" href="#">SEPTIEMBRE</a>
                                    <a class="dropdown-item" href="#">OCTUBRE</a>
                                    <a class="dropdown-item" href="#">NOVIEMBRE</a>
                                    <a class="dropdown-item" href="#">DICIEMBRE</a>

                                    
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
                            <th scope="col">PRODUCTO</th>
                            <th scope="col">DESCRIPCION</th>
                            <th scope="col">TOTAL_EVALUACION</th>
                            
                         </tr>
                      </thead>
                      <tbody>
                            <tr>
                            
                                <td><button type="button" class="btn btn-outlinebtn-large">POSTRE</button></td>
            
                            </tr>
                            <tr>
                               <td><button type="button" class="btn btn-outlinebtn-large">BEBIDAS</button></td>
                            
                            </tr>
                            <tr>
                                <td><button type="button" class="btn  btn-outlinebtn-large">PLATILLOS</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col">
                        <button type="button" class="btn btn-darkbtn-large">VOLVER</button>
                        <button type="button" class="btn btn-darkbtn-large">REPORTE_INGRESOS</button>
                       
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
