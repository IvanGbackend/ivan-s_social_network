<?php include "inc/header.php"; 
login_check_pages();
?>
<div>
<div>
        <?php display_message(); ?>
        <?php validate_user_login(); ?>
    
</div>

<form method="POST">
    <input type="email" name="email" placeholder="E-mail" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" name="login-submit" value="Log In" required>
</form>
<?php include "inc/footer.php"; ?>