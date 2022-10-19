<?php
    session_start();
    require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>
    
    <div class="container mt-4">

      <?php include('message.php'); ?>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>DETALHES DO ALUNO:
                  <a href="create-crud.php" class="btn btn-primary float-end">Adicionar Estudante</a>
                </h4>
              </div>
            </div>
            <div class="card-body">

              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>ALUNO</th>
                    <th>EMAIL</th>
                    <th>CEL</th>
                    <th>CURSO</th>
                    <th>EDIÇÃO</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM students";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                      foreach($query_run as $student)
                      {
                        
                        ?>
                        <tr>
                          <td><?= $student['id']; ?></td>
                          <td><?= $student['name']; ?></td>
                          <td><?= $student['email']; ?></td>
                          <td><?= $student['phone']; ?></td>
                          <td><?= $student['course']; ?></td>
                          <td>
                            <a href="student-exibir.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">Exibir</a>
                            <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                            <form action="code.php" class="d-inline" method="POST">
                              <button type="submit" name="delete_student" value="<?=$student['id']; ?>" class="btn btn-danger btn-sm">Deletar</button>
                            </form>
                          </td>
                        </tr>
                        <?php
                      }
                    }else{
                      echo "<h5> Nenhum Registro Econtrado! </h5>";
                    }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php include('includes/footer.php'); ?>

    