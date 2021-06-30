<!Doctype html>
<html>
    <head>
        <title>Display Records</title>
    </head>
    <body>
    <table width="600" border ="1" cellspacing="5" cellpadding="5">
    <tr>
    <th>Sr No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Delete Record</th>
    <th>Update Record</th>
    </tr>

    <?php
     $i=1;
     foreach($data as $row)
     {
     echo "<tr>";
     echo "<td>".$i."</td>";
     echo "<td>".$row->Name."</td>";
     echo "<td>".$row->Email."</td>";
     echo "<td>".$row->Mobile."</td>";
     echo "<td><a href='deletedata?id=".$row->Id."'>Delete</a></td>";
     echo "<td><a href='update_data?id=".$row->Id."'>Update</a></td>";
     echo "</tr>";
     $i++;
     }
    ?>
    </table>
    </body>
    </html>