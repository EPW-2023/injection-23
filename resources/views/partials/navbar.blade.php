<nav class="navbar navbar-epw navbar-expand-lg px-5">
    <div class="container-fluid">
        <img src="{{ asset('img/Logo EPW.png') }}" width="60" alt="">
        <a class="navbar-brand ms-4" href="#">EPW 2023</a>
        <button type="button" class="btn btn-primary bg-transparent border-0" id="button-modal" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            <i class="bi bi-list fs-3"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-epw" id="nav-link-epw" href="{{ route('login') }}">LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">EPW 2023</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <a href="{{ route('login') }}" class="d-block text-decoration-none my-2 link-modal">LOGIN</a>
                </div>
            </div>
        </div>
    </div>
</nav>
