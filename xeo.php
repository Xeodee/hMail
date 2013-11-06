<?php
/**
 * Created by PhpStorm.
 * User: smccard
 * Date: 10/29/13
 * Time: 12:04 AM
 */



    //require '/home/absorbstudio/absorbstudios.com/hMail/PHPMailer/PHPMailerAutoload.php';

/*function PHPMailerAutoload($classname)
{
    //Can't use __DIR__ as it's only in PHP 5.3+
    $filename = dirname(__FILE__).DIRECTORY_SEPARATOR.'class.'.strtolower($classname).'.php';
    if (is_readable($filename)) {
        require $filename;
    }
}

spl_autoload_register('PHPMailerAutoload', true, true);*/

    require 'PHPMailer/class.phpmailer.php';
    require 'PHPMailer/class.smtp.php';

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "djbrood@gmail.com";
    $mail->Password = "gammacloudline420187";
    $mail->setFrom('djbrood@gmail.com', 'Steve McCard');
    $mail->addReplyTo('djbrood@gmail.com', 'Steve McCard');
    //$mail->addAddress('slaights@gmail.com', 'Scott Slaight');
    //$mail->addCC('slaights@gmail.com','Your Name');
    $mail->AltBody = 'Come see me play Tonight!';
    $mail->Subject = 'Come see me play Tonight!';

    $XML = simplexml_load_file('data/list.xml');

    //echo 'xml' . $XML;

foreach ($XML as $school) {

    $mail->msgHTML("<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'><html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'><title>hMailer By Xeo</title></head><body><p style='margin-top:5pt;margin-bottom:5pt;margin-right:28pt'><span style='font-family:Times New Roman;font-size:12pt'>Dear Coach&nbsp;<span class='coachName'>".$school->name."</span><span style='font-family:Times New Roman;font-size:12pt;font-weight:normal'>, &nbsp;<br>&nbsp;<br>I am currently attending Bella Vista High School in Fair Oaks, CA. Having just entered my sophomore year, I will graduate with the class of 2016. While conducting a college search, I discovered that </span><span class='schoolName'>".$school->schoolName." </span> <span style='font-family:Times New Roman;font-size:12pt;font-weight:normal'>and the&nbsp;</span><span class='mascot'>".$school->mascot." </span><span style='font-family:Times New Roman;font-size:12pt;font-weight:normal'>program align with my goals in a number of areas. &nbsp;<br>&nbsp;<br>I am interested in expanding my softball experience to the collegiate level. I have five year's competitive softball experience and am currently playing with the 16U Nor Cal Patriots. We will be attending several showcase tournaments over the fall season spanning the Northern and Southern California areas. My primary positions are pitcher, 3<sup>rd</sup> base and outfield. I am hard working, possess a positive attitude and have determination to improve my game both physically and mentally.</span></span></p><p style='margin-top:5pt;margin-bottom:5pt;margin-right:28pt'><span style='font-family:Times New Roman;font-size:12pt;font-weight:normal'>&nbsp;<br>A link to my skills video is embedded in my player profile here, </span><a href='http://norcalpatriots.org/wp-content/uploads/2013/09/Hannah_Slaight.pdf' target='_blank'><span style='font-family:Times New Roman;font-size:12pt;font-weight:normal;text-decoration:underline;color:#0000ff'>Hannah Slaight Profile</span></a><span style='font-family:Times New Roman;font-size:12pt;font-weight:normal;text-decoration:none'>, which also lists my academic and athletic accomplishments. I've also included our tentative fall schedule below for your reference; I will forward game times as they become available. I am hopeful your schedule will provide the opportunity to come watch me and my teammates compete. If you cannot attend personally, the Nor Cal Patriots organization streams live game video, if possible. You will be able to communicate by phone or text with Coach/Liasion Ginger Johnson at </span><a><span style='font-family:Times New Roman;font-size:12pt;font-weight:normal;text-decoration:underline;color:#0066cc'>530-305-7508</span></a><span style='font-family:Times New Roman;font-size:12pt;font-weight:normal;text-decoration:none'>. If you are watching, please let Coach Johnson know by text. You will be able to watch live at: </span><a href='http://norcalpatriots.org/16u/16u-live-stream/' target='_blank'><span style='font-family: Times New Roman;font-size:12pt;font-weight:bold;text-decoration:underline;color:#0000ff'>http://norcalpatriots.org/16u/<wbr>16u-live-stream/</span></a></p><p style='margin-top:5pt;margin-bottom:5pt;margin-right:28pt'><span style='font-family:Times New Roman;font-size:12pt;font-weight:bold;text-decoration:underline'>Fall 2013 Schedule - </span></p><p style='margin-top:0pt;margin-bottom:2pt'><span style='font-family:Times New Roman;font-size:12pt;font-weight:bold'>October 25-27 Halloween Showcase Huntington Beach</span></p><p style='margin-top:2pt;margin-bottom:2pt'><span style='font-family:Times New Roman;font-size:12pt'>Noble Creek Park, Beaumont, CA 92223</span></p><p style='margin-top:2pt;margin-bottom:2pt'><span style='font-family:Times New Roman;font-size:12pt'>Saturday- 1:15pm &amp; 4:45pm &amp; 6:30pm</span></p><p style='margin-top:2pt;margin-bottom:2pt'><span style='font-family:Times New Roman;font-size:12pt'>Sunday- 8:00am &amp; 9:30am</span></p><p style='margin-top:2pt;margin-bottom:2pt'><span style='font-family:Times New Roman;font-size:12pt;font-weight:bold'>November 1-3 Fall Showcase Tournament San Diego</span></p><p style='margin-top:2pt;margin-bottom:5pt'><span style='font-family:Times New Roman;font-size:12pt;font-weight:bold'>November 22-24 Early Thanksgiving Showcase Huntington Beach</span></p><p style='margin-top:5pt;margin-bottom:5pt;margin-right:28pt'><span style='font-family:Times New Roman;font-size:12pt'>&nbsp;<br>Thank you in advance for your time, I will be back in touch soon.</span></p><p style='margin-top:5pt;margin-bottom:5pt;margin-right:28pt'><span style='font-family:Times New Roman;font-size:12pt'>&nbsp;<br>Thank you, </span></p><p style='margin-top:0pt;margin-bottom:0pt'><span style='font-family:Times New Roman;font-size:12pt'>Hannah Slaight&nbsp;<br>2016 Recruit</span></p><p style='margin-top:0pt;margin-bottom:0pt'><span style='font-family: Times New Roman;font-size:12pt'>Nor Cal Patriots</span></p></body></html>");
    $mail->addAddress($school->email);

    if (!$mail->send()) {
        echo "Mailer Error (" . str_replace("@", "&#64;", $row["email"]) . ') ' . $mail->ErrorInfo . '<br />';
        echo $school->email;
        break; //Abandon sending
    } else {
        echo "Message sent to :" . $row['full_name'] . ' (' . str_replace("@", "&#64;", $row['email']) . ')<br />';

    }
    // Clear all addresses and attachments for next loop
    $mail->clearAddresses();
    $mail->clearAttachments();
}
