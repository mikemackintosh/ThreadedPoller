#!/usr/bin/php
<?php

echo "Starting SNMP Poller Daemon..." . PHP_EOL;

try{
$worker = new GearmanWorker();
$worker->addServer();
$worker->addFunction('poll', 'poll');


while ($worker->work()) {

	// somethign here
}

}
catch(\GearmanException $e){
echo $e->getMessage();
}

function poll($job) {

    echo "Received job: " . $job->handle() . PHP_EOL;

    print_r($job);
    echo $job->workload();
    echo "Finished" . PHP_EOL;  

}
