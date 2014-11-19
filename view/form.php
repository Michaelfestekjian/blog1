<?php
require_once(__DIR__ . "/../model/config.php");
?>

<center><h1>Create blog post</h1></center>
<!--this is to create a link to the blog post-->
<form method="post" action=" <?php echo $path . "controller/create-post.php"; ?>">
    <center>
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" />
        </div>

        <div>
            <label for="post">Post:</label>
            <textarea name="post"> </textarea>
            <!--this will give us the blank box to type in -->
        </div>

        <div>
            <button type="submit">Submit</button>
            <!--makes the submit button that way we can enter our code -->
        </div>
    </center>
</form>