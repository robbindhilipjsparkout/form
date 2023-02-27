
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

  <title>Store Cookies</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Store Cookie</h5>

                    <form action="cookies-code.php" method="post" class="form-signin">

                        <div class="form-label-group">
                            <label for="inputEmail">name <span style="color: #FF0000">*</span></label>
                            <input type="text" name="Name" id="fromEmail" class="form-control"  required   autofocus>
                        </div> <br/>

                        <div class="form-label-group">
                            <label for="inputEmail">Email<span style="color: #FF0000">*</span></label>
                            <input type="email" name="Email" id="toEmail" class="form-control"  required  autofocus>
                        </div> <br/>
                        
                        <button type="submit" name="sendMailBtn" class="btn btn-lg btn-primary btn-block text-uppercase" >cookie</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<!-- <script>
        if(window.history.replaceState){

            window.history.replaceState(null,null,window.location.href);
        }

</script> -->



