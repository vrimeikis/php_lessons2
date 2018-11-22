<?php

declare(strict_types = 1);

session_start();

if (isset($_COOKIE['loggedin'])) {
    ?>

    <a href="/nov22/logout.php">Logout</a>

    <?php
} else {

    ?>

    <form action="/nov22/login.php" method="post">
        <input type="text" name="username" value="" placeholder="Username">
        <input type="password" name="password" value="" placeholder="Password">
        <input type="submit" name="submit" value="Login">
    </form>

    <?php
}

if (!empty($_SESSION['message'])) {
    echo $_SESSION['message'];
}

session_destroy();

