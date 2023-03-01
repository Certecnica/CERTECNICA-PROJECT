
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
        <li class=""><a href="home.php"><iconify-icon icon="ion:speedometer-outline"></iconify-icon><span>Panel de Control</span></a></li>
        <li class="header">SOLICITUDES</li>
  
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
          <li><a href="prestamos_aprobadas.php"><iconify-icon icon="material-symbols:check-box"></iconify-icon> Préstamos aprobados</a></li>
          <li><a href="prestamos_rechazadas.php"><iconify-icon icon="material-symbols:cancel"></iconify-icon> Préstamos rechazados </a></li>
          <li><a href="prestamos_pendientes.php"><iconify-icon icon="material-symbols:warning"></iconify-icon>  Préstamos pendientes </a></li>
          <li><a href="prestamos_historial.php"><iconify-icon icon="material-symbols:history-rounded"></iconify-icon></i>Historial préstamos</a></li>
    </ul>
        </li>
<?php   if($user['position_id'] == '16'){?>
        <li class="treeview">
          <a href="#">
          <iconify-icon icon="ion:exit-outline" rotate="180deg"></iconify-icon>
          <span> Solicitudes Comercial </span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="comercial_pendientes.php"><iconify-icon icon="material-symbols:check-box"></iconify-icon> Solicitudes Pendientes</a></li>
          <li><a href="comercial_rechazadas.php"><iconify-icon icon="material-symbols:cancel"></iconify-icon> Solicitudes Rechazadas</a></li>
          <li><a href="comercial_aprobadas.php"><iconify-icon icon="material-symbols:warning"></iconify-icon> Solicitudes Aprobadas</a></li>
          <li><a href="comercial_historial.php"><iconify-icon icon="material-symbols:history-rounded"></iconify-icon></i> Historial Solicitudes</a></li>
    </ul>
        </li>
        <?php
}
?>
<?php   if($user['position_id'] == '9'){?>
        <li class="treeview">
          <a href="#">
          <iconify-icon icon="ion:exit-outline" rotate="180deg"></iconify-icon>
          <span>Solicitudes Tecnica</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="tecnica_pendientes.php"><iconify-icon icon="material-symbols:check-box"></iconify-icon> Solicitudes Pendientes</a></li>
          <li><a href="tecnica_rechazadas.php"><iconify-icon icon="material-symbols:cancel"></iconify-icon>  Solicitudes Rechazadas</a></li>
          <li><a href="tecnica_aprobadas.php"><iconify-icon icon="material-symbols:warning"></iconify-icon> Solicitudes Aprobadas</a></li>
          <li><a href="tecnica_historial.php"><iconify-icon icon="material-symbols:history-rounded"></iconify-icon></i> Historial Solicitudes</a></li>
    </ul>
        </li>
        <?php
}
?>
<?php   if($user['position_id'] == '20'){?>
        <li class="treeview">
          <a href="#">
          <iconify-icon icon="ion:exit-outline" rotate="180deg"></iconify-icon>
          <span>Solicitudes Administrativo</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="administrativa_pendientes.php"><iconify-icon icon="material-symbols:check-box"></iconify-icon> Solicitudes Pendientes</a></li>
          <li><a href="administrativa_rechazadas.php"><iconify-icon icon="material-symbols:cancel"></iconify-icon>  Solicitudes Rechazadas</a></li>
          <li><a href="administrativa_aprobadas.php"><iconify-icon icon="material-symbols:warning"></iconify-icon> Solicitudes Aprobadas</a></li>
          <li><a href="administrativa_historial.php"><iconify-icon icon="material-symbols:history-rounded"></iconify-icon></i> Historial Solicitudes</a></li>
    </ul> 
        </li>
        <?php
}
?>

<?php   if($user['position_id'] == '21'){?>
        <li class="treeview">
          <a href="#">
          <iconify-icon icon="ion:exit-outline" rotate="180deg"></iconify-icon>
          <span> Solicitudes Calidad </span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="calidad_pendientes.php"><iconify-icon icon="material-symbols:check-box"></iconify-icon> Solicitudes Pendientes</a></li>
          <li><a href="calidad_rechazadas.php"><iconify-icon icon="material-symbols:cancel"></iconify-icon>  Solicitudes Rechazadas</a></li>
          <li><a href="calidad_aprobadas.php"><iconify-icon icon="material-symbols:warning"></iconify-icon> Solicitudes Aprobadas</a></li>
          <li><a href="calidad_historial.php"><iconify-icon icon="material-symbols:history-rounded"></iconify-icon></i> Historial Solicitudes</a></li>
    </ul> 
        </li>
        <?php
}
?>

<?php   if($user['position_id'] == '24'){?>
        <li class="treeview">
          <a href="#">
          <iconify-icon icon="ion:exit-outline" rotate="180deg"></iconify-icon>
          <span>Solicitudes Empleados</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="DA_pendientes.php"><iconify-icon icon="material-symbols:check-box"></iconify-icon> Solicitudes Pendientes</a></li>
          <li><a href="DA_rechazadas.php"><iconify-icon icon="material-symbols:cancel"></iconify-icon> Solicitudes Rechazadas</a></li>
          <li><a href="DA_aprobados.php"><iconify-icon icon="material-symbols:warning"></iconify-icon> Solicitudes Aprobadas</a></li>
          <li><a href="DA_historial.php"><iconify-icon icon="material-symbols:history-rounded"></iconify-icon></i> Historial Solicitudes</a></li>
    </ul>
        </li>
        <?php
}
?>
<?php   if($user['position_id'] == '24'){?>
        <li class="treeview">
          <a href="#">
          <iconify-icon icon="ion:exit-outline" rotate="180deg"></iconify-icon>
          <span>Solicitudes Administrativa</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="administrativa_pendientes.php"><iconify-icon icon="material-symbols:check-box"></iconify-icon> Solicitudes Pendientes</a></li>
          <li><a href="administrativa_rechazadas.php"><iconify-icon icon="material-symbols:cancel"></iconify-icon> Solicitudes Rechazadas</a></li>
          <li><a href="administrativa_aprobadas.php"><iconify-icon icon="material-symbols:warning"></iconify-icon> Solicitudes Aprobadas</a></li>
          <li><a href="administrativa_historial.php"><iconify-icon icon="material-symbols:history-rounded"></iconify-icon></i> Historial Solicitudes</a></li>
    </ul>
        </li>
        <?php
 }
?>
<?php   if($user['position_id'] == '24'){?>
        <li class="treeview">
          <a href="#">
          <i class="fa fa-money" aria-hidden="true"></i>
          <span> Solicitudes Prestamos</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="DA_prestamos_pendientes.php"><iconify-icon icon="material-symbols:check-box"></iconify-icon> Solicitudes Pendientes</a></li>
          <li><a href="DA_prestamos_rechazadas.php"><iconify-icon icon="material-symbols:cancel"></iconify-icon> Solicitudes Rechazadas</a></li>
          <li><a href="DA_prestamos_aprobadas.php"><iconify-icon icon="material-symbols:warning"></iconify-icon> Solicitudes Aprobadas</a></li>
    </ul>
        </li>
        <?php
 }
?>
        <li><a href="solicitud_vacaciones.php"><i class="fa fa-calendar" aria-hidden="true"></i> Vacaciones </a></li>
        <li><a href="includes/logout.php"><i class="fa fa-suitcase"></i>Cerrar Sesión</a></li>
    </section>
  </aside>

























  