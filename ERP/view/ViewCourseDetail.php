<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body class="hold-transition skin-blue sidebar-mini">

        <div class="box-body">

            <table id="example2" class="table-hover" align="center" border="3px">
                <thead>
                    <tr>
                        <th>Course Detail</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>
                            <?php echo $data[0] ;
                            echo "<br>";
                            ?>
                            <?php echo $data[1];
                            echo "<br>";
                            ?> 
                            <?php echo $data[2];
                            echo "<br>";
                            ?> 
                            <?php echo $data[3];
                            echo "<br>";
                            ?> 
                            <?php echo $data[4]; ?>




                        </td>


                    </tr>

                </tbody>

            </table>


        </div>

        <!-- /.box-body -->
    </body>
</html>
<?php include 'sidebar.php'; ?> 