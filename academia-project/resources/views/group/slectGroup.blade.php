@extends('group.group')
@section('content')
<div class="container">
  <div>
    <a href="{{url('grupos/create')}}" values="Add Group" class="btn btn-success"> Add Grupo</a>
  </div>
<table class="table">
    <thead>

      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    @foreach  ($grupos as $item)
      <tr>
        
      
        <th scope="row">{{$item->id}}</th> 
        <td >{{$item->groups_name}}</td>
        
        
      
        <td>
          <a href="{{url('grupos/'.$item->id)}}" class="btn btn-warning btn-edicion">Edit</a>
        </td>
        <td>
          <form action="{{url('grupos/'.$item->id)}}" method="post">
           
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

