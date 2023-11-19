<?php include "inc/header.php" ?>

<?php
    if(isset($_SESSION['email'])) : ?>
        <?php create_post(); ?>
        <br>

        <form method="POST">
            <h3>Create new post</h3>
            <textarea name="post_content" cols="60" rows="10" placeholder="Post your content..."></textarea>
            <input type="submit" value="Post" name="submit">
        </form>

        <div>
            <?php display_message(); ?>
        </div>
        <hr>

        <div class="posts">
            <?php fetch_all_posts(); ?>
        </div>


<?php else : ?>
    <div class="homepage">
        <h1>Welcome to Ivan's Social Network</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
        <h2>Click <a href="login.php">here</a> to login!</h2>
        <img src="css/img/social.jpeg" alt="">
    </div>    
<?php endif; ?>
<?php include "inc/footer.php";