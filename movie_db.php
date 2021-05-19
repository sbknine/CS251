<?php 
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['reg_movie'])) {
        $m_Name = mysqli_real_escape_string($conn, $_POST['m_Name']);
        $m_Rate = mysqli_real_escape_string($conn, $_POST['m_Rate']);
        $m_Type = mysqli_real_escape_string($conn, $_POST['m_Type']);
        $m_Language = mysqli_real_escape_string($conn, $_POST['m_Language']);
        $m_Time = mysqli_real_escape_string($conn, $_POST['m_Time']);
        $m_System = mysqli_real_escape_string($conn, $_POST['m_System']);

        $sql = "INSERT INTO movie (m_Name, m_Rate, m_Type, m_Language, m_Time, m_System) VALUES ('$m_Name', '$m_Rate', '$m_Type', '$m_Language', '$m_Time', '$m_System')";
            mysqli_query($conn,$sql);

        header('location: movie.php');
    }
?>