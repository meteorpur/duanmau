<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sách</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="title">Tên sách:</label>
            <input type="text" id="title" name="title"
            value="<?= $book -> title?>">
        </div>   
        <div>
            <label for="cover_image">Hình ảnh:</label>
            <input type="file" id="cover_image" name="cover_image"
            value="<?='uploads/'. $book -> cover_image?>"> 
        </div>
        <div>
            <label for="author">Tác giả:</label>    
            <input type="text" id="author" name="author"
            value="<?= $book -> author?>">
        </div>
        <div>
            <label for="publisher">Nhà xuất bản:</label>
            <input type="text" id="publisher" name="publisher"
            value="<?= $book -> publisher?>">
        </div>
        <div>
            <label for="publish_date">Ngày sản xuất:</label>
            <input type="date" id="publish_date" name="publish_date"
            value="<?= $book -> publish_date?>">
        </div>
        <div>     
            <input type="submit" name="btnSave" value="Sửa sách"
            value="<?= $book -> title?>">
        </div>

    </form>
</body>
</html>