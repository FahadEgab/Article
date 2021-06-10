@extends("structure.nav")
@section("titleOfPage")
    <title>تسجيل مستخدم جديد</title>
@endsection
@section("contentOfView")

    <div class="container" style="margin-top:15px;">
        <div class="row">

            <div class="col-md-3">

            </div>

            <div class="col-md-6" style="box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;padding: 2rem">
                <p class="display-4" style="text-align: center">تسجيل حساب جديد</p>
                <form method="post" action="{{route('signUpGo')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="title"  class="form-label">اسم المستخدم:</label>
                        <input type="text" value="{{old('name')}}" class="form-control" name="name" id="formGroupExampleInput" >
                        @error('name')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">البريد الالكتروني:</label>
                        <input type="text" value="{{old('email')}}" class="form-control" name="email" id="formGroupExampleInput" >
                        @error('email')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="content"  class="form-label">كلمة المرور:</label>
                        <input type="password" class="form-control" name="password" id="formGroupExampleInput" >
                        @error('password')
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
                    <button type="submit" class="btn btn-success" style="float: left">تسجيل </button>
                </form>
            </div>

        </div>
    </div>

@endsection
