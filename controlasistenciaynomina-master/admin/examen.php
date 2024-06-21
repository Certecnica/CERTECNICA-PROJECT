<?php include 'includes/session.php'; ?>

<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Lista de Administradores
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Administradores</li>
        <li class="active">Lista de Administradores</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i>¡Proceso Exitoso!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
    <div class="container-fluid admin">
        <div class="card col-md-5 offset-2">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th>Quiz</th>
                        <th>Items</th>
                        <th>Status</th>
                        <th>Had Taken</th>
                    </thead>
                    <tbody>
                        <?php 
                            $where = '';
                            if($_SESSION['admin'] ){
                                $where = " where u.id = ".$_SESSION['login_id']." ";
                            }
                            if($_SESSION['admin'] ){
                                $where = " where q.id in (SELECT quiz_id from quiz_student_list where user_id = '".$_SESSION['login_id']."') ";
                            }
                            $qry = $conn->query("SELECT q.*,u.name as fname from quiz_list q left join users u on q.user_id = u.id ".$where." order by q.title asc ");
                                while($row= $qry->fetch_assoc()){
                                    $items = $conn->query("SELECT count(id) as item_count from questions where qid = '".$row['id']."' ")->fetch_array()['item_count'];
                                    $swhere ='';
                                     if($_SESSION['login_user_type'] == 3)
                                        $swhere= ' and user_id = '.$_SESSION['login_id'].' ';

                                    $taken = $conn->query("SELECT count(id) as item_count from answers where quiz_id = '".$row['id']."'  ".$swhere )->fetch_array()['item_count'];
                        ?>
                        <tr>
                        <td><?php echo $row['title'] ?></td>
                        <td class='text-center'><?php echo $items ?></td>
                        <?php if($_SESSION['login_user_type'] == 3): ?>
                        <td class='text-center'><?php echo $taken > 1 ? 'Taken' : 'Pending' ?></td>
                        <?php else: ?>
                        <td class='text-center'><?php echo $taken ?></td>
                        <?php endif; ?>
                        </tr>
                        <?php
                        }

                        ?>
                    </tbody>  
                </table>
            </div>
        </div>
       </div>
</body>
</html>