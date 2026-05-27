<?php

include("config/db.php");

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $query = "SELECT * FROM students WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    $student = mysqli_fetch_array($query_run);
}

if(isset($_POST['update_student']))
{
    $id = $_POST['id'];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $phone = $_POST['phone'];

    $query = "UPDATE students
              SET name='$name',
                  email='$email',
                  course='$course',
                  phone='$phone'
              WHERE id='$id'";

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        header("Location: view_students.php");
    }
    else
    {
        echo "Student Not Updated";
    }
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Edit Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-success text-white">

                    <h3 class="mb-0">
                        Edit Student
                    </h3>

                </div>

                <div class="card-body">

                    <form action="" method="POST">

                        <input type="hidden"
                               name="id"
                               value="<?= $student['id']; ?>">

                        <div class="mb-3">

                            <label class="form-label">
                                Name
                            </label>

                            <input type="text"
                                   name="name"
                                   value="<?= $student['name']; ?>"
                                   class="form-control"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Email
                            </label>

                            <input type="email"
                                   name="email"
                                   value="<?= $student['email']; ?>"
                                   class="form-control"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Course
                            </label>

                            <input type="text"
                                   name="course"
                                   value="<?= $student['course']; ?>"
                                   class="form-control"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Phone
                            </label>

                            <input type="text"
                                   name="phone"
                                   value="<?= $student['phone']; ?>"
                                   class="form-control"
                                   required>

                        </div>

                        <div class="d-grid">

                            <button type="submit"
                                    name="update_student"
                                    class="btn btn-success">

                                Update Student

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