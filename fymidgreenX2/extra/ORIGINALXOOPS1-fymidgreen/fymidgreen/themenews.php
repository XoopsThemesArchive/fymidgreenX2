<?php
/************************************************************/
/* Function themeindex() */
/* */
/* This function format the stories on the Homepage */
/************************************************************/
function themenews ($poster, $time, $title, $counter, $thetext, $timglink, $adminlink, $morelink="") {
global $xoopsConfig,$xoopsTheme;
echo "
<table border='0' width='100%' cellpadding='3' cellspacing='1' class='forumline'>
<tr>
<th align='left'><img src='".$xoopsConfig['xoops_url']."/themes/".$xoopsTheme['thename']."/imagens/doth.gif' align='middle' width='8' height='8'>&nbsp;$title</th>
</tr>
<tr>
<td>
<span class='gensmall'>"._TH_POSTEDBY." $poster &nbsp;"._TH_ON." $time &nbsp;"._TH_READS." $counter</span>
<p style='line-height:140%; margin-left:10; margin-top:2; margin-bottom:5'>
$timglink $thetext
</td>
</tr>
<tr>
<td align='right' class='headline'>$adminlink";
if ($morelink != "" ) {
echo $morelink;
}
echo"</td>
</tr>
</table>
<br />";
}
?>