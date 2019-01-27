<?php

$config = array(
	array(
		'name' => 'apiKey',
		'label' => __('Mailgun API Key'),
		'description' => __('You can find your API Key [on Mailgun](https://mailgun.com/app/domains)'),
		'required' => true,
		'type' => 'Text',
		'columnWidth' => 50
	),
	array(
		'name' => 'region',
		'label' => __('Region'),
		'description' => __('The region for this API key.'),
		'required' => true,
		'type' => 'Radios',
		'columnWidth' => 50,
		'optionColumns' => 1,
		'options' => ["us" => 'US', "eu" => 'EU'],
		'value' => 'us'
	),
	array(
		'name' => 'domain',
		'label' => __('Domain Name'),
		'description' => __('The domain name for this API key.'),
		'required' => true,
		'type' => 'Text',
		'columnWidth' => 50
	),
	array(
		'name' => 'dynamicDomain',
		'label' => __('Use Dynamic Domains'),
		'description' => __('Use email sender/from domain, ignore config setting.'),
		'type' => 'Checkbox',
		'columnWidth' => 50
	),
	array(
		'name' => 'fromEmail',
		'label' => __('Default Sender Email Address'),
		'description' => __('The "from" email address. When left empty, defaults to *processwire@[domainName]*.'),
		'type' => 'Email',
		'columnWidth' => 50
	),
	array(
		'name' => 'fromName',
		'label' => __('Default Sender Name'),
		'description' => __('The "from" email name. When left empty, defaults to *ProcessWire*.'),
		'type' => 'Text',
		'columnWidth' => 50
	),
	array(
		'name' => 'trackOpens',
		'label' => __('Track Message Opens'),
		'type' => 'Checkbox',
		'value' => 1,
		'columnWidth' => 50
	),
	array(
		'name' => 'trackClicks',
		'label' => __('Track Message Clicks'),
		'type' => 'Checkbox',
		'value' => 1,
		'columnWidth' => 50
	),
	array(
		'name' => 'testMode',
		'label' => __('Enable Test Mode'),
		'description' => __('When this option is enabled, Mailgun will accept messages but won\'t send them. [Click here for more information](https://documentation.mailgun.com/user_manual.html#sending-in-test-mode).'),
		'type' => 'Checkbox',
		'value' => 1
	),
	array(
		'name' => 'disableSslCheck',
		'label' => __('Disable cURL SSL Check'),
		'description' => __("If you see the following error in ProcessWire Mailgun logs: *cURL Error: SSL certificate problem: unable to get local issuer certificate*.\nThis option will work around this issue. It might help on some development configurations, but it is recommended that you leave this option unchecked on production servers."),
		'type' => 'Checkbox'
	),
	array(
		'name' => 'publicApiKey',
		'label' => __('Mailgun Public API Key'),
		'description' => __("You can find your Public API Key [on Mailgun](https://mailgun.com/app/dashboard)\nNote that the Public API Key is only required if you use the `validateEmail()` feature."),
		'required' => false,
		'type' => 'Text'
	),
);
