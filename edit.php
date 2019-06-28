<?php

require_once __DIR__ . '/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $collection->updateOne([
        '_id' => new MongoDB\BSON\ObjectId($_POST['id']),
    ], [
        '$set' => ['content' => $_POST['content']]
    ]);

    header('Location: /index.php');
    die();
}

$content = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId($_GET['id'])])['content'];

?>

<html>
<body>
    <form action="edit.php" method="POST">
        <input hidden name="id" value="<?= $_GET['id'] ?>">
        <label>
            Content<br/>
            <textarea name="content"><?= $content ?></textarea>
        </label>
        <br/>
        <button type="submit">
            Edit
        </button>
    </form>
</body>
</html>
