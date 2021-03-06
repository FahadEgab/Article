@extends("structure.nav")
@section("titleOfPage")
    <title>تسجيل الدخول</title>
@endsection
@section("contentOfView")

    <div class="container" style="margin-top:15px;">
        <div class="row">

            <div class="col-md-3">

            </div>

            <div class="col-md-6" style="box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;padding: 2rem">
             <p class="display-4" style="text-align: center">تسجيل الدخول</p>
                <form method="post" action="{{route('signInGo')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">البريد الالكتروني:</label>
                        <input type="text" class="form-control" name="email" id="formGroupExampleInput" >
                        @error('email')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">كلمة المرور:</label>
                        <input type="password" class="form-control" name="password" id="formGroupExampleInput" >
                        @error('password')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                        @enderror
                    </div>
                    @if(Session::has('success'))
                        <div class="alert alert-danger" role="alert">
                            {{Session::get('msg')}}
                        </div>
                    @endif

                    <button type="submit" class="btn btn-success" style="float: left">تسجيل الدخول</button>
                </form>
            </div>

        </div>
    </div>

@endsection
