<link rel="stylesheet" href="{{ asset('style.css')}}">

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @foreach ($menus as $key => $item)
                    @if ($item['parent'] != 0)
                        @break
                    @endif
                    @include('layouts._partials.menu-item', ['item' => $item])
                @endforeach
            </ul>
        </div>
    </div>
</nav>