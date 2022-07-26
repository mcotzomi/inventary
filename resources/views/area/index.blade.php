@extends('tema.app')
@section('title', "Listado de productos de UDES")
@section('contenido')
 <h3>
    Listado de productos
 </h3>   
<table>
     <thead>
          <tr>
             <th>
                 Nombre
             </th>
             <th>
                 cantidad
             </th>
          </tr>
     </thead>
     <tbody>
     @foreach($areas as $area)
       <tr>
         <td>
             {{$area->name}}
         </td>
         <td>
             {{$area->cantidad}}
         </td>   
       </tr>
       @endforeach     



     </tbody>
</table>        

    
@endsection