<?php

/*********************************************************************
* Extension configuration file for ext "svconnector_csv".
*
* Generated by ext 02-05-2016 09:18 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Connector service - CSV',
  'description' => 'Connector service for reading a CSV or similar flat file',
  'category' => 'services',
  'author' => 'Francois Suter (Cobweb), Andre Wuttig, Axel Boeswetter, Christian Deussen',
  'author_email' => 'typo3@cobweb.ch, wuttig@portrino.de, boeswetter@portrino.de',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'author_company' => 'Cobweb, portrino GmbH',
  'version' => '2.0.1',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.6.0-7.99.99',
      'svconnector' => '3.0.0-0.0.0',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:25:{s:9:"ChangeLog";s:4:"765e";s:11:"LICENSE.txt";s:4:"6404";s:10:"README.txt";s:4:"dfb5";s:13:"composer.json";s:4:"1d19";s:21:"ext_conf_template.txt";s:4:"31b9";s:12:"ext_icon.png";s:4:"935e";s:17:"ext_localconf.php";s:4:"1267";s:32:"Classes/Service/ConnectorCsv.php";s:4:"c0b4";s:26:"Documentation/Includes.txt";s:4:"c83c";s:23:"Documentation/Index.rst";s:4:"2b4f";s:26:"Documentation/Settings.yml";s:4:"8b5f";s:25:"Documentation/Targets.rst";s:4:"cc7b";s:37:"Documentation/Configuration/Index.rst";s:4:"1c8b";s:33:"Documentation/Developer/Index.rst";s:4:"02e1";s:36:"Documentation/Installation/Index.rst";s:4:"5e16";s:36:"Documentation/Introduction/Index.rst";s:4:"a139";s:40:"Resources/Private/Language/locallang.xlf";s:4:"c895";s:42:"Resources/Public/Samples/Configuration.txt";s:4:"0fad";s:31:"Tests/Unit/ConnectorCsvTest.php";s:4:"a7fc";s:40:"Tests/Unit/Fixtures/AsteroidData_bom.csv";s:4:"5ebf";s:42:"Tests/Unit/Fixtures/AsteroidData_nobom.csv";s:4:"1c3c";s:34:"Tests/Unit/Fixtures/BlankLines.csv";s:4:"4e25";s:44:"Tests/Unit/Fixtures/CleanDataNoHeaderRow.csv";s:4:"583f";s:46:"Tests/Unit/Fixtures/CleanDataWithHeaderRow.csv";s:4:"e66c";s:30:"Tests/Unit/Fixtures/README.txt";s:4:"7289";}',
  'comment' => 'Verified compatibility with TYPO3 CMS 7; moved to namespaces.',
  'user' => 'francois',
);

?>
