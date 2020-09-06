<?php

/*
 ┌─────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL  |
 └─────────────────────────────────────────────────────────────┘
 ┌───────────┬─────────────────────────────────────────────────┐
 │ Product   │ PHP Source Code Regex Generator                 │
 │ Version   │ v1.0 BETA                                       │
 │ Provider  │ https://paidcodes.albdroid.al                   │
 │ Support   │ PHP 5/7                                         │
 │ Sources   │ Multiple Regex Data                             │
 │ Licence   │ Personal                                        │
 │ Author    │ Olsion Bakiaj                                   │
 │ Email     │ TRC4@USA.COM                                    │
 │ Author    │ Endrit Pano                                     │
 │ Email     │ INFO@ALBDROID.AL                                │
 │ Website   │ https://kodi.al                                 │
 │ Facebook  │ /albdroid.official/                             │
 │ Github    │ github.com/SxtBox/                              │
 │ Created   │ 29 August 2020                                  │
 │ Modified  │ 00:00:0000                                      │
 └─────────────────────────────────────────────────────────────┘
*/

/*
 PHP Code Generated Date: Sunday, 06 September 2020 - 15:19:31
 PHP Code Generated From Host: demo.kodi.al
*/

/*
   Error Output
   E_ALL or E_NOTICE or 0 For Disable
   https://www.php.net/manual/en/function.error-reporting.php
*/

ob_start();
error_reporting(0); // C'AKTIVOZO ERRORS ON PHP
set_time_limit(0); // SET UNLIMITET TIME LIMIT
@ini_set("default_socket_timeout", 10);
ini_set("user_agent", "Albdroid PHP Codes");
date_default_timezone_set("Europe/Tirane");

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
$KODI_STRUCTURE = <<<KODI
<item>
<title>[COLOR lime][B]Vidia.TV[/B][/COLOR][COLOR red][B] ([/B][/COLOR][COLOR lime][B]Single Stream Api[COLOR red][B])[/B][/COLOR]</title>
<thumbnail>http://png.kodi.al/tv/albdroid/black.png</thumbnail>
<fanart>http://png.kodi.al/tv/albdroid/black.png</fanart>
<link>\$doregex[get_mp4_stream]|User-Agent=iPad</link>
<regex>
<name>get_source_page</name>
<expres>(.*\w)</expres>
<page>https://paidcodes.albdroid.al/Vidia_Dot_TV_Apis/link_extractor.php?url=https://www.abfilma.co/2020/08/tri-mundesi-per-emen-3-times-charm-me.html</page>
</regex>
<regex>
<name>get_mp4_stream</name>
<expres>MP4_Stream":"(.*?)"</expres>
<page>https://paidcodes.albdroid.al/Vidia_Dot_TV_Apis/?url=\$doregex[get_source_page]</page>
<referer></referer>
<cookieJar></cookieJar>
</regex>
<genre>[COLOR lime][B][I]Albdroid[/I][/B][/COLOR][COLOR lime] [B][I][COLOR red]([/COLOR]Vidia.TV Api[COLOR red])[/COLOR][/I][/B][/COLOR]</genre>
<info>[COLOR blue][B]Author:[/B][/COLOR] [COLOR lime][B]Olsion Bakiaj[/B][/COLOR][COLOR red] &amp;[/COLOR][COLOR lime][B] Endrit Pano[/B][/COLOR]</info>
<date>[COLOR lime][B]06 September 2020[/B][/COLOR]</date>
</item>

<item> <!-- HERE IN MULTI LIST IS ACTIVATED ONLY ONE LINK TO PLAY -->
<title>[COLOR lime][B]Vidia.TV[/B][/COLOR][COLOR red][B] ([/B][/COLOR][COLOR lime][B]Multi Stream Api[COLOR red][B])[/B][/COLOR]</title>
<thumbnail>http://png.kodi.al/tv/albdroid/black.png</thumbnail>
<fanart>http://png.kodi.al/tv/albdroid/black.png</fanart>
<thumbnail></thumbnail>
<fanart></fanart>
<link>\$doregex[makelist]</link>
<regex>
<name>makelist</name>
<listrepeat><![CDATA[
<title>[COLOR lime][B][makelist.param1][/B][/COLOR]</title>
<link>\$doregex[get_mp4_stream]|User-Agent=iPad</link>
<thumbnail>https://png.kodi.al/tv/albdroid/black.png</thumbnail>
<fanart>https://png.kodi.al/tv/albdroid/black.png</fanart>
<genre>[COLOR lime][B][I]Albdroid[/I][/B][/COLOR][COLOR lime] [B][I][COLOR red]([/COLOR][makelist.param1][COLOR red])[/COLOR][/I][/B][/COLOR]</genre>
<info>[COLOR lime][B]Website:[/B][/COLOR] [COLOR red][B]([/B][/COLOR][COLOR lime][B]Albdroid.AL[/B][/COLOR] [COLOR red][B]&amp;[/B][/COLOR] [COLOR lime][B]Kodi.AL[/B][/COLOR][COLOR red][B])[/B][/COLOR]</info>
<date>[COLOR lime][B]06 September 2020[/B][/COLOR]</date>
<SetViewMode>504</SetViewMode>
]]></listrepeat>
<expres><![CDATA[Title(.*?.*\w)\nWebsite_Link(.*?.*\w)\nLink_Extractor(.*?.*\w)]]></expres>
<page>https://paidcodes.albdroid.al/Vidia_Dot_TV_Apis/some_links.php</page>
</regex>
<regex>
<name>get_source_page</name>
<expres>(.*\w)</expres>
<page>https://paidcodes.albdroid.al/Vidia_Dot_TV_Apis/link_extractor.php?url=https://www.abfilma.co/2020/08/tri-mundesi-per-emen-3-times-charm-me.html</page>
</regex>
<regex>
<name>get_mp4_stream</name>
<expres>MP4_Stream":"(.*?)"</expres>
<page>https://paidcodes.albdroid.al/Vidia_Dot_TV_Apis/?url=$doregex[get_source_page]</page>
</regex>
<genre>[COLOR lime][B][I]Albdroid[/I][/B][/COLOR][COLOR lime] [B][I][COLOR red]([/COLOR]Vidia.TV Api[COLOR red])[/COLOR][/I][/B][/COLOR]</genre>
<info>[COLOR blue][B]Author:[/B][/COLOR] [COLOR lime][B]Olsion Bakiaj[/B][/COLOR][COLOR red] &amp;[/COLOR][COLOR lime][B] Endrit Pano[/B][/COLOR]</info>
<date>[COLOR lime][B]06 September 2020[/B][/COLOR]</date>
</item>\n
KODI;

echo $KODI_STRUCTURE;
?>