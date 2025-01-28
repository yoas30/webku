<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">
            <span><img src="{{ asset('bs/assets/img/yoas.webp') }}" style="width:40px;"/></span> Mas Yoo</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>

        
        {{-- <div class="dropdown" >
            <button class="btn btn-secondary dropdown-toggle py-2 px-0 px-lg-3 ms-auto" type="button" data-bs-toggle="dropdown" aria-expanded="false">DROPDOWN</button>
            <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Action</button></li>
            <li><button class="dropdown-item" type="button">Another action</button></li>
            <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
        </div> --}}

        
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-2 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-2 px-0 px-lg-3 rounded" href="#about">Bio</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-2 px-0 px-lg-3 rounded" href="#education">Education</a></li>
                {{-- <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="relay#project">Projectku</a></li> --}}
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-2 px-0 px-lg-3 rounded" href="#contact">Kontak</a></li>
                {{-- <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-2 px-0 px-lg-3 rounded" href="/login">Login Controller</a></li> --}}
            </ul>
        </div>
    </div>
</nav>

