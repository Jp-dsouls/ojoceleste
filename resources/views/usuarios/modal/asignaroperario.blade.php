  <!-- Modal -->
  <div class="modal fade" id="modal-asignaroperario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h5 class="modal-title" id="exampleModalLabel">Asignar Operario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <form id="formoperario" name="formoperario">
        <input type="hidden" id="hiddenIdoperario" name="hiddenIdoperario">
        <span class="textcode d-none"></span>
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-lg-12">
              {!! Form::label('operario', 'Operario') !!}
              {!! Form::select('operario', $operarios, null, ['class' => 'form-control', 'placeholder' => '---- SELECCIONE ----', 'id' => 'operario']) !!}
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-info">Confirmar</button>
        </div>
        {{-- Form::Close() --}}
        </form>
      </div>
    </div>
  </div>
