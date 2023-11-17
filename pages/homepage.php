<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/homepage.css">
    <title>Document</title>
</head>
<body>
    <?php include "../modules/header.php"?>
    <main>
        <div class="create-post">
            <div>
             <img src="../imgs/profile-pic.jpg" alt="" class="profile-pic">
            </div>
            <div class="post-label">Tell us something! Create a post.</div>
        </div>
        <div class="newsfeed">
        <?php 
        include "../modules/post.php";
        include "../modules/post.php";
        include "../modules/post.php";
        include "../modules/post.php";
        ?>
        </div>
    </main>
</body>
</html>