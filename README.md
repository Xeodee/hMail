# hMail 
:baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: :baseball: 
#### What is hMail?
hMail is a PHP based mailer that was developed for my cousin to mail multiple softball tallent scouts to come see her games. 

For her to use the mailer it was very simple. It pulls the info from data/list.xml

## NOTE: This is curretly not working, this was used a few years back to help her get a scholarship for playing softball in college. Needless to say, she is now in college with a softball scholarship!! Go Hannah!

* Paste the message to the scouts in the message field
* Add new scout would require a few fields
  * Name
  * School Name
  * School Mascot
  * Scouts email address

Once that Information was filled out, you click add. After she finished adding all the scouts it would generate an email:

```php
$email=''. 
'Dear Coach '.$coachName.','.

'<p>I am currently attending Bella Vista High School in Fair Oaks, CA. Having just entered my
sophomore year, I will graduate with the class of 2016. While conducting a college search, I
discovered that '.$schoolName.' and the '.$schoolMascot.' program align with my
goals in a number of areas.</p>

<p>I am interested in expanding my softball experience to the collegiate level. I have five year’s
competitive softball experience and am currently playing with the 16U Nor Cal Patriots. We
will be attending several showcase tournaments over the fall season spanning the Northern
and Southern California areas. My primary positions are pitcher, 3rd base and outfield. I am
hard working, possess a positive attitude and have determination to improve my game both
physically and mentally.</p>'.

'<p>A link to my skills video is embedded in my player profile here, Hannah Slaight Profile,
which also lists my academic and athletic accomplishments. I’ve also included our tentative
fall schedule below for your reference; I will forward game times as they become available. I
am hopeful your schedule will provide the opportunity to come watch me and my teammates
compete. If you cannot attend personally, the Nor Cal Patriots organization streams live
game video, if possible. You will be able to communicate by phone or text with
Coach/Liasion Ginger Johnson at 530­305­7508. If you are watching, please let Coach
Johnson know by text. You will be able to watch live <a href="http://norcalpatriots.org/16u/16u-live­stream/">here</a>.</p>'.

'<p>Fall 2013 Schedule <br>
October 25­27 Halloween Showcase Huntington Beach<br>
Noble Creek Park, Beaumont, CA 92223<br>
Saturday­ 1:15pm &amp; 4:45pm &amp; 6:30pm<br>
Sunday­ 8:00am &amp; 9:30am<br>
November 1­3 Fall Showcase Tournament San Diego<br>
November 22­24 Early Thanksgiving Showcase Huntington Beach</p>'.

'<p>Thank you in advance for your time, I will be back in touch soon.</p>'.

'<p>Thank you,</p>'.

'<p>Hannah Slaight<br>
2016 Recruit<br>
Nor Cal Patriots</p>'.
```
