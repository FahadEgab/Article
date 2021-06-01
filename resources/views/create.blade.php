<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>إنشاء مقالة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<body dir="rtl">
@include("structure.nav")
<div class="container" style="margin-top:15px;">
    <div class="row">

        <div class="col-md-3">

        </div>
        <div class="col-md-6">
        <form method="post" action="{{route('store')}}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">عنوان المقالة:</label>
                <input type="text" class="form-control" name="title" id="formGroupExampleInput" >
                @error('title')
                <small class="form-text text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">نص المقالة:</label>
                <textarea class="form-control" style="height: 40vh" name ="content"></textarea>
                @error('content')
                <small class="form-text text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>
           @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif

            <button type="submit" class="btn btn-success" style="float: left">إظافة</button>
        </form>
        </div>


    </div>
</div>
</body>
</html>
