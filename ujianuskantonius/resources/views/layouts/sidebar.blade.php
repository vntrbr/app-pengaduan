
    <body>
        <div id="app">
            <div id="sidebar" class="active">
                <div class="sidebar-wrapper active">
                    <div class="sidebar-header">
                        <div class="d-flex justify-content-between">
                            <div class="logo">
                                <a href="#"><img src="/assets/img/123.svg" alt="Logo" srcset=""></a>
                            </div>
                            <div class="toggler">
                                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-menu">
                        <ul class="menu">
                            <li class="sidebar-title">Admin</li>
                            <li class="sidebar-item  ">
                                <a href="{{ route('kategori.index')}}" class='sidebar-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Kategori</span>
                                </a>
                                
                            <li class="sidebar-item  ">
                                <a href="/responaspirasi" class='sidebar-link'>
                                    <i class="bi bi-eye-fill"></i>
                                    <span>Lihat Aspirasi</span>
                                </a>
                                

                            </li>
                            <li class="sidebar-item  ">
                                <a href="{{ route('aspirasi.create')}}" class='sidebar-link'>
                                    <i class="bi bi-pencil-square"></i>
                                    <span>Buat Aspirasi</span>
                                </a>
                            </li>
                            <li class="sidebar-item  ">
                                <a href="{{ route('aspirasi.index')}}" class='sidebar-link'>
                                    <i class="bi bi-person-fill"></i>
                                    <span>Respon Aspirasi</span>
                                </a>
                            </li>
                   
</ul> 
<div class="sidebar-menu">
                        <ul class="menu">
                        <li class="sidebar-title">Logout</li>

                           
                            <li class="sidebar-item  ">
                                    <a  class='sidebar-link' href="{{ route('logout') }}" `
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        <i class="bi bi-person-circle" ></i>
                                                        <span>    {{ Auth::user()->name }}</span>
                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
</li>
                        </ul>
                    </div>
                    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
                </div>
            </div>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>