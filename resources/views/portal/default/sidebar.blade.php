<div class="app-body">
<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            @foreach($portal['sidebar'] as $row)
                <li class="nav-item ">
                    <a class="nav-link" href="{{ $row['url'] }}">
                        <i class="{{$row['icon']}}"></i> {{ $row['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>