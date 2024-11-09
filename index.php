<?php
require __DIR__ . 'vendor/autoload.php';

use ApplicationInsights\Telemetry_Client;
use ApplicationInsights\Channel\Telemetry_Channel;

$instrumentationKey = '740882b9-e9db-4603-9b71-a1aafa876fa9;IngestionEndpoint=https://westeurope-5.in.applicationinsights.azure.com/;LiveEndpoint=https://westeurope.livediagnostics.monitor.azure.com/;ApplicationId=683f7a36-618d-467c-8692-01bf52a7b3b6';
$telemetryClient = new Telemetry_Client();
$telemetryClient->getContext()->setInstrumentationKey($instrumentationKey);

// Track a simple event
$telemetryClient->trackEvent('My custom event');

// Send the data to Application Insights
$telemetryClient->flush();
