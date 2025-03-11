<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>action</th>
        </tr>
        <?php
        require_once 'Category_Database.php';
        $category_database = new Category_Database();

        foreach ($category_database->getAllCategories() as $key => $value) :

        ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><a href="process.php?action=edit&id= <?= $value['id'] ?>">Edit</a> <a href="process.php?action=delete&id= <?= $value['id'] ?>">Delete</a> </td>
            </tr>
        <?php endforeach; ?>

    </table>
    <form action="process.php?action=edit" method="post">
        <label for="id">id:</label>
        <input type="text" id='id' name='category_id' readonly value="4">
        <br>
        <label for="name">name:</label>
        <input type="text" id=' name' name='category_name'>
        <input type="submit" value="edit">
    </form>
</body>

</html>