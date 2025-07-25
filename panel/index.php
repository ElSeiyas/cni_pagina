<?php
session_start();
include('conexion.php');
$usuario=$_SESSION['s_usuario'];
if($_SESSION["s_usuario"] === null){
header("Location: ../index.php");
}
else{
include('conexion.php');
$pro=$conexion->query("SELECT codigo,nombres,apellidos,dni,celular,usuario,password,foto,cargo FROM  usuario where usuario='$usuario' ");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISTEMA I.E C.N.I-IMPERIAL</title>
    
    


      <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
    <link rel="icon" type="image/png" href="img/icons/logo.ico"/>
     <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
     <!--datables CSS básico-->
<!--    <link rel="stylesheet" type="text/css" href="vendor/datatables/datatables.min.css">-->
    <!--datables estilo bootstrap 4 CSS-->  
   <!-- <link rel="stylesheet"  type="text/css" href="vendor/datatables/DataTables-1.10.23/css/dataTables.bootstrap4.min.css">-->
    
   <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  

    
     <!--<link rel="stylesheet"  type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
  <!--  
   <link rel="stylesheet"  type="text/css" href="vendor/datatables/Buttons-1.6.5/css/buttons.dataTables.min.css">
    -->
<!--
    <link rel="stylesheet"  type="text/css" href="vendor/datatables/DataTables-1.10.23/css/jquery.dataTables.min.css">  
    
-->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate">
                    <img src="img/logo.png" alt="" width="50%" height="50%"/>
                </div>
                <div class="sidebar-brand-text mx-1">I.E C.N.I-IMPERIAL <sup></sup></div>
               
                 
            </a>
             
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
<?php
if ($reg=mysqli_fetch_array($pro)) {         
 if ($reg['cargo']==  "administrador") {
?>
            <!-- Nav Item - Dashboard -->
              <li class="nav-item active">
                <a class="nav-link" href="usuarios.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>USUARIOS</span></a>
            </li>
<?php
}
if ($reg['cargo'] == "secretario" || $reg['cargo']=="administrador" ) {
?>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-female"></i>
                    <span>SECRETARIA</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!--<h6 class="collapse-header">Custom Components:</h6>-->
                         <a class="collapse-item" href="admision.php"><i class="fas fa-fw fa-file-alt"></i>
                    <span>ADMISION 2021</span></a>
                        <a class="collapse-item" href="mesa_de_partes.php"><i class="fas fad fa-tasks"></i>
                    <span>MESA DE PARTES</span></a>
                    </div>
                </div>
            </li>
<?php
}
if ($reg['cargo']=="toe" || $reg['cargo']=="administrador") {
?>
 <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>AREA DE T.O.E</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       <!-- <h6 class="collapse-header">Custom Utilities:</h6>-->
                         <a class="collapse-item" href="incidencias.php">  <i class="fas fa-fw fa-file-alt"></i>
                    <span>INCIDENCIAS</span></a>
                       <!-- <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>-->
                    </div>
                </div>
            </li>

<?php
}
if ($reg['cargo']=="bibliotecario" || $reg['cargo']=="administrador") {
?>
         <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas far fa-book-open"></i>
                    <span>BIBLIOTECA</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       <!-- <h6 class="collapse-header">INVENTARIO</h6>-->
                        <a class="collapse-item" href="biblioteca.php"> <i class="fas far fa-book"></i><span> INVENTARIO</span></a>
                       <a class="collapse-item" href="solicitudes_libros.php"><i class="fas fa-fw fa-book-reader"></i><span> SOLICITUDES</span></a>
                       <!-- <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>-->
                    </div>
                </div>
            </li>
<?php
}
}
?>
            <!-- Nav Item - Charts -->
           <!-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>-->
<!--            </li>-->

            <!-- Nav Item - Tables -->
           <!-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>-->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
          <!--  <div class="sidebar-card">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>-->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                     
               

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    

                    <!-- Topbar Search -->
                    
                    
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                       <!-- <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>-->
                            <!-- Dropdown - Messages -->
                            <!--<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>-->
                        

                        <!-- Nav Item - Alerts -->
                    
                        <!-- Nav Item - Messages -->
                        

                       
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php

                                $pro=$conexion->query("SELECT codigo,nombres,apellidos,dni,celular,usuario,password,foto,cargo FROM  usuario where usuario='$usuario' ");
if ($resultado=mysqli_fetch_array($pro)) {
    echo $resultado['cargo']." ".$resultado['apellidos']." ".$resultado['nombres'];
    
    

?>

   </span>
                                <img class="img-profile rounded-circle"  src = " data: <?php  echo  $resultado[ 'apellidos' ]; ?> ; base64, <?php  echo   base64_encode ( $resultado[ 'foto' ]); ?> " >
                                
                            </a>
                        
                            <?php
}
    ?>
      
                                
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
               			
                                
                         <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"> </i>configuracion
                                   
                                </a>
                                
                           
                                
              
                                        <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                 
                                </a>
                                <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#examplemodal">>
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"> configuracion</i>
                                  
                                    
                                   
                                </a>-->
                              <!--  <div class="dropdown-divider"></div>-->
                               <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesion
                                </a>
                               	
                            </div>
                            				
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                
<?php
$consulta=$conexion->query("SELECT codigo,nombres,apellidos,dni,celular,usuario,password,foto, cargo FROM  usuario where usuario='$usuario' ");
 if ($reg=mysqli_fetch_array($consulta)) {                
?>
  <center><h1> BIENVENIDO AL SISTEMA DE LA I.E C.N.I-IMPERIAL</h1></center>
               
     
               <center> <h2><?php
     
    echo $reg['cargo'].": ".$reg['apellidos']." ".$reg['nombres'];
 }
     ?></h2> 
      </center>          
                            
                <center><img  width = " 350 "  height="350" src = " data: <?php  echo  $resultado[ 'apellidos' ]; ?> ; base64, <?php  echo   base64_encode ( $resultado[ 'foto' ]); ?> " > </center>      
            </div>
              
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span style="color: white;">Copyright &copy; I.E C.N.I-IMPERIAL 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

  </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background:#06368b">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" ><font color="white">Cerrar sesion</font></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" ><font color="white">×</font></span>
                    </button>
                </div>
                <div class="modal-body" style="background:#FFFF"><center>¿Esta seguro que desear cerrar sesion?</center></div>
                <div class="modal-footer" style="background:#FFFF">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="../bd/logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>
    
    
    <?php
$consulta=$conexion->query("SELECT codigo,nombres,apellidos,dni,celular,usuario,password,foto, cargo FROM  usuario where usuario='$usuario' ");
 if ($ir=mysqli_fetch_array($consulta)) {  


?>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar datos personales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
           <div class="container-fluid">
			<form method="POST" action="editarconfiguracion.php">
				<div class="form-row">
					   <div class="col-md-6 mb-3">
						<label >nombres:</label>
					
				
						<input type="text" class="form-control"  name="nombres"  value="<?php echo $ir['nombres']; ?>" disabled>
					
				</div>
				
					 <div class="col-md-6 mb-3">
						<label >apellidos:</label>
					
						<input type="text" class="form-control" name="apellidos" value="<?php echo $ir['apellidos']; ?>" disabled>
                    </div>
			
				 <div class="col-md-6 mb-3">
						<label >dni:</label>
				
				
						<input type="number" class="form-control" name="dni"      value="<?php echo $ir['dni']; ?>" disabled>
					</div>
					 <div class="col-md-6 mb-3">
				
						<label>celular</label>
					
						<input type="number" class="form-control" name="celular"    value="<?php echo $ir['celular']; ?>" >
					</div>
				 <div class="col-md-6 mb-3">
                	
						<label >usuario</label>
					
						<input type="text" class="form-control" name="usuario"  value="<?php echo $ir['usuario']; ?>" disabled >
					</div>
				 <div class="col-md-6 mb-3">
						<label >Contraseña</label>
					
						<input type="text" class="form-control" name="password"  value="<?php echo $ir['password']; ?>" >
					</div>
				<div class="col-md-6 mb-3">
						<label >Cargo</label>					
						<input type="text" class="form-control" name="cargo" value="<?php echo $ir['cargo']; ?>" disabled>
					
				</div>
             
				</div> 
          
        
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <input type="hidden" name="codigo" value="<?php echo $ir['codigo']; ?>">    
        <button type="submit" class="btn btn-success"  onclick="confirmar()" >Actualizar</button>
           </div>
                 
    
          </form>
           </div>
          
      </div>
            
      <?php

}
?>       
     
    </div>
  </div>
</div>
    
<!--    script para modal de configuracion de cuenta-->
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
    function confirmar(){
Swal.fire({
  position: 'right-end',
  icon: 'success',
  title: 'Dato ACtualizado!',
  showConfirmButton: false,
  timer: 1500
})
    };
</script>

    <!-- Bootstrap core JavaScript-->
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>



</body>

</html>