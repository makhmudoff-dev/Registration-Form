<?php

declare (strict_types = 1);
ini_set('display_errors', '1');
error_reporting(E_ALL);

include 'reg.php';
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO registration (fname, lname, email, age, phone, gender)
            VALUE ('$fname', '$lname', '$email', '$age', '$phone', '$gender')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Wow!! Tabriklaymiz muvoffaqiyatlik yakunlandi.')</script>";
        $fname = "";
        $lname = "";
        $email = "";
        $age = "";
        $phone = "";
        $gender = "gender";
    } else {
        echo "<script>alert('Woops! Malumotlar xato yuborildi.')</script>";

    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
              <div class="card rounded-3">
                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/img3.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                <div class="card-body p-4 p-md-4">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 text-center">Registration Info</h3>

                  <form action="index.php" method="post" class="px-md-2">

                    <div class="form-outline mb-3">
                        <label class="form-label" for="firstName">First Name</label>
                      <input type="text" id="inp" class="form-control" name="fname"  />
                    </div>
                    <div class="form-outline mb-3">
                        <label class="form-label" for="lastName">Last Name</label>
                      <input type="text" id="inp" class="form-control" name="lname" />
                    </div>
                    <div class="form-outline mb-3">
                        <label class="form-label" for="email">Email</label>
                      <input type="text" id="inp" class="form-control" name="email"/>
                    </div>
                    <div class="form-outline mb-3">
                        <label class="form-label" for="age">Age</label>
                      <input type="number" id="inp" class="form-control" name="age"/>
                    </div>
                    <div class="form-outline mb-3">
                        <label class="form-label" for="age">Phone Number</label>
                      <input type="number" id="inp" class="form-control" name="phone"/>
                    </div>


                      <div class="col-md-6 mb-4">

                        <select class="select" name="gender" ">
                          <option value="1">Gender</option>
                          <option value="2">Female</option>
                          <option value="3">Male</option>
                          <option value="4">Other</option>
                        </select>

                      </div>

                    <button type="submit" class="btn btn-success btn-lg mb-1" name="submit">Submit</button>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
