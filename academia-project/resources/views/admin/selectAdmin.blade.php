@extends('admin.admin')
@section('content')
  <div class="container">
    <div>
      <a href="{{url('usuarios/create')}}" values="Add user" class="btn btn-success"> Add User</a>
  
    </div>
  <table class="table">
   
    <thead>

      <tr>
      <th scope="col">ID</th>
        <th scope="col">usuario</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Estado</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach  ($usuarios as $item)
      <tr>
        
      
        <th scope="row">{{$item->id}}</th> 
        <td>{{$item->user}}</td>
        <td>{{$item->pass}}</td>
        <td>{{$item->status}}</td>
      
        <td>
          <a href="{{url('usuarios/'.$item->id)}}" class="btn btn-warning btn-edicion">Edit</a>
        </td>
        <td>
          <form action="{{url('usuarios/'.$item->id)}}" method="post">
            @csrf 
            @method("Delete")
            <button class="btn btn-danger btn-edicion" type="submit">Delete</button>
        </form>
        </td>
        
     
      </tr>
       @endforeach
    </tbody>
  </table>

  </div>

    @endsection
   
