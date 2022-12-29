<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/adminx.css" media="screen" />
</head>

<body>
    <nav class="navbar navbar-expand justify-content-between">
        <a class="navbar-brand mb-0 h1 d-none d-md-block" href="index.php">
            <img src="../../img/logo_conect.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
            Conect-X
        </a>

        <form class="form-inline form-quicksearch d-none d-md-block mx-auto">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!--<div class="input-group-icon">
                        <i data-feather="search"></i>
                    </div>-->
                </div>
                <!--<input type="text" class="form-control" id="search" placeholder="Pesquisar...">-->
            </div>
        </form>

        <div class="d-flex flex-1 d-block d-md-none">
            <a href="#" class="sidebar-toggle ml-3">
                <i data-feather="menu"></i>
            </a>
        </div>

        <ul class="navbar-nav d-flex justify-content-end mr-2">
            <!-- Notificatoins -->
            <li class="nav-item dropdown d-flex align-items-center mr-2">
                <a class="nav-link nav-link-notifications" id="dropdownNotifications" data-toggle="dropdown" href="#">
                    <i class="bi:bell display-inline-block align-middle"></i>
                    <span class="nav-link-notification-number">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-notifications" aria-labelledby="dropdownNotifications">
                    <div class="notifications-header d-flex justify-content-between align-items-center">
                        <span class="notifications-header-title">
                            Notificações
                        </span>
                        <a href="#" class="d-flex"><small>Mark all as read</small></a>
                    </div>

                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action unread">
                            <p class="mb-1">Invitation for <strong>Lunch</strong> on <strong>Jan 12th 2018</strong> by <strong>Laura</strong></p>

                            <div class="mb-1">
                                <button type="button" class="btn btn-primary btn-sm">Aceitar convite</button>
                                <button type="button" class="btn btn-outline-danger btn-sm">Rejeitar</button>
                            </div>

                            <small>1 hour ago</small>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action">
                            <p class="mb-1"><strong class="text-success">Goal completed</strong><br />1,000 new members today</p>
                            <small>3 days ago</small>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action">
                            <p class="mb-1 text-danger"><strong>System error detected</strong></p>
                            <small>3 days ago</small>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action">
                            <p class="mb-1">Your task <strong>Design Draft</strong> is due today.</p>
                            <small>4 days ago</small>
                        </a>
                    </div>

                    <div class="notifications-footer text-center">
                        <a href="#"><small>View all notifications</small></a>
                    </div>
                </div>
            </li>
            <!-- Notifications -->
            <li class="nav-item dropdown">
                <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg" class="d-inline-block align-top" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">My Profile</a>
                    <a class="dropdown-item" href="#">My Tasks</a>
                    <a class="dropdown-item" href="#">Configurações</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#">Sair</a>
                </div>
            </li>
        </ul>
    </nav>
