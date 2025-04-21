<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <a href="?act=add"><button>Thêm sách</button></a>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Cover_image</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Publish_Date</th>
            <th>Action</th>
        </tr>
        <?php foreach($listBook as $value) {?>
            <tr>
                <td><?= $value -> id?></td>
                <td><?= $value -> title?></td>
                <td><img src="<?= 'uploads/' . $value -> cover_image?>" alt="" width="100px"></td>
                <td><?= $value -> author?></td>
                <td><?= $value -> publisher?></td>
                <td><?= $value -> publish_date?></td>
                <td>
                    <a href="?act=edit&id=<?= $value -> id?>"><button>Sửa</button></a>
                    <a href="?act=delete&id=<?= $value -> id?>"
                    onclick="return confirm('Bạn có chắc chắn xóa hay không'?)"><button>Xóa</button></a>
                </td>
            </tr>
        <?php } ?>

    </table>
</body>
</html>