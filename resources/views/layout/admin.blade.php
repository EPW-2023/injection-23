<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/epw-favicon.png') }}" type="image/x-icon">
    <title>EPW 2023</title>
</head>

<body>
    <div class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 100vh;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg> <span class="fs-2">EPW 2023 Admin Panel</span> </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="/linktree" class="nav-link">Linktree</a>
                </li>
            </ul>
            <hr>
            <div class="d-flex">
                <strong class="mx-2 fs-5">{{ auth()->user()->username }}</strong>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-danger d-inline">Logout</button>
                </form>
            </div>
        </div>
        <div class="mainbar p-3" style="width: 100vw;">
            <h1>Hello {{ auth()->user()->username }}, How's Your Day?</h1>
            <div class="admin-panel-announcement">
                @yield('content')
            </div>
        </div>
</body>

</html>
