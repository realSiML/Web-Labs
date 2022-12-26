<?php
//Функции для вывода таблицы
function TableALL($link, $table1, $table2, $sql)
{
  if (!$sql)
    $sql = "SELECT *, INET_NTOA(IP) as IP FROM $table1
    LEFT JOIN $table2
    ON $table1.FileId = $table2.id";

  $result = $link->query($sql);
  echo "
  <table id='table' class='table table-striped table-bordered table-hover'>
  <thead class='table-primary' style='cursor:pointer'>
  <tr>
    <th>Пользователь</th>
    <th>E-mail</th>
    <th>Homepage</th>
    <th>Сообщение</th>
    <th>Файл</th>
    <th>Браузер</th>
    <th>Дата</th>
  </tr>
  </thead>
  <tbody>
  ";
  while ($row = $result->fetch_assoc()) {
    echo
    "<tr>
      <td>" . $row["UserName"] . "</td>
      <td>" . $row["Email"] . "</td>
      <td>" . $row["Homepage"] . "</td>
      <td>" . htmlspecialchars_decode($row["Text"]) . "</td>
      <td>" . GetFile($row["id"], $row["mime"], $row["data"], $row["Name"]) . "</td>
      <td>" . $row["Browser"] . "</td>
      <td>" . $row["Date"] . "</td>
    </tr>";
  }
  echo "</tbody></table>";
}

function GetFile($id, $mime, $data, $name)
{
  if (!$id || !$mime || !$data || !$name) return;

  if ($mime == "text/plain") {
    return '<a class="btn btn-info btn-block btn-lg" data-mdb-ripple-color="#ffffff"
    href="download-txt.php?fileId=' . $id . '">' . $name . '<i class="fas fa-download ms-1"></i></a>';
  } else {
    $imgsrc = 'data:' . $mime . ';base64,' . base64_encode($data);
    return '<a data-fancybox data-caption="' . $name . '" href="' . $imgsrc . '">
    <img src=' . $imgsrc . ' alt=' . $name . '>
    </a>';
  }
}
