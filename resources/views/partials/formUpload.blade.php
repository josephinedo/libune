<!-- Modal -->
<div class="modal fade" id="form-upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('archivo.upload') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <label for="archivo">Cargar Archivos</label>
            <input type="file" name="archivos[]" multiple="true">
            
            <input type="hidden" name="origen_id" value="{{ $id }}">
            <input type="hidden" name="origen_type" value="{{ $type }}">

            <button type="submit" class="btn btn-sm btn-success">Cargar</button>
        </form>
      </div>
    </div>
  </div>
</div>
