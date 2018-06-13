

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Badge generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body  >

<?php include "../backend/dataValidation.php" ?>


<div class="box">
    <div class="row" >
        <br>
        <div class="container" >
            <a id="top" class="column" title="home" href="home.html" >Home</a>
            <a class="column" title="generator" href="choose.html">Badge generator</a>
            <a class="column" title="about" href="about.html">About</a>
        </div>
    </div>
    <br>
</div>


<hr>
<!-- START 	-->

<div class="box">
    <br>
    <h1 style="text-align: left; padding-left: 15%">Select a template:</h1>
    <br>
    <form  id="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
    <div  class="template-containter" >
                <div style="padding: 4%;">
                <label >
                    <input type="radio" name="template" <?php if (isset($template) && $template=="1") echo "checked";?> value="1" required/> Template 1<br>
                    <img class="myImg"  title="click to select"  src="../image/temp01.jpg">
                </label>
                </div>

               <div style="padding: 4%">
                   <label>
                        <input type="radio" name="template" <?php if (isset($template) && $template==2) echo "checked";?> value="2" required/> Template 2<br>
                        <img class="myImg"  title="click to select"  src="../image/temp02.jpg">
                    </label>
                </div>

                <div style="padding: 4%" >
                    <label>
                        <input type="radio" name="template" <?php if (isset($template) && $template==3) echo "checked";?> value="3" required/> Template 3<br>
                        <img class="myImg"  title="click to select"  src="../image/temp03.jpg">
                    </label>
                </div>




    </div>

        <hr>


    <div class="row" style="font-size: x-large; max-width: 80%; padding-left: 15%; padding-right: 15%">

    <h2 style="text-align: left">Insert data:    </h2>
        <p style="text-align: left"><span class="error" >* required field</span></p>
    <div class="container" >

            <div class="columnTwo">
            <label >Name:   </label><br>
            <input type="text"  name="name" placeholder="your name..." value="<?php echo $name;?>" required>
                <span class="error">* <?php echo $nameErr;?></span>
            </div>
            <div class="columnTwo" style="padding-left: 10%;">
            <label >Affiliation: </label><br>
            <input type="text"  name="affiliation" placeholder="affiliation..." value="<?php echo $affiliation;?>" required>
                <span class="error">* <?php echo $affiliationErr;?></span>
            </div>
    </div>
    </div>
        <br><br>
        <div class="row" style="font-size: x-large; max-width: 80%; padding-left: 15%; padding-right: 15%">
            <div class="container" >

            <div class="columnTwo">
            <label >Role:  </label><br>
            <input type="text"  name="role" placeholder="your role..." value="<?php echo $role;?>" required>
                <span class="error">* <?php echo $roleErr;?></span>
            </div>

                <div class="columnTwo" style="padding-left: 10%">
                    <label >URL:  </label><br>
                    <input type="text"  name="url" placeholder="url..."value="<?php echo $url;?>" required>
                    <span class="error">* <?php echo $urlErr;?></span>
                </div>
                <br>
        <br><br>
        <br>

            </div></div>

        <div class="row" style="font-size: x-large; max-width: 80%; padding-left: 15%; padding-right: 15%">
            <div class="container" >

                <div class="columnTwo">
                    <label >eMail:  </label><br>
                    <input type="text"  name="email" placeholder="your email..." value="<?php echo $email;?>" required>
                    <span class="error">* <?php echo $emailErr;?></span>
                </div>


                <br>
                <br><br>
                <br>

            </div></div>
            <hr>
            <div class="row" style="font-size: x-large; max-width: 80%; padding-left: 15%; padding-right: 15%">
                <br>
                <!-- <h3 style="text-align: left"> Choose a color: </h3> -->

        <div  style="align-content: left; text-align: left; font-size: 150%; font-weight: bold">

             Choose a color:
            <input name="culoare" type="color"id="valoareculoare" value="<?php echo $color?>">
        </div>
        <br><br></div>
        <hr>
        <div class="row" style="font-size: x-large; max-width: 80%; padding-left: 15%; padding-right: 15%; text-align: left" >
        <div>
        <br>
        <h2 style="text-align: left"> Upload image:</h2>
            Select a image to upload:
        <input type="file" name="fileToUpload" id="yourPhoto"  >

        </div>


            </div>
        <br><br><br>



        <hr><br>
        <div style="text-align: center">
            <?php

            echo(' <input type="submit" name="submit" value="Check data"> ');

            if ($nameErr == "" && $emailErr == "" && $templateErr == "" && $urlErr == "" && $name != "")
            {

                echo(' <input formaction="../backend/info.php" type="submit" name="submit" value="Submit"> ');
                echo(' <span class="error">'); echo $dataErr; echo('</span>');

            }
            ?>


        </div>
        <br>

    </form>

<br>
</div>






<div style=";padding:15px;">



    <div class="bottom">
        <p ><i>© Popa Albert, Dulan Dragos & Alexa Geo</i></p>
    </div>

    <div class="bottom">
        <a id="goTop" href="#top"  >Go to top </a>

    </div>


</div >

<br><br>

</body>
</html>


