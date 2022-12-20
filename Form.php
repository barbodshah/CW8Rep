<?php
$username = null;
$email = null;
$comment = null;

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['comment'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
}
?>
<html>
    <head>
        <link rel="stylesheet" type="text/CSS" href="myStyle.CSS" />
        <title>
            My Form
        </title>
    </head>
    <body>
        <h2>
            <a href="MainPage.php" > Page 1 </a> &nbsp;
            <a href="SecondPage.php" > Page 2 </a>
        <?php if($username && $email && $comment) { 

            $directory = getcwd()."/";
            $files = glob($directory ."*");
            $fileCount = count($files) - 4;

            $fileName = $fileCount . ".txt";

            $myfile = fopen($fileName, "w");

            fwrite($myfile, $username . PHP_EOL);
            fwrite($myfile, $email . PHP_EOL);
            fwrite($myfile, $comment);

            fclose($myfile);
            ?>
            <p>Your Response has been submitted</p>
        <?php } ?>
        <form method="post" action="">
            <label>
                Enter your username:
                <input name="username" type="text"/>
                <br>
            </label>
            <label>
                Enter your email:
                <input name="email" type="email"/>
                <br><br>
            </label>
            <label>your comment:</label>
            <textarea name="comment"></textarea>
            <br><br>
            <input type="submit" width="500px" onclick="Clicked()"  value="submit"/>
        </form>
        </h2>
    </body>
</html>