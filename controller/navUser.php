<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="../css/nav.css">
<script src="../js/nav.js"></script>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<div id="flipkart-navbar">
    <div class="container">
        <div class="row row1">
            <ul class="largenav pull-right">
                <li class="upper-links"><a class="links" href="../view/home.php">Productos</a></li>
                <li class="upper-links"><a class="links" href="../view/ventasUser.php">Ventas</a></li>
                
                
                <li class="upper-links dropdown"><a class="links" style="color: white;" href="#">Sesion</a>
                    <ul class="dropdown-menu">
                        <li class="profile-li"><a class="profile-links" href="../model/close.php">Cerrar sesion</a></li>
                        
                    </ul>
                </li>
            </ul>
        </div>
        <div class="row row2">
            <div class="col-sm-2">
                <h2 style="margin:0px; font-size: 10px;"><span class="smallnav menu" onclick="openNav()">☰ Muebleria "Jehova Nisi" y grupo V&S</span></h2>
                <h1 style="margin:0px; font-size: 15px;" ><span class="largenav">Muebleria "Jehova Nisi" y grupo V&S</span></h1>
                <span>Perfil User</span>
            </div>
            <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
                
            </div>
            
        </div>
    </div>
</div>
<div id="mySidenav" class="sidenav">
    <div class="container" style="background-color: #2874f0; padding-top: 10px;">
        <span class="sidenav-heading">Home</span>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    </div>
    <a href="../view/home.php">Productos</a>
    <a href="../view/ventas.php">Ventas</a>
    <a href="../view/proveedores.php">Proveedores</a>
    <a href="../model/close.php">Cerrar sesion</a>
</div>