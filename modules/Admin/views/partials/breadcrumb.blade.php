<ul class="page-breadcrumb breadcrumb">
    <li>
        <a href="{{ url('/') }}">Home</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="{{ Route::currentRouteName()  }}">{{ $heading  }}</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span class="active">{{ $page_action }}</span>
    </li>
</ul>
