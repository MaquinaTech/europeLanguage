@extends('layouts.app')

@section('content')

<div id="app" class="container">
   <h1>Listado de Perros</h1>
   
   <div class="table-responsive">
       <table class="table table-blue">
           <thead>
               <tr>
                  <th>Imagen</th>
                  <th>Raza</th>
                  <th>Nombre</th>
                  <th>Tamaño</th>
                  <th>Color de pelo</th>
               </tr>
           </thead>
           <tbody>
               @foreach($perros as $perro)
                   <tr>
                      <td><img src="{{ asset('dogs/' . $perro->img_url) }}" alt="Imagen del perro" class="img-fluid img-fixed"></td>
                      <td>{{ $perro->race }}</td>
                      <td>{{ $perro->name }}</td>
                      <td>{{ $perro->size }}</td>
                      <td>{{ $perro->hair_color }}</td>
                   </tr>
               @endforeach
           </tbody>
       </table>
   </div>
</div>

@endsection

@section('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                perros: @json($perros)
            }
        });
    </script>
@endsection

@section('styles')
    <style>
        .table-blue {
            background-color: blue;
            color: white;
        }
    </style>
@endsection
