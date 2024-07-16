<form action="welcome.php" method="POST">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
<body>
    Welcome <?php echo $_POST["name"]; ?><br>
    Email: <?php echo $_POST["email"]; ?>
</body>


<?php
    echo "Hello World";



    