<?php

namespace OCA\OJSXC\Settings;

use OCP\AppFramework\Http\TemplateResponse;
use OCP\Settings\ISettings;
use OCP\IConfig;

class Admin implements ISettings
{
	/** @var IConfig */
	private $config;

	public function __construct(IConfig $config)
	{
		$this->config = $config;
	}

	/**
	 * @return TemplateResponse
	 */
	public function getForm()
	{
		$externalServices = $this->config->getAppValue('ojsxc', 'externalServices');
		$externalServices = explode("|", $externalServices);

		$serverType = $this->config->getAppValue('ojsxc', 'serverType');

		$apiUrl = \OC::$server->getURLGenerator()->linkToRouteAbsolute('ojsxc.externalApi.index');

		$parameters = [
		   'serverType' => (!empty($serverType))? $serverType : 'internal',
		   'boshUrl' => $this->config->getAppValue('ojsxc', 'boshUrl'),
		   'xmppDomain' => $this->config->getAppValue('ojsxc', 'xmppDomain'),
		   'xmppPreferMail' => $this->config->getAppValue('ojsxc', 'xmppPreferMail'),
		   'xmppResource' => $this->config->getAppValue('ojsxc', 'xmppResource'),
		   'xmppOverwrite' => $this->config->getAppValue('ojsxc', 'xmppOverwrite'),
		   'xmppStartMinimized' => $this->config->getAppValue('ojsxc', 'xmppStartMinimized'),
		   'iceUrl' => $this->config->getAppValue('ojsxc', 'iceUrl'),
		   'iceUsername' => $this->config->getAppValue('ojsxc', 'iceUsername'),
		   'iceCredential' => $this->config->getAppValue('ojsxc', 'iceCredential'),
		   'iceSecret' => $this->config->getAppValue('ojsxc', 'iceSecret'),
		   'iceTtl' => $this->config->getAppValue('ojsxc', 'iceTtl'),
		   'firefoxExtension' => $this->config->getAppValue('ojsxc', 'firefoxExtension'),
		   'chromeExtension' => $this->config->getAppValue('ojsxc', 'chromeExtension'),
		   'timeLimitedToken' => $this->config->getAppValue('ojsxc', 'timeLimitedToken'),
		   'externalServices' => $externalServices,
		   'apiUrl' => $apiUrl,
		   'apiSecret' => $this->config->getAppValue('ojsxc', 'apiSecret'),
		   'userId' => \OC::$server->getUserSession()->getUser()->getUID(),
		   'managedServer' => $this->config->getAppValue('ojsxc', 'managedServer')
		];

		return new TemplateResponse('ojsxc', 'settings/admin', $parameters);
	}

	/**
	 * @return string the section ID, e.g. 'sharing'
	 */
	public function getSection()
	{
		return 'ojsxc';
	}

	/**
	 * @return int whether the form should be rather on the top or bottom of
	 * the admin section. The forms are arranged in ascending order of the
	 * priority values. It is required to return a value between 0 and 100.
	 *
	 * E.g.: 70
	 */
	public function getPriority()
	{
		return 50;
	}
}
