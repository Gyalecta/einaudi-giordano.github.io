<?php
    include "includes/header.php";

    $user_id = $_GET['id'];

    $user = getUserInfo($user_id);
?>

<main>
    <h1><?php echo $user['name']; ?>'s Profilo</h1>
    <p>Email: <?php echo $user['email']; ?></p>
    <p>Membro dal: <?php echo $user['join_date']; ?></p>
</main>

<?php
    include "includes/footer.php";
?>