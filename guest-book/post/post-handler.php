<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
  <title>Сообщение</title>
</head>

<body class="d-flex justify-content-md-center align-items-center vh-100">
  <div class="w-25 text-nowrap shadow-lg bg-body rounded-4 p-5" style="min-width:400px">
    <div class="border-bottom border-2 mb-4 text-center">

      <?php

      require_once "../mysql.php";
      require_once "realip.php";

      // TODO: SmartCaptcha Валидация
      // TODO: Уменьшение размера картинок 320x240

      // Файл
      $FileId;
      if (count($_FILES) > 0) {
        if (is_uploaded_file($_FILES['File']['tmp_name'])) {
          $mime = $_FILES['File']['type'];
          $filedata = file_get_contents($_FILES['File']['tmp_name']);
          $filename = $_FILES['File']['name'];
          $sql = "INSERT INTO files(mime, data, Name) VALUES(?,?,?)";
          $stmt = $link->prepare($sql);
          $stmt->bind_param('sss', $mime, $filedata, $filename);
          $stmt->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());
          $FileId = $link->query("SELECT MAX(id) FROM files")->fetch_assoc()['MAX(id)'];
        }
      }

      $UserName = strip_tags($_POST["UserName"]);
      $Email = strip_tags($_POST["E-mail"]);
      $Homepage = strip_tags($_POST["Homepage"]);
      $Text = strip_tags($_POST["Text"], ['a', 'code', 'i', 'strike', 'strong']);
      $IP = real_ip();
      $Browser = $_SERVER["HTTP_USER_AGENT"];

      $sql = "INSERT INTO messages (UserName, Email, Homepage, Text, IP, Browser, FileId)
              VALUES (?,?,?,?,INET_ATON(?),?,?)";
      $stmt = $link->prepare($sql);
      $stmt->bind_param("sssssss", $UserName, $Email, $Homepage, $Text, $IP, $Browser, $FileId);

      if ($stmt->execute()) {
      ?>
        <h2>Сообщение отправлено</h2>
      <?php } else { ?>
        <h2>Произошла ошибка</h2>
      <?php } ?>

    </div>

    <div class="d-grid gap-3">
      <a class="btn btn-primary fs-5" href="../get/get.php">Посмотреть сообщения</a>
      <a class="btn btn-primary fs-5" href="../post/post.php">Отправить еще сообщение</a>
    </div>
  </div>
</body>

</html>