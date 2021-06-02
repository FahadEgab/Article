<nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('Index')}}">مقالات</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link"  href="{{url('create')}}">إضافة مقالة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('edit')}}">تعديل مقالة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('delete')}}">حذف مقالة</a>
                </li>

            </ul>

        </div>
    </div>
</nav>
