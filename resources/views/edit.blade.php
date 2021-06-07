@extends("structure.nav")
@section("titleOfPage")
    <title>مقالاتي</title>
@endsection
@section("contentOfView")

    <div class="container" style="margin-top:15px;">
    <div class="row">

        <div class="col-md-3">

        </div>
        <div class="col-md-6" style="box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;padding: 2rem">


            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">رقم المقالة</th>
                    <th scope="col">عنوان المقالة</th>
                    <th scope="col">التعديل</th>
                    <th scope="col">الحذف</th>
                </tr>
                </thead>
                <tbody>


                @foreach($Articles as $article)   <tr>

                    <th scope="row">
                        {{$article ->Id}}
                    </th>

                    <td>
                        {{$article ->title}}
                    </td>
                    <td>
                        <a href="{{url('editId/'. $article ->Id)}}" class="btn btn-info" >عرض</a>
                    </td>
                    <td>
                        <a href="{{url('deleteArticle/'. $article ->Id)}}" class="btn btn-danger" >حذف</a>
                    </td>

                </tr>  @endforeach



                </tbody>
            </table>



        </div>


    </div>
</div>

@endsection
