<?php

$client = new GearmanClient();
$client->addServer();

$args = array('test' => 'test1');
$args = serialize($args);

$client->doBackground('poll', $args);
$client->doBackground('poll', $args);
$client->doBackground('poll', $args);
$client->doBackground('poll', $args);
$client->doBackground('poll', $args);
$client->doBackground('poll', $args);
$client->doBackground('poll', $args);
$client->doBackground('poll', $args);


if (! $client->runTasks())
{
    echo "ERROR " . $gmc->error() . "\n";
    exit;
}

echo "Done";
