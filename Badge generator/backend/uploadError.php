<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Badge generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://sslcdn.proz.com/images/32_profile_placeholder.png">
    <link rel="stylesheet" href="../css/error.css">

</head>

<body>

<?php
session_start();

$err = $_SESSION['uploadErr'];

//header("Location: ../frontend/info.html");
    session_unset();
    session_destroy();

?>


<script>
    setTimeout(function(){
        window.location.replace("../frontend/info.html");
        window.location.href = "../frontend/info.html";
    }, 5000);
</script>
<h1 class="error"><span> <?php echo $err; ?> </span></h1>


</body>
</html>
