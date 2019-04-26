<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>

body {
    font-family: "DejaVu Sans", "DejaVu Sans Mono", "DejaVu", sans-serif, monospace;
    font-size:11px;
}
@page {
margin: 480px 50px 100px 50px;
}
#header {
position: fixed;
left: 0px;
top: -460px;
right: 0px;
height: 480px;
text-align: center;
}
#footer {
position: fixed;
left: 0px;
bottom: 180px;
right: 0px;
height: 100px;
font-size:11px;
text-align: left;
}
#content {
font-size:10px;
}

#logo img {
max-width:340px;
}

.barcode {
    text-align:center;
width: 50%;
}
.top-bot {margin: 20px 0;}
.logo-header {margin: 30px 0;}
.font {font-size:11px;}
.w40{font-weight: 400!important;}
.top-20{margin-top: 20px;}
</style>
</head>
<body>
<div id="header">
<table table width="100%" class="logo-header">
<tr>
<td valign="top" width="60%" id="logo">[[PDFLOGO]]</td>
<td valign="top" width="40%" id="info"><strong>[[PDFCOMPANYDETAILS]]</strong><br /></td>
</tr>
</table>

<table table width="100%">
<tr>
<td valign="top" width="100%"><strong class="font">ORDER CONFIRMATION</strong><br/></td>
</tr>
</table>
<table table width="100%">
<tr>
<td valign="top" width="20%"><strong class="font">ORDER ID </strong></td>
<td valign="top" align="left">[[PDFORDERENUM]]</td>
</tr>
<tr>
<td valign="top" width="20%"><strong class="font">ORDER DATE</strong></td>
<td valign="top" align="left">[[PDFORDERDATE]]</td>
</tr>
<tr>
<td valign="top" width="20%"><strong class="font">PAYMENT METHOD</strong></td>
<td valign="top" align="left">[[PDFINVOICEPAYMENTMETHOD]]</td>
</tr>
</table>

<table table width="100%" class="top-bot">
<tr>
<td valign="top" width="50%">
<strong class="font">Order Information</strong><br />
[[PDFBILLINGADDRESS]]<br />
[[PDFBILLINGEMAIL]]<br />
[[PDFBILLINGTEL]]

</td>
<td valign="top" width="50%">
<strong class="font">Delivery Address</strong><br />
[[PDFSHIPPINGADDRESS]]<br />
[[PDFBILLINGEMAIL]]<br />
[[PDFBILLINGTEL]]
</td>
</tr>
</table>

</div>
<div id="footer">
<strong>Notes:</strong><br/><br/>
<em>If you have any queries related to your order, please contact company customer service<br/> using our website Facebook Chat function https://qulinaryessentials.vn or via email (qulinaryessentials.hcm@qindustries.com) and quote your Order ID.
</em><br/><br/>
<strong>Return/Exchange Policy:</strong><br/><br/>
<em>You have 7 day-period counted from the day you received your order to request any returns. Any<br/> defective goods should be alerted to us as soon as possible within this period.<br/><br/>
For full return & exchange policy please visit: https://abc.com</em>
</div>
<div id="content">
[[ORDERINFOHEADER]]
[[ORDERINFO]]

<table table width="100%">
<tr>
<td width="50%" valign="top">
[[PDFORDERNOTES]]
</td>
<td width="50%" valign="top" align="right">

<table width="100%">
[[PDFORDERTOTALS]]
</table>

</td>
</tr>
</table>

</div>
</body>
</html>

