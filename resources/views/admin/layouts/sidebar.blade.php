@section('sidebar')
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li><a href="/admin"><em class="fa fa-home">&nbsp;&nbsp;</em>Home</a></li>
            <li><a href="/admin/tambah-destinasi"><em class="fa fa-plus">&nbsp;&nbsp;</em>Tambah Destinasi</a></li>
            <li><a href="/admin/list-artikel"><em class="fa fa-newspaper-o">&nbsp;</em>List Artikel</a></li>
            <li><a href="/admin/list-user"><em class="fa fa-user">&nbsp;&nbsp;&nbsp;</em>List User</a></li>
            <li><a href="/admin/list-destinasi"><em class="fa fa-plane">&nbsp;&nbsp;&nbsp;</em>List Destinasi</a></li>
            <li><a href="/admin/list-rekomendasi"><em class="fa fa-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em>List
                    Rekomendasi</a></li>
            <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <em class="fa fa-power-off">&nbsp;&nbsp;&nbsp;</em> {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </li>
        </ul>
    </div>
@endsection