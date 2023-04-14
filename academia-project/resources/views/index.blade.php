<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Proyecto academia

        @foreach ($cursos as $cursos)
            <h3>{{$cursos->course_name}}</h3>
        @endforeach
     

    </h1>
</body>
</html>