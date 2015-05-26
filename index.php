<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create Your Email Signature</title>
<meta name="robots" CONTENT="noindex, nofollow">
<script src="//use.typekit.net/gfk5yyy.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="pagewrap">
    <div id="page-header">
    	<div class="logo"><img src="img/crawford-strategy-logo.png" alt="CRAWFORD STRATEGY"></div><div class="pagetitle"><h1>Email Signature Builder</h1></div>
    </div>
    <div id="instructions">
    	<ol>
        	<li>Use the form below to enter your personal information.</li>
            <li>Click the "Generate Signatures" button. Your signatures will appear in a popup window.</li>
            <li>Follow the instructions at the bottom of this page for adding your signatures to Outlook.</li>
        </ol>
    </div>
    <div id="form-block">
        <div id="form">
            <form action="your-email-signature.php" method="post" id="signature-builder" onsubmit="target_popup(this)">
                <p><label for="name">Name:</label><input type="text" name="name" autocomplete="false" required> </p>
                <p><label for="title">Job Title:</label><input type="text" name="title" autocomplete="false" required> </p>
                <p><label for="ext">Phone Ext:</label><input type="text" name="ext" class="ext" autocomplete="false" required> </p>
                <br>
                <p class="optional">Optional:</p>
                <p><label for="direct">Direct Phone:</label><input type="text" name="direct" class="direct" value="" autocomplete="false"> </p>
                <p><label for="mobile">Mobile Phone:</label><input type="text" name="mobile" class="mobile" value="" autocomplete="false"> </p>
            <input type="submit" value="create signatures">
            </form>
        </div>
        <div id="signature-examples">
        	<h2>Sample Email Signatures</h2>
            <br>
            <h3>Standard</h3>
            <br>
            <p style="font-family:Verdana, sans-serif;font-size:12px; line-height:18px; color:#666; letter-spacing:0.5px">
              <span style="font-weight:bold; color:#aa2130; text-transform:uppercase;">FIRSTNAME LASTNAME</span><br>
              Job Title<br>
              <br>
              <img src="img/crawford-strategy-logo.png" alt="CRAWFORD STRATEGY"><br>
              200 E. Camperdown Way | Greenville, SC 29601<br>
              O <strong>864-232-2302</strong> x<strong>1234</strong> | D <strong>123-456-7890</strong> | M <strong>123-456-7890</strong><br>
              <a href="http://crawfordstrategy.com" target="_blank" style="text-decoration:underline; color:#666!important;">crawfordstrategy.com</a>
            </p>
            <br><br>
            <h3>Reply</h3>
            <br>
            <p style="font-family:Verdana, sans-serif;font-size:12px; line-height:18px; color:#666; letter-spacing:0.5px">
              <span style="font-weight:bold; color:#aa2130; text-transform:uppercase;">FIRSTNAME LASTNAME</span><br>
              Job Title<br>
              <a href="http://crawfordstrategy.com" target="_blank" style="text-decoration:underline; color:#666!important;">crawfordstrategy.com</a>
            </p>
        </div>
    </div>
    <br><br><br>
    <div id="how">
            <h4>Adding A Signature to Outlook</h4>
			<ol>
            	<li>In your new signature window, highlight your entire signature from the first line to the last line. Right-click or press CTRL+C to <strong>copy</strong>.</li>
                <img src="img/cst-step-1.jpg" alt="Highlight and copy">
                <li>In Outlook (2013, 2010, or 2007), open a new message. On the <strong>Message</strong> tab, click <strong>Signature</strong>, and then click <strong>Signatures</strong>.</li>
                <img src="img/cst-step-2.jpg" alt="Open blank signature in Outlook">
                <li>On the <strong>Email Signature</strong> tab, click <strong>New</strong>. Type a name for the signature and click <strong>OK</strong>.</li>
                <li>In the <strong>Edit Signature</strong> box, right-click or press CTRL+V to <strong>paste</strong> in your formatted signature.</li>
                <img src="img/cst-step-345.jpg" alt="Name, paste and save">
                <li>Click <strong>OK</strong> to save and finish.</li>
            </ol>
    </div>
    <br><br><br>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.mask.js"></script>
<script>
$(document).ready(function(){
  $('.ext').mask('0000');
  $('.direct').mask('000-000-0000');
  $('.mobile').mask('000-000-0000');

  $("#signature-builder").validate({
  	submitHandler: function(form) {
			window.open('', 'formpopup', 'width=600,height=400,resizeable,scrollbars,location=no');
			form.target = 'formpopup';
		form.submit(); },
		rules: { ext: { required:true, minlength:4 } }
  });
  
});
</script>
</body>
</html>