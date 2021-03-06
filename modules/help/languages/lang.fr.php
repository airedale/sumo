<?php

// Database
$dbname = array(

'mysql'		=> 'MySQL',
'postgres'	=> 'PostgreSQL',
'sqlite'	=> 'SQLite'

);


$module['language'] = array(

"Help"           => "Aide",
"Info"			 => "Information",
"Licence"		 => "Licence",
"Author"		 => "Auteur",
"Credits"	 	 => "Credits",
"InfoDetails"    => "<table>\n"
				   ."<tr><td align='right' style='padding-right:10px'><b>Version</b>:</td>"
				   ."<td>".SUMO_VERSION."</td></tr>\n"
				   ."<tr><td align='right' style='padding-right:10px'><b>d&eacute;gagement</b>:</td>"
				   ."<td style='width:100%'>".date($SUMO['config']['server']['date_format'], SUMO_UPDATED)."</td>"
				   ."</tr>\n"
				   ."<tr><td style='text-align:right;vertical-align:top;padding:10px'><b>Plateforme:</td>"
				   ."<td>".$_SERVER["SERVER_SOFTWARE"]."</td></tr>\n"
				   ."<tr><td style='text-align:right;vertical-align:top;padding-right:10px'><b>Database:</td>"
				   ."<td>".$dbname[$SUMO['server']['db_type']]."</td></tr>\n"
				   ."</table>"
				   ."<hr width='300' size='1'>"
				   ."&copy; 2003-".date("Y")." by Basso Alberto. All right reserved.<br>"
				   ."SUMO Access Manager and SUMO logo are Basso Alberto registered trademark\n"
				   ."<br><br>\n"
				   ."   web: <a href='http://sumoam.sourceforge.net' target='_blank'>http://sumoam.sourceforge.net</a><br>"
				   ."e-mail: <a href='mailto:albertobasso@users.sourceforge.net'>albertobasso@users.sourceforge.net</a>",

"Donation"		 =>  'I&#39;m working hard to this project, if you want you can contribute also only with 1&nbsp;&euro;<br><br>Thanks!',

"DonationIcon"	 =>  '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">'
					.'<input type="hidden" name="cmd" value="_s-xclick">'
					.'<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">'
					.'<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" style="padding: 5px">'
					.'<img alt="" border="0" src="https://www.paypal.com/it_IT/i/scr/pixel.gif" width="1" height="1">'
					.'</form>',

"CreditsDetails"	 =>  'I would like to give special thanks again everyone for helping to make this software better and easier for everyone:<br><br>'
                            .'<a href="http://www.runningroup.it" target="_new">Running Group s.r.l.</a> - Sponsor<br>'
						.'Alessandro Alfonsi - Beta tester<br>'
						.'Andrea Alfonso - Beta tester<br>'
						.'Roberto Amaduzzi - Beta tester<br>'
						.'Danilo D&rsquo;Egidi - Beta tester<br>'
						.'Federico Campoli</a> - PostgreSQL support'
						.'Massimiliano Fantuzzi - Beta tester<br>'
						.'Mark Moran - Beta tester<br>'
						.'F&eacute;lix Morillas - Espa&ntilde;ol translation, beta tester<br>'
						.'Domenico Nunnari - Beta tester<br>'
						.'',

/**
 * PLEASE DON'T REMOVE OR CHANGE AUTHOR DESCRIPTION. THANKS!
 *
 * PERFAVORE, NON RIMUOVERE O MODIFICARE QUESTE INFORMAZIONI. GRAZIE!
 */
"AuthorDetails"  => "<table>\n"
				   ."<tr>"
				   ."<td style='vertical-align: top;'>"
				   ."<img src='themes/".$SUMO['page']['theme']."/images/author.jpg' alt='Basso Alberto'>"
				   ."</td>"
				   ."<td style='padding-left:10px; vertical-align:top; width:400px;'>"
				   ."<b>Want to hire me as a freelancer?</b><br><br>"
				   ."If you're looking for an experienced LAMP (Linux, Apache, MySQL, PHP) developer and "
				   ."think that my skillset might just be what you need, please <a href='mailto:info@openprog.com'>contact me</a> to discuss details.<br><br>"
				   ."<pre>"
				   ."<b>Basso Alberto</b><br>\n"
				   ."Via A.Rompon, 13<br>"
				   ."42048 Rubiera (RE)<br>"
				   ."ITALY<br>\n"
				   ."e-mail: <a href='mailto:programmatoreprecario@gmail.com'>programmatoreprecario@gmail.com</a>"
				   ."</pre></td>"
				   ."</tr>"
				   ."</table>\n"

);

?>