<nav class="navbar navbar-expand-lg bg-body-tertiary justify-content-between">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{$title;}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../student/all">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../kelas/all">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../extracurricular">Extracurricular</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container-fluid justify-content-end">
        <ul class="navbar-nav">
            @auth
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../dashboard">Hello, {{auth()->user()->name}}</a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link" aria-current="page">Logout</button>
                </form>
            </li>

            @else
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../signup">Signup</a>
            </li>
            @endauth
        </ul>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>