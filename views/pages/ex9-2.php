<!DOCTYPE html>
<html lang="en"><br>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ex9-2.php</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "test";
    $password = "1234";
    $dbname = "bookMysql";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("연결 오류 : " . mysqli_connect_error());
    }
    $sql = "select * from member";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "member  테이블 select!";
    } else {
        echo "테이블 조회 오류: " . mysqli_error($conn);
    }

    mysqli_close($conn);

    ?>
</body>

</html>