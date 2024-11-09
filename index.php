<?php
require __DIR__ . '/../vendor/autoload.php';

use ApplicationInsights\Telemetry_Client;
use ApplicationInsights\Channel\Telemetry_Channel;

$instrumentationKey = 'YOUR_INSTRUMENTATION_KEY';
$telemetryClient = new Telemetry_Client();
$telemetryClient->getContext()->setInstrumentationKey($instrumentationKey);

// Track a simple event
$telemetryClient->trackEvent('My custom event');

// Send the data to Application Insights
$telemetryClient->flush();
