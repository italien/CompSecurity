<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:ice="http://ns.adobe.com/incontextediting">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
<script src="includes/ice/ice.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:95px;
	height:26px;
	z-index:1;
	left: 923px;
	top: 6px;
}
#apDiv2 {
	position:absolute;
	width:123px;
	height:30px;
	z-index:1;
	left: 927px;
	top: 5px;
}
#apDiv3 {
	position:absolute;
	width:200px;
	height:26px;
	z-index:1;
	left: 548px;
	top: 169px;
}
#apDiv4 {
	position:absolute;
	width:44px;
	height:24px;
	z-index:1;
	left: 550px;
	top: 213px;
}
#apDiv5 {
	position:absolute;
	width:51px;
	height:30px;
	z-index:1;
	left: 600px;
	top: 213px;
}
#apDiv6 {
	position:absolute;
	width:83px;
	height:26px;
	z-index:1;
	left: 546px;
	top: 257px;
}

#apDiv8 {
	position:absolute;
	width:83px;
	height:27px;
	z-index:1;
	left: 668px;
	top: 455px;
}
</style>
</head>


<body style="background-repeat:no-repeat "
background="Image/PAYMENT.jpg"/>
<FORM method=post action="Payment1.php">
<TABLE BORDER=0>
<TR>

	<TD>
	<div id="apDiv3"><INPUT type=text name="Card number" size="24" maxlength="16"></div>
	</TD>
</TR>

<TR>
	
	<TD>
      <div id="apDiv4"><INPUT type=text name="mm" value="mm" size="6" maxlength="2" /></div>
      <div id="apDiv5"><INPUT type=text name="yy" value="yy" size="6" maxlength="2"> </div>
</TR>
<TR>

	<TD>
      <div id="apDiv6"><INPUT type=text name="CVV" size="8" maxlength="3"></div>
</TR>

<TR>
  <TD COLSPAN=2>
    <div id="apDiv8"><INPUT type="submit" style="background-color:#066" value="SUBMIT PAY" > </div>
    </TD>
</TR>
</TABLE>
</FORM>
</body>

</html>