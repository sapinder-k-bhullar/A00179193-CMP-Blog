<h1>Blog Posts</h1>

<ul>
<?php
    foreach($post as $posts) {
        echo("<li><a href=\"\\blog\\read\\" . $posts["slug"] . "\">" . $posts["title"] . "</a> - <time>" . $posts["post_date"] . "</time>");
    }
?>
</ul>