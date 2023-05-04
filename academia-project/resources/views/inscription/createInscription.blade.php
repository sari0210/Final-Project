@extends('inscription.inscription')
@section('content')


<div class="card">
    <div class="card-header">Add Inscription</div>
    <div class="card-body">
        <form action="{{url('inscripciones')}}" method="post">
            @csrf

            <label for="" class="form-label">Course Name </label>
            <select name="course_name" id="" class="form-control">
                <option value="">Seleccione un curso</option>
                @foreach ($inscrip_curso as $value1)
                    <option value={{$value1->id}}>{{$value1->course_name}}</option>
                @endforeach
            </select>
                <br>
                <br>
                <label for="" class="form-label">Student Name </label>
                <select name="" id="" class="form-control">
                <option value="">Seleccione un estudiante</option>
                @foreach ($inscrip_alumno as $value2)
                    <option value={{$value2->id}}>{{$value2->name}}</option>
                @endforeach
            </select>
                <br>
                <label for="" class="form-label">Teacher Name </label>
            <select name="" id="" class="form-control">
                <option value="">Seleccione un  maestro</option>
                @foreach ($inscrip_maestro as $value3)
                    <option value={{$value3->id}}>{{$value3->name}}</option>
                @endforeach
            </select>
           <br>
           <?php
            // La fecha en formato dd-mm-yyyy
           fecha = "03-05-2023";

            // Convertir la fecha a formato yyyy-mm-dd
            $fecha_iso = date("Y-m-d", strtotime($fecha));

            // Imprimir la fecha en formato yyyy-mm-dd
           // echo $fecha_iso;
            ?>
           <input type="date" name="fecha" id="inscrip_date" value="2023-05-03">

           <br>
           <br>
            <input type="submit" value="Add Cursos" class="btn btn-success" >
        </form>
    </div>
</div>
@stop