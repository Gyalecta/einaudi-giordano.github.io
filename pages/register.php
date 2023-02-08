<?php
    include "includes/header.php";
?>

<main>
    <h1>Sign Up</h1>
    <form action="register.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Sign Up">
    </form>
</main>

<?php
    include "includes/footer.php";
?>
