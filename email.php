<?php
 
 $message = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /><title>UNIFI E-mail Update</title></head><body><!-- Container table --><table> <!-- Header Table --><table><!-- Header Sub-Table --><table><tr><td><img src=https://lh5.googleusercontent.com/-RbIYx9ALIFI/TkoDnB5OupI/AAAAAAAAAJc/E032-F96Kmg/s1024/Banner.png\" height=\"175px\" width=\"650\" border=\"0\" style=\"display:block\" /></td></tr></table><!-- Nav Sub-Table --><table><tr><td height=\"35\" width=\"117\" align=\"Center\" style=\"font-size:1.4em; font-family: Helvetica;\" bgcolor=\"#36317D\"><a display=\"block\" style=\"text-decoration:none; color:#FED104; cursor:hand;\" href=\"http://www.unifreethought.com/\">The Blog</a></td><td height=\"35\" width=\"117\" align=\"Center\" style=\"font-size:1.4em; font-family: Helvetica;\" bgcolor=\"#36317D\"><a display=\"block\" style=\"text-decoration:none; color:#FED104;\" href=\"http://www.unifreethought.com/p/unifi-store.html\">The Store</a></td><td height=\"35\" width=\"117\" align=\"Center\" style=\"font-size:1.4em; font-family: Helvetica;\" bgcolor=\"#36317D\"><a display=\"block\" style=\"text-decoration:none; color:#FED104;\" href=\"http://www.facebook.com/unifreethinkers?ref=ts\">Facebook</a></td><td height=\"35\" width=\"117\" align=\"Center\" style=\"font-size:1.4em; font-family: Helvetica;\" bgcolor=\"#36317D\"><a display=\"block\" style=\"text-decoration:none; color:#FED104;\" href=\"http://twitter.com/#!/unifreethought\">Twitter</a></td><td height=\"35\" width=\"166\" align=\"Center\" style=\"font-size:1.4em; font-family: Helvetica;\" bgcolor=\"#36317D\"><a display=\"block\" style=\"text-decoration:none; color:#FED104;\" href=\"http://www.unifreethought.com/2010/12/buy-textbooks-from-amazon-and-help.html\">Support UNIFI</a></td></tr></table></table><!-- Content Column Table --><table width=\"650\";><tr ><td width=\"3%\";></td><td><h1 style=\"color: #36317D; font-family: Helvetica;\">Fall Semester Retrospective</h1><p style=\"font-size:1.1em; font-family: Helvetica;\"><strong>UNIFI co-hosts our biggest recruitment event ever</strong></p><p style=\"font-size:1.1em; font-family: Helvetica;\"><strong>UNIFI is Good Without Go during Out Week 2011</strong></p><p style=\"font-size:1.1em; font-family: Helvetica;\"><strong>A focus on service & Humanist values</strong></p><h1 style=\"color: #36317D; font-family: Helvetica;\">Darwin Week and Beyond</h1><p style=\"font-size:1.1em; font-family: Helvetica;\"><strong>Darwin Week 2012 will be bigger and better than ever</strong></p></td><td width=\"3%\";></td></tr></table><!-- Footer Table --><table><tr><td height=\"60\" width=\"650\" style=\"background-color:rgb(216,216,216);\" align=\"center\"> | <a href=\"Google.com\">Unsubscribe from future updates</a> | <a href=\"mailto:contact@unifreethought.com\">Contact us</a> | <a href=\"Google.com\">Report error</a> |</td></tr></table></table></body></html>";
  
  $headers  = "From: UNI Freethinkers and Inquirers <contact@unifreethought.com>\r\n";  
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $version = "v4";
  $subject = "This is a test ({$version}) from PHP";
  mail("michael.s.dippold@gmail.com", $subject, $message, $headers);
  mail("adam@unifreethought.com", $subject, $message, $headers);
  mail("cory@unifreethought.com", $subject, $message, $headers);
  mail("friel@unifreethought.com", $subject, $message, $headers);
  mail("john@unifreethought.com", $subject, $message, $headers);
  mail("tony@unifreethought.com", $subject, $message, $headers);