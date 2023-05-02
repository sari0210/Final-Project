@extends('group.group')
@section('content')


<div class="card">
    <div class="card-header">Add Group</div>
    <div class="card-body">
        <form action="{{url('grupos')}}" method="post">
            @csrf
            
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control">
            <input type="submit" value="Add Groups" class="btn btn-success" >
           
        </form>
    </div>
</div>
@stop