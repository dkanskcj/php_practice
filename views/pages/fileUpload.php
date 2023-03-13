<!DOCTYPE html>
<html lang="en"><br>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CodeIgniter</title>
</head>

<body>
    <?php
    if ($_POST["action"] == "upload") {
        $uploaded_file_name_temp = $_FILES['test']['tmp_name'];
        $uploaded_file_name = $_FILES['test']['name'];
        $upload_folder = "uploads/";

        move_uploaded_file($uploaded_file_name_temp, $upload_folder . $uploaded_file_name);
        echo $uploaded_file_name . "을(를) 업로드하였습니다.";
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="test" class="cursor-pointer px-3 py-2 border border-b shadow-md rounded-md">
        <input type="submit" name="action" value="upload" class="cursor-pointer px-3 py-2 border border-b shadow-md rounded-md">
    </form>

</body>

</html>