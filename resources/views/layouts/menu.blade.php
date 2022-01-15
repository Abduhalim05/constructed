<ul class="nav navbar-nav navbar-right">
    <li class="">
        <a class="menu_link" data-scroll href="#home">Asosiy</a>
    </li>

    @foreach ($items as $menu )
        <li >
            <a class="menu_link" data-scroll href="{{$menu->url}}">{{$menu->title}}</a>
        </li>
    @endforeach
</ul>
{{-- @if (request()->path()=='/') class="active" @endif --}}
