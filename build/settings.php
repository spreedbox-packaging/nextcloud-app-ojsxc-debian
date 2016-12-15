<?php

OCP\User::checkAdminUser();

OCP\Util::addScript('ojsxc', 'admin');

$config = \OC::$server->getConfig();
$tmpl = new OCP\Template('ojsxc', 'settings');

$tmpl->assign('serverType', $config->getAppValue('ojsxc', 'serverType'));
$tmpl->assign('boshUrl', $config->getAppValue('ojsxc', 'boshUrl'));
$tmpl->assign('xmppDomain', $config->getAppValue('ojsxc', 'xmppDomain'));
$tmpl->assign('xmppResource', $config->getAppValue('ojsxc', 'xmppResource'));
$tmpl->assign('xmppOverwrite', $config->getAppValue('ojsxc', 'xmppOverwrite'));
$tmpl->assign('xmppStartMinimized', $config->getAppValue('ojsxc', 'xmppStartMinimized'));
$tmpl->assign('iceUrl', $config->getAppValue('ojsxc', 'iceUrl'));
$tmpl->assign('iceUsername', $config->getAppValue('ojsxc', 'iceUsername'));
$tmpl->assign('iceCredential', $config->getAppValue('ojsxc', 'iceCredential'));
$tmpl->assign('iceSecret', $config->getAppValue('ojsxc', 'iceSecret'));
$tmpl->assign('iceTtl', $config->getAppValue('ojsxc', 'iceTtl'));

return $tmpl->fetchPage();
