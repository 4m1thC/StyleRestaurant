<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    ver ingregientes
  </button>
  
  <!-- Modal -->
  
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title text-center" id="exampleModalLongTitle">{{$producto->nombre}}</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <img  src="{{asset('storage').'/'.'uploads/ingredientes.jpg'}}" width="576" height="300" data-toggle="modal" data-target="#exampleModal"/>
        </div>
        <div class="modal-body">
         
            @yield('tabla')

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
