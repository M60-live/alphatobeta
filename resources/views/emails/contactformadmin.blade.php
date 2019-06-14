<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Alpha To Beta</title>
</head>
<style>
  .btn{
    padding: 10px 10px;
    background-color: rgb(36, 145, 208);
    -moz-background-color: rgb(36, 145, 208);
    -o-background-color: rgb(36, 145, 208);
    -ms-background-color: rgb(36, 145, 208);
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
  }

  .footer{
    background-color: #444;
    -moz-background-color: #444;
    -ms-background-color: #444;
    -o-background-color: #444;
    padding: 20px 20px;
    color: #fff;
    text-align: center;
  }
</style>
<body style="font-family: Vedana,Arial; color:rgb(120, 120, 120); font-size: 12pt;">
  <center>
    <table border='0' cellpadding='0' cellspacing='0' width='700px'>
      <tbody>
        <tr><td width='50px'></td><td width='600px'></td><td width='50px'></td></tr>
        <tr><td></td><td align='right'><img src='http://www.alphatobeta.co.za/img/logo.png' width='300px'/></td><td></td></tr>
        <tr>
          <td></td>
          <td>
            Message from the contact form
            <br>
            <br>
            Name: {{$name}} <br>
            Email: {{$email}} <br>
            Contact: {{$contact}} <br>
            Message: {{$msg}} <br>
            <br>
            <br>
            <br>
          </td>
          <td></td>
        </tr>
        <tr>
          <td colspan='3' class='footer'>
            <b>Alpha to beta PTY (LTD)</b>
            <br><br>
            info@alphatobeta.co.za<br>
            Pretoria<br>
            Gauteng, South Africa 0008
          </td>
        </tr>
      </tbody>
    </table>
  </center>
</body>
</html>