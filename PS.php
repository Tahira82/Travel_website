<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('/cconfig/connect.php');?>
    <?php
    if(  isset( $_POST['PackageS'] )){
        $PackageS=$_POST['PackageS'];
        $sql="INSERT INTO package(PackageS) 
        VALUES('$PackageS')";
      
                            if ($con ->query($sql) === TRUE) {
                    
                            
                                            print '<script type="text/javascript">'; 
                                            print 'window.location="UserR.php"'; 
                                            print '</script>';
                    
                            }}
                                             exit();

                    
                    ?>
                          
    </head>