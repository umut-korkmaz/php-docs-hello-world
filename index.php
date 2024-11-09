<?php

require_once('../vendor/autoload.php');

echo "Hello World5!";
error_log('test umut error log');

$telemetryClient = new \ApplicationInsights\Telemetry_Client();
$context = $telemetryClient->getContext();

// Necessary
$context->setInstrumentationKey('YOUR INSTRUMENTATION KEY');

// Optional
$context->getSessionContext()->setId(session_id());
$context->getUserContext()->setId('YOUR USER ID');
$context->getApplicationContext()->setVer('YOUR VERSION');
$context->getLocationContext()->setIp('YOUR IP');

// Start tracking
$telemetryClient->trackEvent('name of your event');
$telemetryClient->flush();

?>
