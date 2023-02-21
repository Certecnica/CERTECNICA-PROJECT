
<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">REPORTES</li>
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Panel de Control</span></a></li>
        <li class="header">ADMINISTRACIÓN</li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Empleados</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="employee.php"><i class="fa fa-address-book-o" aria-hidden="true"></i>
</i>Creacion Empleados</a></li>
            <li><a href="listar_beneficiarios.php"><i class="fa fa-child" aria-hidden="true"></i>
</i>Beneficiarios</a></li>
            <li><a href="emp_info_corporativa.php"><i class="fa fa-info-circle" aria-hidden="true"></i>
</i>Información Corporativa</a></li>
            <li><a href="salarios.php"><i class="fa fa-money" aria-hidden="true"></i>
Salarios</a></li>
            <li><a href="dotacion.php"><i class="fa fa-circle-o"></i>Dotación</a></li>
            <li><a href="sanciones.php"><i class="fa fa-times-circle" aria-hidden="true"></i>
Sanciones</a></li>
<li><a href="entregas.php"><i class="fa fa-check-square" aria-hidden="true"></i>
Entrega</a></li0>
            <li><a href="schedule_employee.php"><i class="fa fa-clock-o"></i> <span>Horarios</span></a></li>
            <li><a href="Admin.php"><i class="fa fa-lock" aria-hidden="true"></i>
</i>Añadir Administrador</a></li>
            <li><a href="documentos.php"><i class="fa fa-file-text-o" aria-hidden="true"></i></i>Documentación Empleados</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
          <i class="fa fa-sign-out" aria-hidden="true"></i>
          <span>Solicitudes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="admin_solicitudes.php"><i class="fa fa-exclamation" aria-hidden="true"></i>
 Pendientes</a></li>
          <li><a href="Aprobadas.php"><i class="fa fa-check" aria-hidden="true"></i>
 Aprobadas</a></li>
          <li><a href="No_aprobadas.php"><i class="fa fa-times-circle" aria-hidden="true"></i>
 No Aprobadas</a></li>
            <li><a href="historia_solicitudes.php"><i class="fa fa-history" aria-hidden="true"></i>
 Todas las Solicitudes</a></li>
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
          <li><a href="prestamos_pendientes.php"><i class="fa fa-exclamation" aria-hidden="true"></i>
 Pendientes por aprobación</a></li>
 <li><a href="prestamos_rechazados.php"><i class="fa fa-ban" aria-hidden="true"></i>
Solicitudes Rechazadas </a></li>
          <li><a href="prestamos_curso.php"><i class="fa fa-check" aria-hidden="true"></i>
 Prestamos en curso</a></li>
          <li><a href="prestamos_finalizados.php"><i class="fa fa-times-circle" aria-hidden="true"></i>
 Finalizados</a></li>
            <li><a href="solicitudes_total.php"><i class="fa fa-history" aria-hidden="true"></i>
 Todas las Solicitudes</a></li>
          </ul>
        </li>
        <li><a href="index_calendario.php"><i class="fa fa-calendar" aria-hidden="true"></i></i>Calendario Certecnica</a></li>
        <li><a href="position.php"><i class="fa fa-suitcase"></i> Cargos</a></li>
        <li><a href="vacaciones.php"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
 Vacaciones Totales </a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Encuestas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
    </section>
  </aside>