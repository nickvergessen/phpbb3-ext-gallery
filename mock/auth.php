<?php
/**
*
* @package phpBB Gallery Extension
* @copyright (c) 2013 nickvergessen
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace phpbbgallery\core\mock;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

class auth implements \phpbbgallery\core\auth\auth_interface
{
	public function acl_check($acl, $a_id, $u_id)
	{
		return true;
	}
}
