@extends("structure.nav")
@section("titleOfPage")
    <title>عرض المقالة للتعديل</title>
@endsection
@section("contentOfView")

    <div class="container" style="margin-top:15px;">
    <div class="row">

        <div class="col-md-3">

        </div>
        <div class="col-md-6" style="box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;padding: 2rem">
           <h1>
               {{$fond -> title}}
           </h1>
            <p>
                {{$fond -> content}}
            </p>
        </div>


    </div>
</div>

@endsection
