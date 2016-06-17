<?php

/*
* Author: Greg London
* http://greglondon.info
*/

class Zend_View_Helper_HeadBanner extends Zend_View_Helper_Abstract
{
	public function HeadBanner()
	{
		$ra = array(); 
		
	
		$refId = new Zend_View_Helper_RefIds();
		
		
		foreach ($refId->refIds() as $ref) {
		
if ($ref->hits4pay != '') {
$ra[] = '<a href="http://hits4pay.com/members/index.cgi?'.$ref->hits4pay.'" target="_blank"><img border="0" src="http://hits4pay.com/imgn/banners/468x60.png" width="468" height="60"></a>';
} else {
$ra[] = '<a href="http://hits4pay.com/members/index.cgi?gdc25" target="_blank"><img border="0" src="http://hits4pay.com/imgn/banners/468x60.png" width="468" height="60"></a>';
}
if ($ref->inboxdollars != '') {
$ra[] = '<a href="http://www.inboxdollars.com/?r='.$ref->inboxdollars.'" target="_blank"><img src="http://www.inboxdollars.com/graphics/creative/banners/468x60/468x60_2.gif" border="0" /></a>';
} else {
$ra[] = '<a href="http://www.inboxdollars.com/?r=ref12218393" target="_blank"><img src="http://www.inboxdollars.com/graphics/creative/banners/468x60/468x60_2.gif" border="0" /></a>';
}
if ($ref->sendearnings != '') {
$ra[] = '<a href="http://www.sendearnings.com/?r='.$ref->sendearnings.'" target="_blank"><img src="http://www.sendearnings.com/graphics/creative/banners/468x60/468x60_1.jpg" border="0" /></a>';
} else {
$ra[] = '<a href="http://www.sendearnings.com/?r=ref271274" target="_blank"><img src="http://www.sendearnings.com/graphics/creative/banners/468x60/468x60_1.jpg" border="0" /></a>';
}
$ra[] = '<a href="http://www.gomezpeerzone.com/application-apply/?Referrer=gdc25" target="_blank"><img src="http://www.gomezpeerzone.com/wp-content/uploads/2011/11/468x60-static.gif" width="468" height="60" border="0"></a>';
$ra[] = '<a href="http://www.clixsense.com/?2251204" target="_blank"><img src="http://csstatic.com/banners/clixsense468x60g.png" border="0" /></a>';
if ($ref->uniquerewards != '') {
$ra[] = '<a href="http://www.uniquerewards.com/cgi-bin/main.cgi?cmd=newref&refid='.$ref->uniquerewards.'" target="_blank"><img src="http://www.uniquerewards.com/banners/ur_468x60_2.gif" border="0" width="468" height="60" alt="UniqueRewards - online rewards program"></a>';
} else {
$ra[] = '<a href="http://www.uniquerewards.com/cgi-bin/main.cgi?cmd=newref&refid=9440" target="_blank"><img src="http://www.uniquerewards.com/banners/ur_468x60_2.gif" border="0" width="468" height="60" alt="UniqueRewards - online rewards program"></a>';
}
if ($ref->surveysavvy != '') {
$ra[] = '<a href="https://www.surveysavvy.com/?m='.$ref->surveysavvy.'" target="_blank"><img src="http://www.signupandmakemoney.com/Assets/affiliate/surveysavvy-banner468.jpg" border="0" alt="Survey Savvy"></a>';
} else {
$ra[] = '<a href="https://www.surveysavvy.com/?m=2450703" target="_blank"><img src="http://www.signupandmakemoney.com/Assets/affiliate/surveysavvy-banner468.jpg" border="0" alt="Survey Savvy"></a>';
}
if ($ref->clixsense != '') {
$ra[] = '<a href="http://www.clixsense.com/?'.$ref->clixsense.'" target="_blank"><img src="http://csstatic.com/banners/clixsense468x60g.png" border="0" /></a>';
} else {
$ra[] = '<a href="http://www.clixsense.com/?2251204" target="_blank"><img src="http://csstatic.com/banners/clixsense468x60g.png" border="0" /></a>';
}
$ra[] = '<a href="http://www.signupandmakemoney.com/webinar/" target="_blank"><img src="http://www.signupandmakemoney.com/Assets/pws.jpg" border="0" alt="Secret Money Webinar"></a>';

	}

shuffle($ra); 

		
		return $ra[0]; 
	}
}
