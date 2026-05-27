<?php

include("config/db.php");

$message = "";

if(isset($_POST['save_student']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO students(name,email,course,phone)
              VALUES('$name','$email','$course','$phone')";

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $message = "Student Added Successfully";
    }
    else
    {
        $message = "Student Not Added";
    }
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Add Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Add Student</h3>
                </div>

                <div class="card-body">

                    <?php
                    if($message != "")
                    {
                        echo "<div class='alert alert-success'>$message</div>";
                    }
                    ?>

                    <form action="" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Name</label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>

                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Course</label>

                            <input type="text"
                                   name="course"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>

                            <input type="text"
                                   name="phone"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="d-grid">
                            <button type="submit"
                                    name="save_student"
                                    class="btn btn-primary">

                                Save Student

                            </button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>