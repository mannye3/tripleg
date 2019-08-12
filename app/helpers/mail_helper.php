<?php

function sendMail_LOCAL_Registration($data){
	// Send To Email
	//$to  = strtolower(trim($email));
  $to  = strtolower(trim("root@localhost"));
  
  // subject
  $subject = 'Registration Information From ' . URLNAME;
  
  // message
  $message = '  <!DOCTYPE html>
<html lang="en">
<body>
  <!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office">
  
  <head>
    <title></title>
    
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
      #outlook a { padding: 0; }
      .ReadMsgBody { width: 100%; }
      .ExternalClass { width: 100%; }
      .ExternalClass * { line-height:100%; }
      body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
      table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
      img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
      p { display: block; margin: 13px 0; }
    </style>
      <style type="text/css">
        @media only screen and (max-width:480px) {
          @-ms-viewport { width:320px; }
          @viewport { width:320px; }
        }
      </style>
   
      <link href="https://d2yjfm58htokf8.cloudfront.net/static/fonts/averta-v2.css"
      rel="stylesheet" type="text/css">
      <style type="text/css">
        @import url(https://d2yjfm58htokf8.cloudfront.net/static/fonts/averta-v2.css);
      </style>
    <!--<![endif]-->
    <style type="text/css">
      p {
        margin: 0 0 24px 0;
      }

      a {
        color: #00b9ff;
      }

      hr {
        margin: 32px 0;
        border-top: 1px #e2e6e8;
      }

      dt {
        font-size: 13px;
        margin-left: 0;
      }

    dd {
        color: #37517e;
        margin-bottom: 24px;
        margin-left: 0;
      }

      h5 {
        font-family: TW-Averta-SemiBold, Averta, Helvetica, Arial;
        font-size: 16px;
        line-height: 24px;
        color: #2e4369;
      }
      
      pre {
        display: block;
        padding: 16px;
        padding: 12px 24px;
        margin: 0 0 48px;
        font-size: 14px;
        line-height: 24px;
        color: #4a5860;
        word-break: break-all;
        word-wrap: break-word;
        background-color: #f2f5f7;
        border-radius: 3px;
      }

      .body-wrapper {
        background: #f2f5f7 url("https://d2yjfm58htokf8.cloudfront.net/static/images/background-v1.png") no-repeat center top;
        padding: 0px;
        margin: auto;
      }

      .content-wrapper {
        max-width: 536px;
        padding: 32px;
        padding-bottom: 48px;
      }

      .footer-wrapper div {
        color: #37517e !important;
      }

      .footer-wrapper div a {
        color: #00b9ff !important;
      }

      .hero {
        font-family: TW-Averta-Bold, Averta, Helvetica, Arial;
        color: #37517e;
        font-size: 22px;
        line-height: 30px;
      }

      .page-header {
        border-bottom: 1px solid #eaebed;
        padding-bottom: 16px;
      }

      .mb-0 {
        margin-bottom: 0 !important;
      }

      .mt-0 {
        margin-top: 0 !important;
      }
      
      .btn {
        box-sizing: border-box;
        display: inline-block;
        min-height: 36px;
        padding: 12px 24px;
        margin: 0 0 24px;
        font-size: 16px;
        font-weight: 600;
        line-height: 24px;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        border: 0;
        border-radius: 3px;
        color: #fff;
        background-color: #00b9ff;
        text-decoration: none;

        -webkit-transition: all .15s ease-in-out;
        -o-transition: all .15s ease-in-out;
        transition: all .15s ease-in-out;
      }
      
      .btn:hover {
        background-color: #00a4df;
      }
      
      .btn:active {
        background-color: #008ec0;
      }

      @media screen and (min-width: 576px) and (max-width: 768px) {
        .body-wrapper {
          padding: 24px !important;
        }

        .content-wrapper {
          max-width: 504px !important;
          padding: 48px !important;
        }
      }

      @media screen and (min-width: 768px) {
        .body-wrapper {
          padding: 48px !important;
        }

        .content-wrapper {
          max-width: 456px !important;
          padding: 72px !important;
          padding-top: 48px !important;
        }
      }
    </style>
    <style type="text/css">
      @media only screen and (min-width:480px) {
        .mj-column-per-100 { width:100%!important; }
      }
    </style>
  </head>
  
  <body>
    <div class="mj-container body-wrapper">
      <!--[if mso | IE]>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600"
        align="center" style="width:600px;">
          <tr>
            <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
            <![endif]-->
            <div style="margin:0px auto;max-width:600px;background:#fff;" class="content-wrapper"
            data-class="content-wrapper">
              <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;background:#fff;"
              align="center" border="0">
                <tbody>
                  <tr>
                    <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px;">
                    
                            <div style="margin:0px auto;max-width:600px;">
                              <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;"
                              align="center" border="0">
                                <tbody>
                                  <tr>
                                    <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px;">
                                     
                                            <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:middle;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                                              <table role="presentation" cellpadding="0" cellspacing="0" style="vertical-align:middle;"
                                              width="100%" border="0">
                                                <tbody>
                                                  <tr>
                                                    <td style="word-wrap:break-word;font-size:0px;padding:0px;" align="center">
                                                      <table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;"
                                                      align="center" border="0">
                                                        <tbody>
                                                          <tr>
                                                           <!--  <td style="width:150px;">
                                                              <img alt="Logo" title="" height="auto" src="https://d2yjfm58htokf8.cloudfront.net/static/images/tw_logo-v2.png"
                                                              style="border:none;border-radius:0px;display:block;font-size:13px;outline:none;text-decoration:none;width:100%;height:auto;"
                                                              width="150">
                                                            </td> -->
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                           
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                           
                            <div style="margin:0px auto;max-width:600px;">
                              <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;"
                              align="center" border="0">
                                <tbody>
                                  <tr>
                                    <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px;">
                                     
                                            <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                                              <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                  <tr>
                                                    <td style="word-wrap:break-word;font-size:0px;padding:0px;">
                                                      <div style="font-size:1px;line-height:48px;white-space:nowrap;"> </div>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          
                            <div style="margin:0px auto;max-width:600px;">
                              <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;"
                              align="center" border="0">
                                <tbody>
                                  <tr>
                                    <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px;">
                                     
                                            <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                                              <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                  <tr>
                                                    <td style="word-wrap:break-word;font-size:0px;padding:0px;" align="left">
                                                      <div style="cursor:auto;color:#5d7079;font-family:TW-Averta-Regular, Averta, Helvetica, Arial;font-size:16px;line-height:24px;letter-spacing:0.4px;text-align:left;">
                                                        <br>
                                                        <p>Hello, '.$data['name'].'</p>
                                                        <p class="hero">Thanks for signing up.</b><br>
                                                        We are really excited for you to join our community.<br> Use the link bellow to manage your account.</p>
                                                        <p>
                                                          <a href="http://prifa.com.ng/users/login.php" class="btn" mc:disable-tracking="">Manage your account</a>
                                                        </p>
                                                        <p>If you don’t know why you got this email, please tell us straight away so we can
                                                          fix this for you.</p>
                                                        <hr style="margin-top: 56px">
                                                        <p class="mb-0">Thanks,</p>
                                                        <p class="mb-0">Prifa Team</p>
                                                      </div>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                       
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
           
            <div style="margin:0px auto;max-width:600px;" class="content-wrapper footer-wrapper">
              <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;"
              align="center" border="0">
                <tbody>
                  <tr>
                    <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px;">
                      
                            <div style="margin:0px auto;max-width:600px;">
                              <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;"
                              align="center" border="0">
                                <tbody>
                                  <tr>
                                    <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px;">
                                      
                                            <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                                              <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                  <tr>
                                                    <td style="word-wrap:break-word;font-size:0px;padding:0px;">
                                                      <div style="font-size:1px;line-height:24px;white-space:nowrap;"> </div>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            
    </div>
  </body>

</html>
  
  
</body>
</html>
  ';

  /*<html>
  <head>
    <title>Registration Information</title>
  </head>
  <body>
    <p>Welcome to ' . SITENAME . ' !</p>
    <p>Click on the link below to complete your registration.</p>
    <p><a href="' . URLROOT . 'users/compsignup/'. strtolower(trim($email)) .'" target="_blank">/users/compsignup/'.uniqid().uniqid().uniqid().uniqid().uniqid().'</a></p>
  </body>
  </html>*/
  
  // To send HTML mail, the Content-type header must be set
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  
  // Additional headers
  $headers .= 'To: '.strtolower(trim($data['email'])). "\r\n";
  $headers .= 'From: ' . SITENAME . ' <info@' . URLNAME;
  //$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
  //$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n"; ?email='.strtolower(trim($_POST['txtEmail']))
  
  // Mail it
  
  if(mail($to, $subject, $message, $headers)){
      return true;
	}
	else{
		return false;
	}
}



function sendMail_LIVE_Registration($email){
    // Send To Email
  $to  = strtolower(trim($email));
  //$to  = strtolower(trim("root@localhost"));
  
  // subject
  $subject = 'Registration Information From ' . URLNAME;
  
  // message
  $message = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>' . SITENAME . '</title>
  <style type="text/css">

  * {
    margin:0;
    padding:0;
    font-family: Helvetica, Arial, sans-serif;
  }

  img {
    max-width: 100%;
    outline: none;
    text-decoration: none;
    -ms-interpolation-mode: bicubic;
  }

  .image-fix {
    display:block;
  }

  .collapse {
    margin:0;
    padding:0;
  }

  body {
    -webkit-font-smoothing:antialiased;
    -webkit-text-size-adjust:none;
    width: 100%!important;
    height: 100%;
    text-align: center;
    color: #747474;
    background-color: #ffffff;
  }

  h1,h2,h3,h4,h5,h6 {
    font-family: Helvetica, Arial, sans-serif;
    line-height: 1.1;
  }

  h1 small, h2 small, h3 small, h4 small, h5 small, h6 small {
    font-size: 60%;
    line-height: 0;
    text-transform: none;
  }

  h1 {
    font-weight:200;
    font-size: 44px;
  }

  h2 {
    font-weight:200;
    font-size: 32px;
    margin-bottom: 14px;
  }

  h3 {
    font-weight:500;
    font-size: 27px;
  }

  h4 {
    font-weight:500;
    font-size: 23px;
  }

  h5 {
    font-weight:900;
    font-size: 17px;
  }

  h6 {
    font-weight:900;
    font-size: 14px;
    text-transform: uppercase;
  }

  .collapse {
    margin:0!important;
  }

  td, div {
    font-family: Helvetica, Arial, sans-serif;
    text-align: center;
  }

  p, ul {
    margin-bottom: 10px;
    font-weight: normal;
    font-size:14px;
    line-height:1.6;
  }

  p.lead {
    font-size:17px;
  }

  p.last {
    margin-bottom:0px;
  }

  ul li {
    margin-left:5px;
    list-style-position: inside;
  }

  a {
    color: #747474;
    text-decoration: none;
  }

  a img {
    border: none;
  }

  .head-wrap {
    width: 100%;
    margin: 0 auto;
    background-color: #f9f8f8;
    border-bottom: 1px solid #d8d8d8;
  }

  .head-wrap * {
    margin: 0;
    padding: 0;
  }

  .header-background {
    background: repeat-x url(https://www.filepicker.io/api/file/wUGKTIOZTDqV2oJx5NCh) left bottom;
  }

  .header {
    height: 42px;
  }

  .header .content {
    padding: 0;
  }

  .header .brand {
    font-size: 16px;
    line-height: 42px;
    font-weight: bold;
  }

  .header .brand a {
    color: #464646;
  }

  .body-wrap {
    width: 505px;
    margin: 0 auto;
    background-color: #ffffff;
  }

  .soapbox .soapbox-title {
    font-size: 30px;
    color: #464646;
    padding-top: 25px;
    padding-bottom: 28px;
  }

  .content .status-container.single .status-padding {
    width: 80px;
  }

  .content .status {
    width: 90%;
  }

  .content .status-container.single .status {
    width: 300px;
  }

  .status {
    border-collapse: collapse;
    margin-left: 15px;
    color: #656565;
  }

  .status .status-cell {
    border: 1px solid #b3b3b3;
    height: 50px;
  }

  .status .status-cell.success,
  .status .status-cell.active {
    height: 65px;
  }

  .status .status-cell.success {
    background: #f2ffeb;
    color: #51da42;
  }

  .status .status-cell.success .status-title {
    font-size: 15px;
  }

  .status .status-cell.active {
    background: #fffde0;
    width: 135px;
  }

  .status .status-title {
    font-size: 16px;
    font-weight: bold;
    line-height: 23px;
  }

  .status .status-image {
    vertical-align: text-bottom;
  }

  .body .body-padded,
  .body .body-padding {
    padding-top: 5px;
  }

  .body .body-padding {
    width: 41px;
  }

  .body-padded,
  .body-title {
    text-align: left;
  }

  .body .body-title {
    font-weight: bold;
    font-size: 17px;
    color: #464646;
  }

  .body .body-text .body-text-cell {
    text-align: left;
    font-size: 14px;
    line-height: 1.6;
    padding: 9px 0 17px;
  }

  .body .body-signature-block .body-signature-cell {
    padding: 25px 0 30px;
    text-align: left;
  }

  .body .body-signature {
    font-family: "Comic Sans MS", Textile, cursive;
    font-weight: bold;
  }

  .footer-wrap {
    width: 100%;
    margin: 0 auto;
    clear: both !important;
    background-color: #e5e5e5;
    border-top: 1px solid #b3b3b3;
    font-size: 12px;
    color: #656565;
    line-height: 30px;
  }

  .footer-wrap .container {
    padding: 14px 0;
  }

  .footer-wrap .container .content {
    padding: 0;
  }

  .footer-wrap .container .footer-lead {
    font-size: 14px;
  }

  .footer-wrap .container .footer-lead a {
    font-size: 14px;
    font-weight: bold;
    color: #535353;
  }

  .footer-wrap .container a {
    font-size: 12px;
    color: #656565;
  }

  .footer-wrap .container a.last {
    margin-right: 0;
  }

  .footer-wrap .footer-group {
    display: inline-block;
  }

  .container {
    display: block !important;
    max-width: 505px !important;
    clear: both !important;
  }

  .content {
    padding: 0;
    max-width: 505px;
    margin: 0 auto;
    display: block;
  }

  .content table {
    width: 100%;
  }


  .clear {
    display: block;
    clear: both;
  }

  table.full-width-gmail-android {
    width: 100% !important;
  }

  </style>

  <style type="text/css" media="only screen">

  @media only screen {

    table[class*="head-wrap"],
    table[class*="body-wrap"],
    table[class*="footer-wrap"] {
      width: 100% !important;
    }

    td[class*="container"] {
      margin: 0 auto !important;
    }

  }

  @media only screen and (max-width: 505px) {

    *[class*="w320"] {
      width: 320px !important;
    }

    table[class="status"] td[class*="status-cell"],
    table[class="status"] td[class*="status-cell"].active {
      display: block !important;
      width: auto !important;
    }

    table[class="status-container single"] table[class="status"] {
      width: 270px !important;
      margin-left: 0;
    }

    table[class="status"] td[class*="status-cell"],
    table[class="status"] td[class*="status-cell"].active,
    table[class="status"] td[class*="status-cell"] [class*="status-title"] {
      line-height: 65px !important;
      font-size: 18px !important;
    }

    table[class="status-container single"] table[class="status"] td[class*="status-cell"],
    table[class="status-container single"] table[class="status"] td[class*="status-cell"].active,
    table[class="status-container single"] table[class="status"] td[class*="status-cell"] [class*="status-title"] {
      line-height: 51px !important;
    }

    table[class="status"] td[class*="status-cell"].active [class*="status-title"] {
      display: inline !important;
    }

  }
  </style>
</head>

<body bgcolor="#ffffff">

  <div align="center">
    <table class="head-wrap w320 full-width-gmail-android" bgcolor="#f9f8f8" cellpadding="0" cellspacing="0" border="0" width="100%">
      <tr>
        <td background="https://www.filepicker.io/api/file/UOesoVZTFObSHCgUDygC" bgcolor="#ffffff" width="100%" height="8" valign="top">
          <!--[if gte mso 9]>
          <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;height:8px;">
            <v:fill type="tile" src="https://www.filepicker.io/api/file/UOesoVZTFObSHCgUDygC" color="#ffffff" />
            <v:textbox inset="0,0,0,0">
          <![endif]-->
          <div height="8">
          </div>
          <!--[if gte mso 9]>
            </v:textbox>
          </v:rect>
          <![endif]-->
        </td>
      </tr>
      <tr class="header-background">
        <td class="header container" align="center">
          <div class="content">
            <span class="brand">
              <a href="#">
                ' . SITENAME . '
              </a>
            </span>
          </div>
        </td>
      </tr>
    </table>

    <table class="body-wrap w320">
      <tr>
        <td></td>
        <td class="container">
          <div class="content">
            <table cellspacing="0">
              <tr>
                <td>
                  <table class="soapbox">
                    <tr>
                      <td class="soapbox-title">Welcome to ' . SITENAME . '!</td>
                    </tr>
                  </table>
                  <table class="body">
                    <tr>
                      <td class="body-padding"></td>
                      <td class="body-padded">
                        <div class="body-title">Thanks for signing up</div>
                        <table class="body-text">
                          <tr>
                            <td class="body-text-cell">
                              We are really excited for you to join our community! You are just one click away from activating your account.
                            </td>
                          </tr>
                        </table>
                        <div style="text-align:left;"><!--[if mso]>
                          <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:38px;v-text-anchor:middle;width:190px;" arcsize="11%" strokecolor="#407429" fill="t">
                            <v:fill type="tile" src="https://www.filepicker.io/api/file/N8GiNGsmT6mK6ORk00S7" color="#41CC00" />
                            <w:anchorlock/>
                            <center style="color:#ffffff;font-family:sans-serif;font-size:17px;font-weight:bold;">Come on back</center>
                          </v:roundrect>
                        <![endif]--><a href="' . URLROOT . 'users/compsignup/'. strtolower(trim($email)) .'"
                        style="background-color:#41CC00;background-image:url(https://www.filepicker.io/api/file/N8GiNGsmT6mK6ORk00S7);border:1px solid #407429;border-radius:4px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:17px;font-weight:bold;text-shadow: -1px -1px #47A54B;line-height:38px;text-align:center;text-decoration:none;width:190px;-webkit-text-size-adjust:none;mso-hide:all;">Activate Account!</a></div>
                        <table class="body-signature-block">
                          <tr>
                            <td class="body-signature-cell">
                              <p>Thanks so much,</p>
                              <p class="body-signature">Management</p>
                              <!--<p class="body-signature"><img src="https://www.filepicker.io/api/file/2R9HpqboTPaB4NyF35xt" alt="Company Name"></p>-->
                            </td>
                          </tr>
                        </table>
                      </td>
                      <td class="body-padding"></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>
        </td>
        <td></td>
      </tr>
    </table>

    <table class="footer-wrap w320 full-width-gmail-android" bgcolor="#e5e5e5">
      <tr>
        <td class="container">
          <div class="content footer-lead">
            <a href="#"><b>Get in touch</b></a> if you have any questions or feedback
          </div>
        </td>
      </tr>
    </table>
    <table class="footer-wrap w320 full-width-gmail-android" bgcolor="#e5e5e5">
      <tr>
        <td class="container">
          <div class="content">
            &copy; ' . Date ('Y') . ' ' . URLNAME . '. All Rights Reserved.
            <!--<a href="#">Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <span class="footer-group">
              <a href="#">Facebook</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="#">Twitter</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="#">Support</a>
            </span>-->
          </div>
        </td>
      </tr>
    </table>
  </div>

</body>
</html>

  ';

  /*<html>
  <head>
    <title>Registration Information</title>
  </head>
  <body>
    <p>Welcome to ' . SITENAME . ' !</p>
    <p>Click on the link below to complete your registration.</p>
    <p><a href="' . URLROOT . 'users/compsignup/'. strtolower(trim($email)) .'" target="_blank">/users/compsignup/'.uniqid().uniqid().uniqid().uniqid().uniqid().'</a></p>
  </body>
  </html>*/
  
  // To send HTML mail, the Content-type header must be set
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  
  // Additional headers
  $headers .= 'To: '.strtolower(trim($email)). "\r\n";
  $headers .= 'From: ' . SITENAME . ' <info@' . URLNAME;
  //$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
  //$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n"; ?email='.strtolower(trim($_POST['txtEmail']))
  
  // Mail it
  
  if(mail($to, $subject, $message, $headers)){
      return true;
    }
    else{
        return false;
    }
}

?>