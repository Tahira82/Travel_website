<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('/cconfig/connect.php');?>
    <?php
                     if(  isset( $_POST['Place'] ) and isset( $_POST['Days'] ) ){
                        $Place = $_POST['Place'];
                        $Days = $_POST['Days'];
                        $Money = $_POST['Money'];
                        echo $Days;
                        
                    $sql = "INSERT INTO home (Place, Days, Money )
                    VALUES ('$Place', '$Days', '$Money' )";

                    if ($con ->query($sql) === TRUE) {
                    } 
                            
                                            print '<script type="text/javascript">'; 
                                            print 'window.location="Packages.php"'; 
                                            print '</script>';

                                               exit();

                    }
                    ?>
                          
    </head>