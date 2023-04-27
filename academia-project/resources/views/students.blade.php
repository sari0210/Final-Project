<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Hola 

        @foreach ($estudiantes as $estudiantes)
        <h3>{{$estudiantes->name}}</h3>
        <h3>{{$estudiantes->lastname}}</h3>
        <h3>{{$estudiantes->age}}</h3>
        <h3>{{$estudiantes->address}}</h3>
    @endforeach
 
    </h1>
    <h1 style="text-align: center;margin:12px 0px 18px 0px;">Registro de maestros</h1>
     <div class="container mb-4 text-bg-light rounded-4" style="padding: 25px;">
    <form>
        
  <div class="row mt-4 ">
    
    <div class="col-sm-2 mb-3">
    <div class="">
      <label for="disabledTextInput" class="form-label">Codigo:</label>
    </div>
    </div>
    
      <div class="col-sm-6 mb-3">
      <input type="text" id="disabledTextInput" class="form-control">
    </div>
    </div>


    <div class="row mt-4">
    
    <div class="col-sm-2 mb-3">
    <div >
      <label for="disabledTextInput" class="form-label">Name:</label>
    </div>
    </div>
    
      <div class="col-sm-6 mb-3">
      <input type="text" id="disabledTextInput" class="form-control" placeholder="ex: Sarai">
    </div>
    </div>


    <div class="row mt-4">
    
    <div class="col-sm-2 mb-3">
    <div >
      <label for="disabledTextInput" class="form-label">Lastname:</label>
    </div>
    </div>
    
      <div class="col-sm-6 mb-3">
      <input type="text" id="disabledTextInput" class="form-control" placeholder="ex: Hernandez">
    </div>
    </div>


    <div class="row mt-4">
    
    <div class="col-sm-2 mb-3">
    <div >
      <label for="disabledTextInput" class="form-label">Address:</label>
    </div>
    </div>
    
      <div class="col-sm-6 mb-3">
      <input type="text" id="disabledTextInput" class="form-control" placeholder="ex: ">
    </div>
    </div>


    <div class="row mt-4">
    
    <div class="col-sm-2 mb-3">
    <div >
      <label for="disabledTextInput" class="form-label">Phone Number:</label>
    </div>
    </div>
    
      <div class="col-sm-6 mb-3">
      <input type="text" id="disabledTextInput" class="form-control" placeholder="ex: 7050-5050">
    </div>
    </div>



    <div class="row mt-4">
    
    <div class="col-sm-2 mb-3">
    <div >
      <label for="disabledTextInput" class="form-label">Group:</label>
    </div>
    </div>
    
      <div class="col-sm-6 mb-3">
      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
       
       <option value="1">One</option>
       <option value="2">Two</option>
      <option value="3">Three</option>
      </select>
    </div>
    </div>


    <div class="row mt-4">
        <div class="col-sm-3 align-item-center">
        <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>





</div>


</form>
</div>

</body>
</html>