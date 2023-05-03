@extends('group.group')
@section('content')
<table class="table">
    <thead>

      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach  ($grupos as $item)
      <tr>
        
      
        <th scope="row">{{$item->id}}</th> 
        <td >{{$item->groups_name}}</td>
        
        
      
        <td><a href="{{url('grupos/'.$item->id)}}" class="btn btn-warning">Edit</a>
           <form action="{{url('grupos/'.$item->id)}}" method="post">
           
            @csrf 
            @method("Delete")
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
     
      </tr>
       @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{url('grupos/create')}}" values="Add Group" class="btn btn-success"> Add Grupo</a>
  </div>
    @endsection

