<?php
if (isset($_POST['submit'])) {
    include('dbcon.php');
    function input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = input($_POST['name']);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
    {
        $nameErr = "Only letters and white space allowed";
    }
    $contact = input($_POST['contact']);
    $date = $_POST['date'];
    $time = $_POST['time'];
    $branch = $_POST['branch'];
    $services = $_POST['service'];
    $serv = "";

    foreach ($services as $ser) {
        $serv .= $ser . ',';
    }

    

    if ($gender == "male") {
        $qry = "INSERT INTO `male`(`name`, `contact`, `services`, `date`, `time`, `branch`) VALUES ('$name','$contact','$serv','$date','$time','$branch')";
    } else {
        $qry = "INSERT INTO `female`(`name`, `contact`, `services`, `date`, `time`, `branch`) VALUES ('$name','$contact','$serv','$date','$time','$branch')";
    }
    $run = mysqli_query($con, $qry);

    if ($run == true) {
        ?>
        <script>
            alert('Your Booking Has been done!!!');
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('An error encountered!');
        </script>
        <?php
    }
}
?>