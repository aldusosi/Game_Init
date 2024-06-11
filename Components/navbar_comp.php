<nav class=" navbar-dark bg-dark  fixed-top">
    <div class="navbar navbar-expand-lg m-auto" style=" width:100%; max-width:1180px;">
        <a class="navbar-brand" href="index.php">
            <img style="width:50px; height:50px;" src="./images/make-a-game-logo.png">
            Game.Init( )
        </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-target">
            <ul class="navbar-nav ml-3">
                <li class="nav-item">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Sobre</a>
                </li>
                <li class="nav-iten dropdown" data-toggle="dropdown">
                    <a class="nav-link dropdown-toggle" href="">Serviços</a>
                    <div class="dropdown-menu bg-dark">
                        <a class="dropdown-item bg-dark text-light" href="">Serviço 1</a>
                        <a class="dropdown-item bg-dark text-light" href="">Serviço 2</a>
                        <a class="dropdown-item bg-dark text-light" href="">Serviço 3</a>
                    </div>
                </li>
                
            </ul>
            <div class="form-inline collapse navbar-collapse d-flex justify-content-end">
                <form class="form-inline" action="">
                    <span class="m-2 text-light">Login</span>
                    <input class="form-control form-control-sm m-1" type="text" placeholder="Digite seu usuário">
                    <input class="form-control form-control-sm m-1" type="password" placeholder="Digite sua senha">
                    <button class="btn btn-info btn-sm m-1">Logar</button>
                </form>

            </div>
        </div>
    </div>
</nav>