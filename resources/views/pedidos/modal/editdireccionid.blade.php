<!-- Modal -->
<div class="modal fade" id="modal-editdireccion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel">Dirección de envío</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {{-- {{ Form::Open(['route' => ['envios.updatedireccion', $pedido],'enctype'=>'multipart/form-data', 'id'=>'formulario','files'=>true]) }} --}}
      <div class="modal-body">
        <p>Modifique los campos necesarios de la dirección de envío del pedido: <strong>PED000</strong></p>
      </div>
      
        @if ('' == '')
        {{-- Form::Open(['route' => ['envios.updatedireccion', $direccion],'enctype'=>'multipart/form-data', 'id'=>'formulario','files'=>true]) --}}
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {!! Form::label('nombre', 'Nombre de quien recibe el sobre') !!}                   
            {!! Form::text('nombre', '', ['class' => 'form-control', 'placeholder' => 'Nombre', 'required' => 'required']) !!}
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {!! Form::label('celular', 'Número de contacto') !!}                     
            {!! Form::number('celular', '', ['class' => 'form-control', 'id' => 'celular', 'min' =>'0', 'max' => '999999999', 'maxlength' => '9', 'oninput' => 'maxLengthCheck(this)']) !!}
          </div>
          {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {!! Form::label('departamento', 'Departamento') !!}                      
            {!! Form::select('departamento', null, null, ['class' => 'form-control border border-secondary', 'data-live-search' => 'true', 'placeholder' => '---- SELECCIONE ----']) !!}
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {!! Form::label('provincia', 'Provincia') !!}                      
            {!! Form::select('provincia', null , null, ['class' => 'form-control border border-secondary', 'data-live-search' => 'true', 'placeholder' => '---- SELECCIONE ----']) !!}
          </div> --}}
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {!! Form::label('distrito', 'Distrito') !!}                      
            
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {!! Form::label('direccion', 'Dirección') !!}                      
            {!! Form::text('direccion', '', ['class' => 'form-control', 'placeholder' => 'Dirección', 'required' => 'required']) !!}
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {!! Form::label('referencia', 'Referencia') !!}                      
            {!! Form::text('referencia', '', ['class' => 'form-control', 'placeholder' => 'Referencia', 'required' => 'required']) !!}
          </div>
        @endif
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Confirmar</button>
      </div>
      {{ Form::Close() }}
    </div>
  </div>
</div>