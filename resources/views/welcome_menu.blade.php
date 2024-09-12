<head>
    <style>
                    .dropdown-menu .sub-menu {
                left: 100%;
                position: absolute;
                top: 0;
                visibility: hidden;
                margin-top: -1px;
            }

            .dropdown-menu li:hover .sub-menu {
                visibility: visible;
            }

            .dropdown:hover .dropdown-menu {
                display: block;
}
    </style>
<link rel="stylesheet" href="{{ asset('style.css')}}">
</head>


<!--<link rel="stylesheet" href="{{ asset('menu.css')}}">-->
<body>
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
<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
</body>