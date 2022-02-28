<html>
    <head>
        <title>Registration form</title>
    </head>
    <body>
        <form method = "post">
            <center> 
                <h1> User Registration Form</h1></br>
                <p>please fill this form and submit to add user record to the database</p></br>
                <label >Name</label></br>
                <input type = "text" name = "name"></br>
                <label >E-mail</label></br>
                <input type = "text" name = "email"></br>
                <label> gender </label> </br>
                <input type = "radio" name = "gender" value = "F">F
                <input type = "radio" name = "gender" value = "M">M
                </br>
                <input type = "checkbox" name = "checked" value = "yes">yes
                <input type = "checkbox" name = "checked" value = "no">no
                <label name = "Mail_status"> Receive E-mail from us </label>
                
                </br>
                <a href = "record.php" target = "_blank"> <button name = "submit" > submit </button> </a>
                <a href = "#" target = "_blank"> <button name = "cancel" > cancel </button> </a>
                
                
            </center>
        </form>
        <?php
           if(isset($_POST['submit']))
           {  
                $name = $_POST ['name'];
                $email = $_POST ['email'];
                $gender = $_POST ['gender'];
                $mail_status = $_POST['checked'];

                // connect to batabase
                $db_host = 'localhost';
                $db_user = 'root';
                $db_pass = '';
                $db_name ='demo';
                $conn = mysqli_connect($db_host, $db_user, $db_pass,$db_name);
                // check connection
                if(! $conn ) {
                    die('Could not connect: ' . mysqli_error($conn));
                }
                $sql = "insert into users (users_id , users_name , users_email , users_gender , mail_status ) VALUES ('0', '$name', '$email', '$gender' , '$mail_status')";
                $rs = mysqli_query($conn, $sql);
                if($rs)
                {
                    echo "Successfully saved";
                }
              //connection closed.
                mysqli_close($conn);
            }
        ?>
    </body>
</html>