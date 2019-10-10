<!doctype html>
<html class="no-js h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>DECADA ODONTO</title>

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="assets/css/extras.1.1.0.min.css">


    <!--Jquery CDN-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--Bootstrap Script-->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!--Bootstrap PopperJs CND-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!--Framework required Scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.1.0.min.js"></script>
    <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.min.js"></script>
    <script src="scripts/app/app-blog-new-post.1.1.0.js"></script>


    <!--Optionals Scripts-->
    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css"> -->
</head>

<body class="h-100">
	<?php include_once "php/conexao.php"; ?>
    <div class="container-fluid">
        <div class="row">
            <!-- Main Sidebar -->
            <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
                <div class="main-navbar">
                    <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                        <a class="navbar-brand w-100 mr-0" style="line-height: 25px;">
                            <div class="d-table m-auto">
                                <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                                <span class="d-none d-md-inline ml-1">ODONTO FRONT-END</span>
                            </div>
                        </a>
                        <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                            <i class="material-icons">&#xE5C4;</i>
                        </a>
                    </nav>
                </div>

                <div class="nav-wrapper">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="index.html">
                                <i class="material-icons">dashboard</i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="schedule.html">
                                <i class="material-icons">schedule</i>
                                <span>Agenda</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="patients.html">
                                <i class="material-icons">supervisor_account</i>
                                <span>Pacientes</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="stock.html">
                                <i class="material-icons">table_chart</i>
                                <span>Estoque</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="financial.html">
                                <i class="material-icons">monetization_on</i>
                                <span>Financeiro</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                <a class="nav-link " href="user-profile-lite.html">
                  <i class="material-icons">person</i>
                  <span>User Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="errors.html">
                  <i class="material-icons">error</i>
                  <span>Errors</span>
                </a>
              </li> -->
                    </ul>
                </div>
            </aside>
            <!-- End Main Sidebar -->
            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                <div class="main-navbar sticky-top bg-white">
                    <!-- Main Navbar -->
                    <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                        <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                            <div class="input-group input-group-seamless ml-3"></div>
                        </form>
                        <ul class="navbar-nav border-left flex-row ">
                            <li class="nav-item border-right dropdown notifications">
                                <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="nav-link-icon__wrapper">
                                        <i class="material-icons">&#xE7F4;</i>
                                        <span class="badge badge-pill badge-danger">2</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">
                                        <div class="notification__icon-wrapper">
                                            <div class="notification__icon">
                                                <i class="material-icons">schedule</i>
                                            </div>
                                        </div>
                                        <div class="notification__content">
                                            <span class="notification__category">Agenda</span>
                                            <p>Não se esqueça de checar a agenda, você tem
                                                <span class="text-success text-semibold">2</span> consultas hoje!</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="notification__icon-wrapper">
                                            <div class="notification__icon">
                                                <i class="material-icons">monetization_on</i>
                                            </div>
                                        </div>
                                        <div class="notification__content">
                                            <span class="notification__category">Financeiro</span>
                                            <p>Confira o painel de finanças</p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item notification__all text-center" href="#"> Ver todas as notificações </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img class="user-avatar rounded-circle mr-2" src="assets/images/avatars/0.jpg" alt="User Avatar">
                                    <span class="d-none d-md-inline-block">Dra. Sierra Brooks</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-small">
                                    <a class="dropdown-item" href="#">
                                        <i class="material-icons">&#xE7FD;</i> Perfil
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="material-icons">settings_applications</i> Configurações
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="#">
                                        <i class="material-icons text-danger">&#xE879;</i> Sair
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <nav class="nav">
                            <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                                <i class="material-icons">&#xE5D2;</i>
                            </a>
                        </nav>
                    </nav>
                </div>

                <!-- / .main-navbar -->
                <div class="main-content-container container-fluid px-4">
                    <!-- Page Header -->
                    <div class="page-header row no-gutters py-4">
                        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                            <h3 class="page-title"> <i class="material-icons">table_chart</i>Estoque</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card card-small mb-4">
                                <div class="card-header border-bottom">
                                    <form class="form-row" style="margin-top: 15px;" action="php/add-stock.php" method="POST">
                                        <div class="form-group col-md-3">
                                            <input type="text" class="form-control" name="product" id="product" placeholder="Produto" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input type="number" class="form-control" name="amount" id="amount" placeholder="Quantidade" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input type="text" class="form-control" name="price" id="price" placeholder="Preço unitário" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <button type="submit" class="btn btn-success">Adicionar item ao estoque</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-body p-0 pb-3 text-center">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th scope="col" class="border-0">Produto</th>
                                                    <th scope="col" class="border-0">Quantidade</th>
                                                    <th scope="col" class="border-0">Preço unitário</th>
                                                    <th scope="col" class="border-0">Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $queryselect = "select * from estoque";
                                                    $resultadoselect = $conexao->query($queryselect);

                                                    if($resultadoselect->num_rows>0){
                                                        while ($linha = $resultadoselect->fetch_assoc()){
                                                            echo "<tr> <td></td>";
                                                            echo "</td><td>".$linha["produto"]. "</td>";
                                                            echo "<td>".$linha["quantidade"]. "</td>";
                                                            echo "<td>".$linha["preco"]."</td>";
                                                            echo "<td><a href='patient-profile.php?id=' class='mb-2 btn btn-sm btn-success mr-1' style='color: white'>Ver perfil</a></td>";
                                                        }
                                                    }        
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Editar ou adicionar item</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>

                                                        <div class="form-row">
                                                            <strong class="text-muted d-block mb-2">Forms</strong>
                                                            <div class="form-group col-md-12">
                                                                <input type="text" class="form-control" name="edit-name" id="edit-name" placeholder="Nome do produto" value="Anestesia" required>
                                                            </div>
                                                        </div>

                                                        
                                                        <div class="form-row">
                                                            
                                                            <div class="form-group col-md-6">                                                   
                                                                <input type="number" class="form-control" name="qtd" id="qtd" value="50" readonly>
                                                            </div>

                                                            <div class="input-group col-md-6">
                                                                <div class="input-group-prepend" style="height: 32px">
                                                                    <div class="input-group-text">+</div>
                                                                </div>
                                                                <input style="height: 32px" type="number" class="form-control" id="add" name="add" placeholder="Adicionar quantidade">
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <input type="text" class="form-control" name="edit-price" id="edit-price" placeholder="Preço unitário" value="15,99" required>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                    <button type="button" class="btn btn-success">Salvar alterações</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
                    <span class="copyright ml-auto my-auto mr-2">Copyright © 2019
                        <a target="_blank" href="https://decadatech.com" rel="nofollow">Decada Technology</a>
                    </span>
                </footer>
            </main>
        </div>
    </div>
</body>

</html>
