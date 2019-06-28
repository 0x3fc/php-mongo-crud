<?php require_once __DIR__ . '/bootstrap.php'; ?>

<html lang="en">
<body>
    <ul>
        <?php
        $posts = $collection->find();

        foreach ($posts as $post) {
            $id = $post['_id'];

            print '<li>';
            print $post['content'];
            print "<button onclick=\"window.location='/edit.php?id=$id'\">Edit</button>";
            print "<form action='delete.php' method='POST'>
                        <input hidden name='id' value='$id'>
                        <button type='submit'>Delete</button>
                    </form>";
            print '</li>';
        }
        ?>
    </ul>

    <form action="store.php" method="POST">
        <label>
            Content<br/>
            <textarea name="content"></textarea>
        </label>
        <br/>
        <button type="submit">
            Post
        </button>
    </form>
</body>
</html>
