<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/ed62d1b56e.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="sass/style.css" />
    <title>Hotel Management</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="nav">
        <div class="container-fluid">
            <div class="logo_content">
                <img src="img/favicon.png" class="logo_img img-fluid" alt="logo" />
                <a class="navbar-brand" href="#">Book Hotels</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Book</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Places</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bg_1">
        <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg"
            class="transition duration-300 ease-in-out delay-150">
            <defs>
                <linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%">
                    <stop offset="5%" stop-color="#002bdc88"></stop>
                    <stop offset="95%" stop-color="#32ded488"></stop>
                </linearGradient>
            </defs>
            <path
                d="M 0,600 C 0,600 0,200 0,200 C 106.88995215311004,202.42105263157896 213.7799043062201,204.84210526315792 292,220 C 370.2200956937799,235.15789473684208 419.77033492822966,263.05263157894734 528,265 C 636.2296650717703,266.94736842105266 803.1387559808612,242.94736842105266 912,223 C 1020.8612440191388,203.05263157894734 1071.6746411483255,187.15789473684208 1150,184 C 1228.3253588516745,180.84210526315792 1334.1626794258373,190.42105263157896 1440,200 C 1440,200 1440,600 1440,600 Z"
                stroke="none" stroke-width="0" fill="url(#gradient)"
                class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
            <defs>
                <linearGradient id="gradient" x1="0%" y1="50%" x2="100%" y2="50%">
                    <stop offset="5%" stop-color="#002bdcff"></stop>
                    <stop offset="95%" stop-color="#32ded4ff"></stop>
                </linearGradient>
            </defs>
            <path
                d="M 0,600 C 0,600 0,400 0,400 C 105.1866028708134,400.488038277512 210.3732057416268,400.97607655502395 297,388 C 383.6267942583732,375.02392344497605 451.6937799043062,348.5837320574163 556,363 C 660.3062200956938,377.4162679425837 800.8516746411483,432.688995215311 902,431 C 1003.1483253588517,429.311004784689 1064.8995215311006,370.66028708133973 1148,356 C 1231.1004784688994,341.33971291866027 1335.5502392344497,370.66985645933016 1440,400 C 1440,400 1440,600 1440,600 Z"
                stroke="none" stroke-width="0" fill="url(#gradient)"
                class="transition-all duration-300 ease-in-out delay-150 path-1"></path>
        </svg>
    </div>
    <section class="container mt-5" id="showUser">
        
    </section>
    <section class="container formg1">
        <form>
            <div class="mb-3 w-75 m-auto">
                <label for="exampleDataList" class="form-label">Hotels </label>
                <input class="form-control" list="datalistOptions" id="exampleDataList"
                    placeholder="Type to search hotel">
                <datalist id="datalistOptions">
                </datalist>
            </div>
            <div class="row">
                <div class="mb-3 col-3">
                    <label for="name1">Name</label>
                    <input type="text" class="form-control" id="name1" placeholder="Name">
                </div>
                <div class="mb-3 col-3">
                    <label for="floatingInput">Email address</label>
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                </div>
                <div class="mb-3 col-3">
                    <label for="date1">Check In</label>
                    <input type="date" class="form-control" id="fdate1">
                </div>
                <div class="mb-3 col-3">
                    <label for="date2">Check Out</label>
                    <input type="date" class="form-control" id="date2">
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary" id="btnF">Submit</button>

            </div>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- <script src="js/index.js"></script> -->
    <script src="js/new.js"></script>

</body>

</html>