<?php
/**
* iCricket League Statistics Module
*
* @copyright	The ImpressCMS Project http://www.impresscms.org/
* @license	http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @package	module
* @since		1.0
* @author		vaughan <vaughan@impresscms.org>
* @version	$Id: footer.php 1 2008-08-10 14:00:45Z m0nty_ $
*/

global $xoopsModule, $xoopsModuleConfig;
$uid = ($xoopsUser) ? (intval($xoopsUser->getVar('uid'))) : 0;

$xoopsTpl->assign('icricketstats_adminpage', '<a href="'.ICRICKETSTATS_URL.'/admin/index.php">'._MD_ICS_ADMIN_PAGE.'</a>');
$xoopsTpl->assign('isAdmin', $icricketstats_isAdmin);
$xoopsTpl->assign('icricketstats_url', ICRICKETSTATS_URL);

include_once ICMS_ROOT_PATH.'/footer.php';
?>