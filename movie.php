<?php
session_start();
include('server.php');

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['s_email']);
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        h2 {
            background-color: #ffc600;
            height: 100px;
            font-size: 100px;
            margin: auto;
            width: 50%;
            padding: 10px;
            border-radius: 25px;
            text-align: center;

        }

        h3 {
            width: 50%;
            background-color: #ffc600;
            text-align: center;
            padding: 10px;
            margin: auto;
            height: 550px;
            border-radius: 25px;
        }

        input[Type=text] {
            padding: 13px;
            border-radius: 12px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>
    <div class="header">
        <h2>Movie</h2>
    </div>
    <br><br>
    <form action="movie_db.php" method="post">
        <!-- notification message-->
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <h3><br>
            <div class="input-group">

                <input type="text" name="m_Name" placeholder="Movie Name" size=50px required>
            </div><br>
            <div class="input-group">

                <input type="text" name="m_Rate" placeholder="Rate Movie" size=50px required>
            </div> <br>
            <div class="input-group">

                <input type="text" name="m_Type" placeholder="Type" size=50px required>
            </div> <br>
            <div class="input-group">

                <input type="text" name="m_Language" placeholder="Language" size=50px required>
            </div> <br>
            <div class="input-group">

                <input type="text" name="m_Time" placeholder="Time" size=50px required>
            </div> <br>
            <div class="input-group">

                <input type="text" name="m_System" placeholder="System" size=50px required>
            </div>
            <div class="input-group">
                <br><br>
                <button type="submit" name="reg_movie" class="btn">Submit</button>
                <?php if (isset($_SESSION['c_email'])) : ?>
                    <a href="index.php?logout='1'"><input type="button" class="btn" value="Logout"></button></a></li> 
                <?php else : ?>
                    <a href="login.php"><input type="button" class="btn" value="Login"></button></a></li> 
                <?php endif ?>
                
                <a href="food_drink.php"><input type="button" class="btn" value="Food&Drink"></button></a>
            </div>
        </h3>
    </form>

    <?php if (isset($_SESSION['s_email'])) : ?>
        <a href="index.php?logout='1'" style="color: red;">Logout</a></li>
    <?php else : ?>

    <?php endif ?>

    <body style='background-color:#464646'>
    </body>

</html>