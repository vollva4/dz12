<!DOCTYPE html>

<html>
<head>
    <title></title>
    <style>
        form{
            margin-bottom: 50px;
        }
        input {
            display: block;
            margin-bottom: 10px;
        }
        thead {
            text-align: center;
            font-weight: bold;
        }
        td {
            border-bottom: 1px solid black;
            padding:5px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <td>Книга</td>
            <td>Автор</td>
            <td>Год</td>
            <td>Жанр</td>
            <td>ISBN</td>
        </thead>
        <?php
        include "index.php";
        foreach ($stmt as $row):
            ?>
            <tr>
                <td><?= $row['name']; ?></td>
                <td><?= $row['author']; ?></td>
                <td><?= $row['year']; ?></td>
                <td><?= $row['genre']; ?></td>
                <td><?= $row['isbn']; ?></td>
            </tr>
            <?php
        endforeach;
        ?>
    </table>

</body>
</html>