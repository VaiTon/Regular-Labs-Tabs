<?php
/**
 * @package         Regular Labs Installer
 * @version         20.4.17841
 * 
 * @author          Peter van Westen <info@regularlabs.com>
 * @link            http://www.regularlabs.com
 * @copyright       Copyright © 2020 Regular Labs All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

defined('_JEXEC') or die;

if ( ! class_exists('RegularLabsInstaller'))
{
	require_once __DIR__ . '/script.helper.php';
}

class PlgSystemRegularLabsInstallerTabsInstallerScript extends RegularLabsInstaller
{
	var $dir           = null;
	var $installerName = 'regularlabsinstallertabs';

	public function __construct()
	{
		$this->dir = __DIR__;
	}
}
