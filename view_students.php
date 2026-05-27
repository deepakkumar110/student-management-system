<?php

include("config/db.php");

?>

<!DOCTYPE html>
<html>
<head>

    <title>View Students</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">

            <h3 class="mb-0">Student List</h3>

            <a href="add_student.php"
               class="btn btn-primary">

               Add Student

            </a>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="table-dark">

                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Phone</th>
                            <th width="180">Action</th>
                        </tr>

                    </thead>

                    <tbody>

                    <?php

                    $query = "SELECT * FROM students";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $student)
                        {
                            ?>

                            <tr>

                                <td><?= $student['id']; ?></td>

                                <td><?= $student['name']; ?></td>

                                <td><?= $student['email']; ?></td>

                                <td><?= $student['course']; ?></td>

                                <td><?= $student['phone']; ?></td>

                                <td>

                                    <a href="edit_student.php?id=<?= $student['id']; ?>"
                                       class="btn btn-success btn-sm">

                                       Edit

                                    </a>

                                    <a href="delete_student.php?id=<?= $student['id']; ?>"
                                       class="btn btn-danger btn-sm">

                                       Delete

                                    </a>

                                </td>

                            </tr>

                            <?php
                        }
                    }
                    else
                    {
                        ?>

                        <tr>
                            <td colspan="6" class="text-center">
                                No Record Found
                            </td>
                        </tr>

                        <?php
                    }

                    ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>