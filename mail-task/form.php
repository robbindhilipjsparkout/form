
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title> Email Task</title>
  <style>
    body{
    background: url(cloud.jpeg) no-repeat center;
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    height: 100vh;

}
    </style>
</head>


<body>
        <div class="col-lg-3 col-lg-offset-4 mx-auto " style="padding-top:50px;">

                    <form method="post" action="send_mail.php" class="form-signin mb-50px" style="border:1px blue solid ; padding: 35px; margin-top: 40px; 
 border-radius: 20px;  background-color: #6AFDFD;">

                
                        <div class="form-label-group ">
                        <label for="inputEmail">Name<span style="color: #FF0000">*</span></label>
                        <input type="text" name="name" id="fromEmail" class="form-control"  required   autofocus>
                        </div> <br/>

                        <div class="form-label-group">
                            <label for="inputEmail">To <span style="color: #FF0000">*</span></label>
                            <input type="email" name="email" id="toEmail" class="form-control"  required  autofocus>
                        </div> <br/>

                 
                        <div class="form-label-group">
                        <label for="subject">Subject <span style="color: #FF0000">*</span></label>
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required autofocus>
                        </div><br/>

                        <div class="form-label-group">
                        <label for="inputPassword">Message<span style="color: #FF0000">*</span></label>
                        <textarea  id="message" name="message" class="form-control" placeholder="Message" required   autofocus></textarea>
                        </div> <br/>

                        <button type="submit" name="sendMailBtn" class="btn btn-lg btn-info btn-block text-uppercase" >Send Email</button>
                    </form>
                </div>
           
   
</body>
</html>