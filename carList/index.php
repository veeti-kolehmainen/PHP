<?php

include "header.php";

include "navAndStartOfTable.php";

$cars = array(
    array(1, "Volvo", 22, 18),
    array(2, "BMW", 15, 13),
    array(3, "Saab", 5, 3),
    array(4, "Land Rover", 17, 15)
);

for ($i = 0; $i < count($cars); $i++) {
?>
    <tr class="border border-bottom-1">
        <td><?php echo $cars[$i][0]; ?></td>
        <td><?php echo $cars[$i][1]; ?></td>
        <td><?php echo $cars[$i][2]; ?></td>
        <td><?php echo $cars[$i][3]; ?></td>
        <td><a href="http://localhost/productList/edit_car.php?id=<?php echo $cars[$i][0];?>" title="http://localhost/productList/edit_car.php?id=<?php echo $cars[$i][0];?>"><i class="bi bi-pencil-square"></i></a></td>
        <td><a href="http://localhost/productList/delete_car.php?id=<?php echo $cars[$i][0];?>" title="http://localhost/productList/delete_car.php?id=<?php echo $cars[$i][0];?>""><i class="bi bi-trash"></i></a></td>
    </tr>
<?php
}

include "endOfTable.php";

include "footer.php"; 

?>