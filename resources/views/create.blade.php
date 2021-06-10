@extends("structure.nav")
@section("titleOfPage")
    <title>إنشاء مقالة</title>
@endsection
@section("contentOfView")

<div class="container" style="margin-top:15px;">
    <div class="row">

        <div class="col-md-3">

        </div>
        <div class="col-md-6" style="box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;padding: 2rem">
        <form method="post" action="{{route('store')}}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">عنوان المقالة:</label>
                <input type="text" value="{{old('title')}}" class="form-control" name="title" id="formGroupExampleInput" >
                @error('title')
                <small class="form-text text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">نص المقالة:</label>
                <textarea class="form-control" dir="rtl" id="editor" style="height: 40vh" name="content">
                    {{old('content')}}
                </textarea>
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
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
