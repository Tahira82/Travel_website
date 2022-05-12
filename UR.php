<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('/cconfig/connect.php');?>
    <?php
                             
                   
                     if(  isset( $_POST['Name'] ) and isset( $_POST['CNIC'] ) ){
                        $Name = $_POST['Name'];
                        $CNIC = $_POST['CNIC'];
                        $Email = $_POST['Email'];
                        $CellNumber = $_POST['CellNumber'];
                        $Address = $_POST['Address'];
                        $City = $_POST['City'];
                        $Country = $_POST['Country'];
                        $SecondCellNumber = $_POST['SecondCellNumber'];
                        $Password = $_POST['Password'];
                        $Facebook = $_POST['Facebook'];
                        
                    $sql = "INSERT INTO userinfo (Name, CNIC, Email, CellNumber, Address, City,Country,SecondCellNumber,Password,Facebook)
                    VALUES ('$Name', '$CNIC', '$Email', '$CellNumber', '$Address', '$City','$Country','$SecondCellNumber','$Password','$Facebook')";

          
                          

						
				

                    if ($con ->query($sql) === TRUE) {
                    } 
                            

                                               exit();

                    }
                    ?>
                          
    </head>