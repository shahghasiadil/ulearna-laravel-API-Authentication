<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
   <div style="width:400px; margin: auto; margin-top:20px">
    <form action="{{ route('save-post') }}" method="post">
       @csrf
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">body</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="body" class="@error('body') is-invalid @enderror" >
      
         @error('body')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            
         @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">views</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="views">
            @error('views')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
         @enderror
          </div>
          
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">likes</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="likes">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</body>
</html>