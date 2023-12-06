<html>
    <body>
        <?php

        if(isset($_GET['error'])){
            echo "enter a valid username or password";
        }
        ?>

        <form action="authontication.php" method="POST">
            Username : 
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <input type="submit" name="btnlogin" value="login">
        </form>

        
    </body>
</html>