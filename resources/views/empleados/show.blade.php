@extends('empleados.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Datos personales</div>
    <div class="card-body mr-3 ml-3">
          <div class="card-body">
          <p class="card-title"><STRONG>Nombre :</STRONG> {{ $empleados->nombre }}</p>
          <p class="card-text"><STRONG>Email :</STRONG> {{ $empleados->email }}</p>
          <p class="card-text"><STRONG>Sexo :</STRONG> @if ($empleados->sexo=="F")
                                                          Femenino
                                                        @else
                                                          Masculino
                                                        @endif</p>
          <p class="card-text"><STRONG>Area :</STRONG>
                                                        @foreach ($areas as $area)
                                                          @if ($area->id==$empleados->area_id)
                                                            <td>{{$area['nombre']}}</td>
                                                          @endif
                                                        @endforeach</p>
          <p class="card-text"><STRONG>Boletín :</STRONG>
                                                        @if ($empleados->boletin==1)
                                                            Si
                                                        @else
                                                            No
                                                        @endif
                                                      </p>
          <p class="card-text"><STRONG>Descripcion :</STRONG> {{ $empleados->descripcion }}</p>
    </div>
  </div>
  <a href="{{ url('/empleados/') }}" class="btn btn-success " title="Añadir empleados">
            Atrás
          </a>
</div>