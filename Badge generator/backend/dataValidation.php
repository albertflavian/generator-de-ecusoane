
<?php
// define variables and set to empty values
$nameErr = $emailErr = $templateErr = $urlErr = $roleErr = $affiliationErr ="";
$name = $email = $template = $comment = $url = $role= $affiliation = $color="";
$dataErr = "Check the data before sending it!";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["role"])) {
        $roleErr = "This field is required";
    } else {
        $role = test_input($_POST["role"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$role)) {
            $roleErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["affiliation"])) {
        $affiliationErr = "This field is required";
    } else {
        $affiliation = test_input($_POST["affiliation"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$affiliation)) {
            $affiliationErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["url"])) {
        $url = "";
    } else {
        $url = test_input($_POST["url"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
            $urlErr = "Invalid URL";
        }
    }

    if (empty($_POST["template"])) {
        $templateErr = "Template is required";
    } else {
        $template = $_POST["template"];
    }

    $color=$_POST['culoare'];

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
