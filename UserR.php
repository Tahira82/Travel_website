                         <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Contact Form With Captcha - reusable form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="userS.php" method="post" class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between" id="newsletter_form">
                    <h2>User Registration</h2> Register here </p>
                    <form role="userS.php" method="post" id="reused_form" >
                        <div class="form-group">
                            <label for="name"> Name:</label>
                            <input type="text" class="form-control" id="Name" name="Name" required maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="CNIC"> CNIC:</label>
                            <input type="text" class="form-control" id="CNIC" name="CNIC" required maxlength="50">
                        </div>
                        <div class="form-group"> 
                            <label for="email"> Email:</label>
                            <input type="email" class="form-control" id="Email" name="Email" required maxlength="50">
                        </div>
                         <div class="form-group">
                            <label for="Cell Number"> Cell Number:</label>
                            <input type="text" class="form-control" id="CellNumber" name="CellNumber" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="Address"> Address:</label>
                            <input type="text" class="form-control" id="Address" name="Address" required maxlength="300">
                        </div>
                        <div class="form-group">
                            <label for="City"> City:</label>
                            <input type="text" class="form-control" id="City" name="City" required maxlength="50">
                        </div>
                         <div class="form-group">
                            <label for="Country"> Country:</label>
                            <input type="text" class="form-control" id="Country" name="Country" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="Second Cell Number"> Second Cell Number:</label>
                            <input type="text" class="form-control" id="SecondCellNumber" name="SecondCellNumber" required maxlength="50">
                        </div>
                          <div class="form-group">
                            <label for="Password"> Password:</label>
                            <input type="text" class="form-control" id="Password" name="Password" required maxlength="50">
                        </div>
                         <div class="form-group">
                            <label for="facebook"> Facebook:</label>
                            <input type="text" class="form-control" id="Facebook" name="Facebook" required maxlength="100">
                        </div>
                        <button type="Register" class="btn btn-lg btn-success pull-right" id="btnContactUs">Register</button>
                        </form>
                                      
                      
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your form successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
    </body>
</html>


       
                    
  