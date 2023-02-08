<?php
    include "includes/header.php";
?>

<main>
    <h1>Log In</h1>
    <form action="login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Log In">
    </form>
</main>

<?php
    include "includes/footer.php";
?>
