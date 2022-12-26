<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
  <!-- <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js" defer></script>
  <script src="https://captcha-api.yandex.ru/captcha.js?render=onload&onload=onloadFunction" defer></script>

  <script src="/guest-book/post/validation.js" defer></script>
  <title>Оставить сообщение</title>
</head>

<body class="d-flex justify-content-md-center align-items-center vh-100">

  <div class="text-nowrap shadow-lg bg-body rounded-4 p-5 w-25" style="min-width:420px; min-height:650px">

    <div class="border-bottom border-2 mb-4 text-center">
      <h1>Заполните форму</h1>
    </div>

    <form action="post-handler.php" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>

      <div class="form-outline mb-4">
        <input type="text" id="UserName" name="UserName" class="form-control" required>
        <label class="form-label" for="UserName">User Name*</label>
      </div>

      <div class="form-outline mb-4">
        <input type="email" id="E-mail" name="E-mail" class="form-control" required>
        <label class="form-label" for="E-mail">E-mail*</label>
      </div>

      <div class="form-outline mb-4">
        <input type="url" id="Homepage" name="Homepage" class="form-control" />
        <label class="form-label" for="Homepage">Homepage</label>
      </div>

      <div class="mb-4 mx-auto" id="smartcaptcha" style="height: 102px"></div>

      <script>
        function onloadFunction() {
          if (window.smartCaptcha) {
            const container = document.getElementById('smartcaptcha');

            const widgetId = window.smartCaptcha.render(container, {
              sitekey: 'FpDLveBM5w24e85BjQP90fMiECwRbJHV5ZUQeONd',
              hl: 'ru',
            });
          }
        }
      </script>

      <div class="form-outline">
        <textarea class="form-control" id="Text" name="Text" rows="3" style="resize:none; overflow:auto;" required></textarea>
        <label class="form-label" for="Text">Text*</label>
        <button class="btn btn-secondary" id="link">[link]</button>
        <button class="btn btn-secondary" id="italic">[italic]</button>
        <button class="btn btn-secondary" id="strike">[strike]</button>
        <button class="btn btn-secondary" id="strong">[strong]</button>
      </div>

      <button class="btn btn-tertiary btn-block mb-2" id="preview">Предпросмотр сообщения</button>

      <div class="form-outline mb-4">
        <input type="file" class="form-control" id="File" name="File" accept=".jpg, .png, .gif, .txt">
      </div>

      <button type="submit" class="btn btn-primary btn-block" name="submit">Отправить</button>

    </form>
  </div>
</body>

</html>

<!--
// TODO: Формат файлов Валидация
// TODO: Размер txt файла Валидация
// TODO: Предупреждение об уменьшении размера картинки (?)
// TODO: Валидация формы (поля, теги в тексте, каптча)
// TODO: Кнопки вставки тегов (добавление, обрамление выделенного и удаление выделенного)
// TODO: Предпросмотр сообщения
-->