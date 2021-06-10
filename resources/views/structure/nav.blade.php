<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield("titleOfPage")
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <link href="../../css/app.css" rel="stylesheet" />
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea#editor',
            menubar: false
        });
    </script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Open Sans', sans-serif;
            font-family: 'Tajawal', sans-serif;
        }
        ::-webkit-scrollbar {
            width: 5px;
        }
        ::-webkit-scrollbar-thumb {
            background: #3898EC;
            border-radius: 10px;
        }    </style>
</head>
<body dir="rtl">



<nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('Index')}}">مقالات</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @if(session()->exists('Id'))
            <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link"  href="{{url('create')}}">إضافة مقالة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('edit')}}">مقالاتي</a>
                </li>
            </ul>
           @endif
        </div>
        <div class="form-inline my-2 my-lg-0">
            @if(session()->exists('Id'))
             <a href="{{url("signOut")}}" class="btn btn-outline-danger my-2 my-sm-0" type="submit">تسجيل الخروج</a>

            @else
            <a href="{{url("signIn")}}" class="btn btn-outline-primary my-2 my-sm-0" type="submit">تسجيل الدخول</a>
            <a href="{{url('signUp')}}" class="btn btn-outline-success my-2 my-sm-0" type="submit">التسجيل</a>
                @endif
        </div>
    </div>
</nav>


@yield("contentOfView")

</body>
</html>

