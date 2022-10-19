<?php
    //session_start();
    require 'dbcon.php';
?>
    <?php include('includes/header.php'); ?>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Exibir Detalhes Do Estudante
                            <a href="index.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                            if(isset($_GET['id']))
                            {
                                $student_id = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT * FROM students WHERE id='$student_id' ";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    $student = mysqli_fetch_array($query_run);
                                
                        ?>         
                            
                            <div class="mb-3">
                                <label>Nome Do Estudante</label>
                                <p class="form-control">
                                    <?=$student['name']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Seu Melhor Email</label>
                                <p class="form-control">
                                    <?=$student['email']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Seu cel</label>
                                <p class="form-control">
                                    <?=$student['phone']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Seu Corso</label>
                                <p class="form-control">
                                    <?=$student['course']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Curso Do Estudante</label>
                                <p class="form-control">
                                    <?=$student['course'];?>
                                </p>
                            </div>

                            <?php
                                    }else{
                                        echo "<h4> ID Não Encontrado! </h4>";
                                    }
                                }
                            ?>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>