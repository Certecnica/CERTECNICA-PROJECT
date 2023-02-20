
<aside class="main-sidebar">
    <section class="sidebar">
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
    <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'] . ' ' . $user['lastname']; ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">REPORTES</li>
        <li class=""><a href="home.php"><iconify-icon icon="ion:speedometer-outline"></iconify-icon> <span>Panel de Control</span></a></li>
        <li class="header">ADMINISTRACIÓN</li>
  
        <li class="treeview">
          <a href="#">
          <iconify-icon icon="ion:exit-outline" rotate="180deg"></iconify-icon>
          <span>Permisos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="solicitudes_permisos.php"><iconify-icon icon="material-symbols:check-box"></iconify-icon> Solicitudes Aprobadas</a></li>
          <li><a href="solicitudes_rechazadas.php"><iconify-icon icon="material-symbols:cancel"></iconify-icon> Solicitudes Rechazadas</a></li>
          <li><a href="solicitudes_pendientes.php"><iconify-icon icon="material-symbols:warning"></iconify-icon> Solicitudes Pendientes</a></li>
          <li><a href="solicitudes_historial.php"><iconify-icon icon="material-symbols:history-rounded"></iconify-icon></i>Historial Solicitudes</a></li>
    </ul>
        </li>

        <li class="treeview">
          <a href="#">
<i class="fa fa-money" aria-hidden="true"></i>
          <span>Prestamos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="prestamos_aprobadas.php"><iconify-icon icon="material-symbols:check-box"></iconify-icon> Solicitudes Aprobadas</a></li>
          <li><a href="prestamos_rechazadas.php"><iconify-icon icon="material-symbols:cancel"></iconify-icon> Solicitudes Rechazadas</a></li>
          <li><a href="prestamos_pendientes.php"><iconify-icon icon="material-symbols:warning"></iconify-icon> Solicitudes Pendientes</a></li>
          <li><a href="prestamos_historial.php"><iconify-icon icon="material-symbols:history-rounded"></iconify-icon></i>Historial Solicitudes</a></li>
    </ul>
        </li>

        <li><a href="solicitud_vacaciones.php"><i class="fa fa-calendar" aria-hidden="true"></i>
Solicitar Vacaciones</a></li>
        <li><a href="includes/logout.php"><i class="fa fa-suitcase"></i>Cerrar Sesión</a></li>
    
    </section>
  </aside>

























  