<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Libeo.' . $_EXTKEY,
	'List',
	array(
		'Service' => 'list, ',
		
	),
	// non-cacheable actions
	array(
		'Service' => '',
		
	)
);
