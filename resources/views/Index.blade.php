@extends("structure.nav")
@section("titleOfPage")
    <title>المقالات</title>
@endsection
@section("contentOfView")

    <div class="container" style="margin-top:15px;">
      <div class="row">



                  @foreach($Articles as $article)
              <div class="col-md-4">

                  <div class="card" style="box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;width: 18rem; overflow:hidden;margin-bottom: 2rem">
                      <div class="card-body">
                          <h5 class="card-title">{{$article -> title}}</h5>
                          <p class="card-text" style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">
                              {{$article -> content}}
                          </p>
                          <a href="{{url('show/'.$article -> Id)}}" style="float: left;" class="btn btn-info">عرض</a>

                      </div>

                  </div>

              </div>
                  @endforeach


      </div>
  </div>

@endsection
