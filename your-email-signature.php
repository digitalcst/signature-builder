<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Your Email Signature</title>
<meta name="robots" CONTENT="noindex, nofollow">
</head>

<body>
    
<p style="font-family:Verdana, sans-serif;font-size:12px; line-height:18px; color:#666; letter-spacing:0.5px">
  <span style="font-weight:bold; color:#aa2130; text-transform:uppercase;"><?php echo $_POST["name"] ?></span><br>
  <?php echo $_POST["title"]; ?><br>
  <br>
  <img src="img/crawford-strategy-logo.png" alt="CRAWFORD STRATEGY"><br>
  200 E. Camperdown Way | Greenville, SC 29601<br>
  O <strong>864-232-2302</strong> x<strong><?php echo $_POST["ext"]; ?></strong> 
  <?php if (!empty($_POST["direct"])) { ?>| D <strong><?php echo $_POST["direct"]; ?><?php } ?></strong> 
  <?php if (!empty($_POST["mobile"])) { ?>| M <strong><?php echo $_POST["mobile"]; ?><?php } ?></strong><br>
  <a href="http://crawfordstrategy.com" target="_blank" style="text-decoration:underline; color:#666!important;">crawfordstrategy.com</a>
</p>

<br><br><br>

<p style="font-family:Verdana, sans-serif;font-size:12px; line-height:18px; color:#666; letter-spacing:0.5px">
  <span style="font-weight:bold; color:#aa2130; text-transform:uppercase;"><?php echo $_POST["name"]; ?></span><br>
  <?php echo $_POST["title"]; ?><br>
  <a href="http://crawfordstrategy.com" target="_blank" style="text-decoration:underline; color:#666!important;">crawfordstrategy.com</a>
</p>

</body>
</html>