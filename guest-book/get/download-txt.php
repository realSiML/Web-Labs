<?php
if (isset($_GET['fileId'])) {
    require_once  '../mysql.php';

    $sql = "SELECT CONVERT (data using utf8) AS data, mime, Name
            FROM files WHERE id=?";

    $statement = $link->prepare($sql);
    $statement->bind_param("s", $_GET['fileId']);
    $statement->execute() or die("<b>Error:</b> Problem on Retrieving File<br/>" . mysqli_connect_error());
    $result = $statement->get_result();

    $row = $result->fetch_assoc();

    $str = $row["data"];

    header('Content-Disposition: attachment; filename="' . $row["Name"] . '"');
    header('Content-Type: text/plain'); # Don't use application/force-download - it's not a real MIME type, and the Content-Disposition header is sufficient
    header('Content-Length: ' . strlen($str));
    header('Connection: close');

    echo $str;
}
