<html> 
    <head> 
        <title> show data </title>
        <style>
            /* .container{
                border: "2";
            } */
            .btn{
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
        </style>
    </head>
    <body> 
        <center>
        <h2> Users Details </h2>  
        <a href = "form_lab4.php" target = "_blank"> <button class = "btn" > Add New User </button> </a>
        <table class = "container "  border="2">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>gender</td>
                <td>mail_status</td>
            </tr>
             <?php
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $dbname ='demo';
                $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
                
                if(! $conn ) {
                    die('Could not connect: ' . mysqli_error($conn));
                }
                $sql = 'SELECT users_id, users_name, users_email , users_gender , mail_status FROM users';
                mysqli_select_db($conn,$dbname);
                $result = mysqli_query($conn,$sql );
               

                while($row = mysqli_fetch_assoc($result))
                {
            ?>
            <tr>
                <td><?php echo $row['users_id']; ?></td>
                <td><?php echo $row['users_name']; ?></td>
                <td><?php echo $row['users_email']; ?></td>
                <td><?php echo $row['users_gender']; ?></td>
                <td><?php echo $row['mail_status']; ?></td>
            </tr>	
            <?php
            }
            ?> 
        </table>
        <?php mysqli_close($conn); ?>
        </center>   
    </body>
</html>