<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="2">
        <?php
          $n = $_POST["NoOfSubjects"];
          for($i = 0;$i<$n;$i++)
          {
            echo "<tr>
                  <td>row$i</td>
                  <td>row$i</td>
                  </tr>
            ";
          }
        ?>
    </table>
  </body>
</html>
