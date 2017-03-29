<?php
require 'includes\common.php';
if(!isset($_SESSION['email']))
{
    header('location: index.php');
}
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="cart.css" type="text/css">
    </head>
    <body>
        <?php
            include 'includes\header.php';
        ?>
        <div class="container container_style">       
            <table class="table">
                <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>     </th>
                    </tr>
                </thead>
                <?php
                $query="select users_items.pid, products.name, products.price FROM users_items INNER JOIN products on users_items.pid=products.id where users_items.uid='$id'";
                $query_result= mysqli_query($con, $query) or die(mysqli_error($con));
                $numrows= mysqli_num_rows($query_result);
                if($numrows==0)
                {
                    echo "";
                }
                else
                {
                    $sum=0;
                    $tid="";
                    while ($row= mysqli_fetch_array($query_result))
                    {?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['pid']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><a href="cart-remove.php?id=<?php echo $row['pid']?>" class='remove_item_link'> Remove</a></td>
                            </tr>
                        <?php
                            $tid=$tid."'".$row['pid']."'".",";
                            $sum=$sum+$row['price'];                        
                        }?>
                        <tr>
                            <td></td>
                                <td>Total </td>
                                <td>&#x20B9; <?php echo $sum ?></td>
                                <td><a href="success.php?id=<?php echo $tid ?>"><div class="btn btn-primary">Confirm Order</div></a></td>
                            </tr>
                        </tbody>
                <?php  } ?>
            </table>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php
            include 'includes\footer.php';
        ?>
    </body>
</html>