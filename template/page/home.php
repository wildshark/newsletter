<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Copernica Marketing Software</title>
    <style type="text/css">
      
      /* Default CSS */
      body,#body_style {margin: 0; padding: 0; background: #E9F2F9; color: #5b656e;}
      a {color: #09c;}
      a img {border: none; text-decoration: none;}
      table, table td {border-collapse: collapse;}
      td, h1, h2, h3, p {font-family: tahoma, geneva, sans-serif; color: #313a42;}
      h1, h2, h3, h4 {color: #313a42 !important; font-weight: normal; line-height: 1.2;}
      h1 {font-size: 24px;}
      h2 {font-size: 18px;}
      h3 {font-size: 16px;}
      p {margin: 0 0 1.6em 0;}
      
      /* Force Outlook to provide a "view in browser" menu link. */
      #outlook a {padding:0;}
      
      /* Preheader and webversion */
      .preheader {background-color: #8bafcb;}
      .preheaderContent, .webversion, .webversion a {color: #ffffff; font-size: 10px;}
      .preheaderContent{width: 440px;}
      .preheaderContent, .webversion {padding: 5px 10px;}
      .webversion {width: 200px; text-align: right;}
      .webversion a {text-decoration: underline; color: #ffffff; font-size: 10px;}
      
      /* Logo (branding) */
      .logoContainer {padding: 20px 0 10px 0px; width: 320px;}
      .logoContainer a {color: #ffffff;}
      
      /* Whitespace (imageless spacer) */
      .whitespace {font-family: 0px; line-height: 0px;}
      
      /* Button */
      .buttonContainer {padding: 10px 0px 10px 0px;}
      .button {padding: 5px 5px 5px 5px; text-align: center; border:1px solid #f75666; border-radius: 4px;}
      .button a {color: #f75666; text-decoration: none; display: block; font-size: 13px;}
      
      /* Complete email content */
      .emailContainer {padding: 40px 20px 10px 20px; background: #ffffff; border-radius: 4px;}
      
      /* An article */
      .sectionContentTitle, .sectionMainTitle {color: #5b656e;}
      .sectionContentTitle, .sectionContent, .sectionContentSubTitle {padding: 0px 5px 0px 0px;}
      
      .sectionContentTitle {font-size: 18px; padding: 0px 0px 5px; 0px;}
      .sectionContentSubTitle {font-size: 10px; text-transform: uppercase; padding: 0px 0px 5px 0px;}
      .sectionContent {font-size: 13px; line-height: 18px;}
      
      .sectionArticleImage {padding: 0px 15px 0px 0px;}
      .sectionArticleImage img {padding: 0px 0px 0px 0px; -ms-interpolation-mode: bicubic; display: block; border: 1px solid #5b656e;}
      
      /* Footer and social media */
      .footNotes {padding: 0px 20px 0px 20px;}
      .footNotes a {color: #f75666; font-size: 13px;}
      .socialMedia {background: #8bafcb;}
      
      /* Column */
      .column {padding-bottom: 20px;}
      
      /* CSS for specific screen width(s) */
      @media only screen and (max-width: 480px) {
        body,table,td,p,a,li,blockquote {-webkit-text-size-adjust:none !important;}
          body[yahoofix] table {width: 100% !important;}
          body[yahoofix] .webversion {display: none; font-size: 0; max-height: 0; line-height: 0; mso-hide: all;}
          body[yahoofix] .logoContainer {text-align: center;}
          body[yahoofix] .sectionContentTitle, body[yahoofix] .sectionContentSubTitle, body[yahoofix] .sectionContent {text-align: center; padding:0 5px 10px 5px;}
          body[yahoofix] .sectionArticleImage {padding-right: 0px !important;} 
          body[yahoofix] .sectionArticleImage img {margin: 0 auto;}
          body[yahoofix] .sectionPadding {padding: 0px 10px 0px 10px;}
          body[yahoofix] .buttonContainer {padding: 0px 20px 0px 20px;}
          body[yahoofix] .column {float: left; width: 100%; margin: 0px 0px 30px 0px; padding-bottom: 0px !important;}
        }
    </style>
  </head>
  <body yahoofix>
    <span id="body_style" style="display:block">
      
      <!-- Preheader -->
      <table class="preheader" cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td>
            <!-- Webversion -->
            <table border="0" cellpadding="0" cellspacing="0" summary="" width="640" align="center">
              <tr>
                <td class="preheaderContent">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                <td class="webversion">
                    No images? <a href="#" title="View the webversion">View the webversion</a>
                </td>
              </tr>
            </table>
            <!-- End Webversion -->
          </td>
        </tr>
      </table>
      <!-- End preheader -->
      
      <!-- topHeader -->
      <table border="0" cellspacing="0" cellpadding="0" width="100%" summary="" class="topHeader">
        <tr>
          <td>
            <!-- Logo (branding) -->
            <table border="0" cellspacing="0" cellpadding="0" width="640" align="center" summary="">
              <tr>
                <td class="logoContainer" align="center">
                  <a href="/" title="Lorem logo">
                    <img class="logo" src="book-logo.png" alt="Lorem logo" />
                  </a>
                </td>
              </tr>
            </table>
            <!-- End Logo (branding) -->
          </td>
        </tr>
      </table>
      <!-- End topHeader -->
      
      <table border="0" cellpadding="0" cellspacing="0" width="640" summary="" align="center">
        <tr><td class="whitespace" height="10">&nbsp;</td></tr>
        <tr>
          <td class="emailContainer" valign="top">
            <?=datasheet($data)?>
          </td>
        </tr>
        <tr><td class="whitespace" height="20">&nbsp;</td></tr>
      </table>
      
      <!-- Social media -->
      <table border="0" cellspacing="0" cellpadding="0" width="100%" summary="" class="socialMedia">
        <tr><td class="whitespace" height="20">&nbsp;</td></tr>
        <tr>
          <td>
            <table border="0" cellspacing="0" cellpadding="0" width="120" align="center" summary="">
              <tr>
                <td align="center" width="32">
                  <a href="https://www.twitter.com" title="Twitter"><img src="twitt.png" width="29" alt="Twitter" /></a>
                </td>
                <td align="center" width="32">
                  <a href="https://www.facebook.com" title="Facebook"><img src="faceb.png" width="29" alt="Facebook" /></a>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr><td class="whitespace" height="10">&nbsp;</td></tr>
      </table>
      <!-- End Social media -->
      
      <!-- Footer -->
      <table border="0" cellspacing="0" cellpadding="0" width="100%" summary="" class="footer">
        <tr><td class="whitespace" height="10">&nbsp;</td></tr>
        <tr>
          <td>
            <table border="0" cellspacing="0" cellpadding="0" width="120" align="center" summary="">
              <tr>
                <td class="footNotes" align="center">
                  <a href="#" title="Unsubscribe">Unsubscribe</a>
                </td>
                <td class="footNotes" align="center">
                  <a href="#" title="Lorem">Lorem</a>
                </td>
                <td class="footNotes" align="center">
                  <a href="?page=admin" title="Dolor">Admin</a>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr><td class="whitespace" height="10">&nbsp;</td></tr>
      </table>
      <!-- End Footer -->
    </span>
  </body>
</html>