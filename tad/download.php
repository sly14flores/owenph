<?php

$_POST = json_decode(file_get_contents('php://input'), true);

require 'vendor/autoload.php';

require 'lib/TADFactory.php';
require 'lib/TAD.php';
require 'lib/TADResponse.php';
require 'lib/Providers/TADSoap.php';
require 'lib/Providers/TADZKLib.php';
require 'lib/Exceptions/ConnectionError.php';
require 'lib/Exceptions/FilterArgumentError.php';
require 'lib/Exceptions/UnrecognizedArgument.php';
require 'lib/Exceptions/UnrecognizedCommand.php';

use TADPHP\TADFactory;
use TADPHP\TAD;

$filter = array(
	// "host"=>"owenph.dyndns-remote.com",
	"host"=>"49.150.247.187",
	"start"=>"2019-05-19",
	"end"=>"2019-05-21"
);

$options = array(
	'ip'=>$filter['host'],
	'internal_id'=>1,    // 1 by default.
	'com_key'=>0,        // 0 by default.
	'description'=>'N/A', // 'N/A' by default.
	'soap_port'=>80,     // 80 by default,
	'udp_port'=>4370,      // 4370 by default.
	'encoding'=>'iso8859-1'    // iso8859-1 by default. / utf-8
);

$tad_factory = new TADFactory($options);
$tad = $tad_factory->get_instance();

// $filter_dates = array("start"=>date("Y-m-d",strtotime($_POST['start'])),"end"=>date("Y-m-d",strtotime($_POST['end'])));
$filter_dates = array("start"=>$filter['start'],"end"=>$filter['end']);
$logs = $tad->get_att_log()->filter_by_date($filter_dates)->to_json();
// $logs = $tad->get_att_log()->filter_by_date($filter_dates);

var_dump($logs);

?>