@extends('empleados.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('empleados/' .$empleados->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$empleados->id}}" id="id" />

        <div class="row justify-content-center">
        <div class="col-md-4">
          <label>Nombre completo *</label>
        </div>
        <div class="col-md">
          <input type="text" name="nombre" id="nombre" placeholder="Nombre completo del empleado"  value="{{$empleados->nombre}}"class="form-control" required>
        </div>
      </div>
      <div class="row justify-content-center mt-2">
        <div class="col-md-4">
          <label>Completo electrónico *</label>
        </div>
        <div class="col-md">
          <input type="email" name="email" placeholder="Correo Electrónico" id="email"  value="{{$empleados->email}}" class="form-control" required>
        </div>
      </div>

      <div class="row justify-content-center mt-2">
        <div class="col-md-4 ">
          <label>Sexo *</label></br>
        </div>
        <div class="col-md">
          @if($empleados->sexo == "M")
            <div class="form-check">
              <label for="sexo" class="form-check-label">
                <input type="radio" name="sexo" id="sexo" value="M" checked class="form-check-input" required>
                Masculino
              </label>
            </div>
            <div class="form-check">
              <label for="sexo" class="form-check-label">
                <input type="radio" name="sexo" id="sexo" value="F" class="form-check-input" required>
                Femenino
              </label>
            </div>
          @else
            <div class="form-check">
                <label for="sexo" class="form-check-label">
                  <input type="radio" name="sexo" id="sexo" value="M" class="form-check-input" required>
                  Masculino
                </label>
              </div>
              <div class="form-check">
                <label for="sexo" class="form-check-label">
                  <input type="radio" name="sexo" id="sexo" value="F"  checked class="form-check-input" required>
                  Femenino
                </label>
              </div>
            @endif
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <label>Descripcion *</label>
        </div>
        <div class="col-md mt-2">
          <textarea rows="10" cols="50" name="descripcion" id="descripcion"  placeholder="Descripción de la experiencia del empleado" class="form-control" required>{{$empleados->descripcion}}</textarea>
        </div>
      </div>
      @if($empleados->boletin == 1)
        <div class="row justify-content-center mt-2">
          <div class="col-md-4">
            <label><input type="checkbox"  value="1" checked id="boletin">&nbsp;Deseo recibir boletín de información?</label>
          </div>
        </div>
      @else
        <div class="row justify-content-center mt-2">
          <div class="col-md-4">
            <label><input type="checkbox"  value="0"  id="boletin">&nbsp;Deseo recibir boletín de información?</label>
          </div>
        </div>
      @endif
        <div class="row">
          <div class="col-md-2">
            <input type="submit" value="Actualizar" class="btn btn-primary"></br>
          </div>
        <div class="col-md">
          <a href="{{ url('/empleados/') }}" class="btn btn-success " title="Añadir empleados">
            Atrás
          </a>
        </div>
      </div>    
    </form>
    
  </div>
</div>
  
@stop