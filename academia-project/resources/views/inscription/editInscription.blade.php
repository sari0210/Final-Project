@extends('inscription.inscription')
@section('content')


<div class="card card-formulario">
    <div class="card-header">Edit Inscription</div>
    <div class="card-body">
        <form action="{{url('inscripUpdate', $inscripciones->id)}}" method="post">
            @method('PUT')
            @csrf
            <label for="" class="form-label">Course Name </label>
            <select name="course_id" id="" class="form-control">
                <option value="{{$inscripciones->course_id }}">{{ $inscripciones->course_id}}</option>
                @foreach ($inscrip_curso as $value1)
                    <option value={{$value1->id}}>{{$value1->course_name}}</option>
                @endforeach
            </select>
                <br>
                <br>
                <label for="" class="form-label">Student Name </label>
                <select name="student_id" id="" class="form-control">
                <option value="{{$inscripciones->student_id}}">{{$inscripciones->student_id}}</option>
                @foreach ($inscrip_alumno as $value2)
                    <option value={{$value2->id}}>{{$value2->name}}</option>
                @endforeach
            </select>
                <br>
                <label for="" class="form-label">Teacher Name </label>
            <select name="teacher_id" id="" class="form-control">
                <option value="{{$inscripciones->teacher_id}}">{{$inscripciones->teacher_id}}</option>
                @foreach ($inscrip_maestro as $value3)
                    <option value={{$value3->id}}>{{$value3->name}}</option>
                @endforeach
            </select>
           <br>
        
           <input type="text "data-type="date"  name="inscrip_date" id="inscrip_date" value="{{$inscripciones->inscrip_date}}">
           
           

           <br>
           <br>
            <input type="submit" value="Add Cursos" class="btn btn-success btn-add" >
        </form>
    </div>
</div>
@stop