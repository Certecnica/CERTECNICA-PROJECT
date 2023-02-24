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
        
        <li><a href="attendance.php"><i class="fa fa-calendar"></i> <span>Asistencia</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Empleados</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="employee.php"><i class="fa fa-circle-o"></i> Lista de Empleados</a></li>
            <li><a href="modificacion_cargo.php"><i class="fa fa-circle-o"></i>Modificación de Cargo</a></li>
            <li><a href="emp_info_corporativa.php"><i class="fa fa-circle-o"></i>Información Corporativa</a></li>
            <li><a href="salarios.php"><i class="fa fa-circle-o"></i>Salarios</a></li>
            <li><a href="dotacion.php"><i class="fa fa-circle-o"></i>Dotación</a></li>
            <li><a href="sanciones.php"><i class="fa fa-circle-o"></i>Sanciones</a></li>
            <li><a href="overtime.php"><i class="fa fa-circle-o"></i> Tiempo Extra</a></li>
            <li><a href="cashadvance.php"><i class="fa fa-circle-o"></i> Adelanto en Efectivo</a></li>
            <li><a href="schedule.php"><i class="fa fa-circle-o"></i> Horarios</a></li>
            <li><a href="Admin.php"><i class="fa fa-circle-o"></i>Añadir Administrador</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Solicitudes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="historia_solicitudes.php"><i class="fa fa-circle-o"></i> Todas las Solicitudes</a></li>
            <li><a href="Aprobadas.php"><i class="fa fa-circle-o"></i> Aprobadas</a></li>
            <li><a href="admin_solicitudes.php"><i class="fa fa-circle-o"></i> Pendientes</a></li>
            <li><a href="No_aprobadas.php"><i class="fa fa-circle-o"></i> No Aprobadas</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Examenes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="manage_exam.php"><i class="fa fa-circle-o"></i>Crear Examen</a></li>
            <li><a href="index_quiz.php"><i class="fa fa-circle-o"></i>Examenes Creados</a></li>
            <li><a href="nueva_pregunta.php"><i class="fa fa-circle-o"></i>Nueva Pregunta</a></li>
            <li><a href="listado_preguntas.php"><i class="fa fa-circle-o"></i>Editar Preguntas</a></li>
          </ul>
        </li>
        <li><a href="index_calendario.php"><i class="fa fa-calendar" aria-hidden="true"></i></i>Calendario Certecnica</a></li>
        <li><a href="excel.php"><i class="fa fa-clock-o" aria-hidden="true"></i></i>Llegadas</a></li>
        <li><a href="documentos.php"><i class="fa fa-file-text-o" aria-hidden="true"></i></i>Documentación Empleados</a></li>
        <li><a href="deduction.php"><i class="fa fa-file-text"></i> Deducciones</a></li>
        <li><a href="position.php"><i class="fa fa-suitcase"></i> Cargos</a></li>
         
    
        <li class="header">IMPRIMIBLES</li>
        <li><a href="payroll.php"><i class="fa fa-files-o"></i> <span>Nómina</span></a></li>
        <li><a href="schedule_employee.php"><i class="fa fa-clock-o"></i> <span>Horarios</span></a></li>
    
    </section>
  </aside>