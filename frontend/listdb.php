<!DOCTYPE html>
<html lang="ru">
   <head>
      <meta charset="utf-8" />
      <link href="css/style.css" rel="stylesheet">
      <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $('#example').DataTable( {
             "language": {
                     "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Russian.json"
                 },
               
                 "info":     false
             } );
         } );
      </script>
      <table id="example" class="display">
         <thead>
            <tr>
               <td>id</td>
               <td>id банера</td>
               <td>Время добавления</td>
               <td>Статус обработки</td>
            </tr>
         </thead>
         <tbody>
            <?php
               ini_set("display_errors",1);
               error_reporting(E_ALL);
               require('./Config.php');
               require('./kernel/Connectiondb.php');
               require('./kernel/QueryBuilder.php');
               $QueryBuilder = new QueryBuilder();
               $turn=$QueryBuilder->listDB();
               while ($row = $turn->fetch_assoc()) {
               if($row['progress']==0) $status="Ожидает отправки"; else $status="Отправлено"; 
               
               echo "<tr>
                       <td>".$row['id']."</td>
                       <td>".$row['id_baner']."</td>
                       <td>".$row['add_date']."</td>
               	       <td>".$status."</td>
                   </tr>";
               }
               
               ?>
         </tbody>
      </table>
      </body>
</html>


