<?
/************************************************************/
/* Theme Name: fymidgreen v1.3 */
/* Modified by deya. http://theme4u.simnext.com/ */
/* Last Updated: 2005/04/24 */
/************************************************************/

 $xoopsTheme['thename'] = "fymidgreen";

/************************************************************/
/* OpenTable Functions */
/* */
/* Define the tables look&feel for you whole site. For this */
/* we have two options: OpenTable and OpenTable2 functions. */
/* Then we have CloseTable and CloseTable2 function to */
/* properly close our tables. The difference is that */
/* OpenTable has a 100% width and OpenTable2 has a width */
/* according with the table content */
/************************************************************/

////センターブロックに表示するテーブル/////
function OpenTable($width="100%") {
 global $xoopsTheme;
 echo "<table width='".$width."' border='0' cellspacing='0' cellpadding='3' class='forumline'><tr><td valign='top'>";
 echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td valign='top'>";
 }
function CloseTable() {
 echo "</td></tr></table>";
 echo "</td></tr></table>";
 }

/************************************************************/
/* Function themeheader() */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks */
/* function for left side with: blocks(left); */
/************************************************************/
function themeheader($show_rblock){
 global $xoopsConfig, $xoopsTheme, $xoopsUser;
 if($xoopsUser){
 $username = $xoopsUser->uname();
		$uid = $xoopsUser->uid();
 } else {
 $username = $xoopsConfig['anonymous'];
 }
 echo "<script language=\"JavaScript\" src='".$xoopsConfig['xoops_url']."/themes/".$xoopsTheme['thename']."/fade.js'></script>\n";
 echo "</head>\n";
 echo "<BODY topmargin='0' leftmargin='0' rightmargin='0'>\n";
 OpenWaitBox();
 
/************************************************************/
/* EN DESSOUS SE TROUVE LE HEADER */
/************************************************************/
echo "<table border='0' width='100%' cellpadding='0' cellspacing='0'>
 <tr>
	<td class='bgtitle'>
	 <table border='0' width='100%' cellpadding='0' cellspacing='0'>
		<tr>
		 <td><a href='".$xoopsConfig['xoops_url']."'><img src='".$xoopsConfig['xoops_url']."/themes/".$xoopsTheme['thename']."/imagens/logo.gif' border='0'></a></td>
		 <td width='100%' align='center'>
 <!-- Xoops Banners -->\n";
		 if ( $xoopsConfig['banners'] ) {
		 showbanner();
		 }else{
		 echo"";
		 }
		 echo "
		 <!-- Xoops Banner End -->
		 </td>
		</tr>
	 </table>
	</td>
 </tr>
 <tr>
	<td class='headline'>
	 <table border='0' width='100%' cellpadding='0' cellspacing='0'>
 <tr><td><span class='gensmall'>
	 <!-- User Welcome Messeage -->\n";
	 if ($username == $xoopsConfig['anonymous']) {
		 echo "&nbsp;&nbsp;<font color=\"#ffffff\"><a href=\"".$xoopsConfig['xoops_url']."/register.php\">"._TH_CREATEACCOUNT."</a>\n";
	 } else {
		 echo "&nbsp;&nbsp;"._TH_WELCOME."&nbsp;<a href=\"".$xoopsConfig['xoops_url']."/userinfo.php?uid=$uid\">$username</a>";
	 }
	 echo "<!-- User Welcome Messeage End -->
	</span>
 	</td>
	<td align='right'>
	 <span class='gensmall'>
	 <script type=\"text/javascript\">
	 <!-- // Array ofmonth Names
	 var monthNames = new Array( \"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\");
	 var now = new Date();
	 thisYear = now.getYear();
	 if(thisYear < 1900) {thisYear += 1900};
	 document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear);
	 // -->
	 </script>
	 &nbsp;</span></td></tr></table>
	</td>
 </tr>
</table>
<table border='0' width='100%' cellpadding='3' cellspacing='0'>
 <tr>
	<td width='150' valign='top'>
	<!-- Start Sidebar -->";
 make_sidebar("left");
 echo"<!-- End Sidebar -->
 	</td>
 	<td width='100%' valign='top' align='center'>";
}

/************************************************************/
/* Function themefooter() */
/************************************************************/
function themefooter($show_rblock, $footer){
 global $xoopsConfig,$xoopsTheme;
 echo"</td>";
 if ( $show_rblock ) {
 echo"<td width='150' valign='top'>";
 make_sidebar("right");
 echo"</td>";
 }
 echo "</tr></table>";
 echo "<table border='0' width='100%' cellpadding='2' cellspacing='0'><tr>"
 ."<td align='center'>";
// echo $footer;
 echo "</td></tr><td class='headline' align='center'><span class='gensmall'>"
 ."Powered by&nbsp;".XOOPS_VERSION." &copy; 2002 <a href='http://br.xoops.org/' target='_blank'>The XOOPS Project</a> :: <a href=\"http://theme4u.simnext.com/\">theme4u</a>"
 ."</span></td></tr></table>";
 CloseWaitBox();
 }

/************************************************************/
/* Function themesidebox() */
/************************************************************/
function themesidebox($title, $content) {
 global $xoopsConfig,$xoopsTheme;
 echo "
<table border='0' width='150' cellpadding='3' cellspacing='1' class='forumline'>
 <tr>
	<th align='left'><img src='".$xoopsConfig['xoops_url']."/themes/".$xoopsTheme['thename']."/imagens/doth.gif' align='middle' width='8' height='8'>&nbsp;$title</th>
 </tr>
 <tr>
	<td>$content</td>
 </tr>
</table>
<br />";
 }

/************************************************************/
/* Function themecenterposts() */
/************************************************************/
function themecenterposts($title, $content) {
 global $xoopsConfig,$xoopsTheme;
 echo"
<table border='0' width='100%' cellpadding='3' cellspacing='1' class='forumline'>
 <tr>
	<th align='left'><img src='".$xoopsConfig['xoops_url']."/themes/".$xoopsTheme['thename']."/imagens/doth.gif' align='middle' width='8' height='8'>&nbsp;$title</th>
 </tr>
 <tr>
	<td>$content</td>
 </tr>
</table>";
 }

?>
