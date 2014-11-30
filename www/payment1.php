<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sensitive data exposure</title>
</head>

<body>
<p>Your transanction is not valid, please try again later or diferent credit card</p>
<p>&nbsp;</p>
<p>-----------------------------------------------------------------------</p>
<p>&nbsp;</p>
<p>Sensitive data Exposure has already been taken by the attacker:</p>
<FORM method=post action= action="Payment.php">
  <TABLE BORDER=0>
<TR>
	<TD>Card Number</TD>
	<TD>
	1234567890123456
	</TD>
</TR>

<TR>
	<TD>Expiration date</TD>
	<TD>
      <INPUT type=text name="mm" value="11" size="4" maxlength="2" />
      <INPUT type=text name="yy" value="22" size="4" maxlength="2">
</TR>
<TR>
	<TD>CVV</TD>
	<TD>
      <INPUT type=text name="CVV" value="123" size="4" maxlength="3">
</TR>

<TR>
  <TD>
    Username
    <TD>
     ALVARO FERNANDEZ
    </TD>
</TR>
<TR>
	<TD>Card Type</TD>
	<TD>
	VISA
    </TD>
</TR>

</TABLE>
</FORM>
</body>
</html>