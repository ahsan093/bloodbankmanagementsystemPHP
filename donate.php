<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<ul>
  <li><a href="login.php">LOGIN</a></li>
  <li><a href="dhome.php">DONATE US</a></li>
  <li><a href="hhome.php">OUR SERVICES</a></li>
</ul>
</body>
</html>
<form method="post" action="//submit.form" onSubmit="return validateForm();">
<div style="max-width: 400px;">
</div>
<div style="padding-bottom: 18px;font-size : 24px;">BLOOD BANK DONATION</div>
<div style="display: flex; padding-bottom: 18px;">
<div style=" margin-left: 0; margin-right: 1%; max-width: 49%;">First name<br/>
<input type="text" id="data_2" name="data_2" style="max-width: 100%;" class="form-control"/>
</div>
<div style=" margin-left: 1%; margin-right: 0; max-width: 49%;">Last name<br/>
<input type="text" id="data_3" name="data_3" style="max-width: 100%;" class="form-control"/>
</div>
</div><div style="padding-bottom: 18px;">Email<br/>
<input type="text" id="data_4" name="data_4" style="" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Donation Amount<span style="color: red;"> *</span><br/>
<span><input type="radio" id="data_5_0" name="data_5" value="RS50"/> RS500</span><br/>
<span><input type="radio" id="data_5_1" name="data_5" value="RS100"/> RS1000</span><br/>
<span><input type="radio" id="data_5_2" name="data_5" value="RS250"/> RS2500</span><br/>
<span><input type="radio" id="data_5_3" name="data_5" value="RS500"/> RS5000</span><br/>
</div>
<div style="padding-bottom: 18px;">Full Address<br/>
<textarea id="data_6" false name="data_6" style="" rows="3" class="form-control"></textarea>
</div>
<div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>
<div>
<div style="float:right"><a href="https://www.100forms.com" id="lnk100" title="form to email">form to email</a></div>
<script src="https://www.100forms.com/js/FORMKEY:KBCHYLKAKG9X/SEND:my@email.com" type="text/javascript"></script>
</div>
</form>

<script type="text/javascript">
function validateForm() {
if (!validateEmail(document.getElementById('data_4').value.trim())) {
alert('Email must be a valid email address!');
return false;
}
if (!document.getElementById('data_5_0').checked && !document.getElementById('data_5_1').checked && !document.getElementById('data_5_2').checked && !document.getElementById('data_5_3').checked ) {
alert('Donation Amount is required!');
return false;}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }
function validateEmail(email) {
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}
</script>