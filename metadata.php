<?php

$sMetadataVersion = '2.0';

$aModule = array(
    'id'               => 'rs-mailreceiver',
    'title'            => '*RS Mail receiver',
    'description'      => 'Extend the mail receiver by your own address',
    'thumbnail'        => '',
    'version'          => '1.1.0',
    'author'           => '',
    'url'              => '',
    'email'            => '',
    'extend'           => array(
        \OxidEsales\Eshop\Core\Email::class => rs\mailreceiver\Core\Email::class,
    ),
    'settings' => array(
        array(
            'group' => 'cpmail_settings',
            'name' => 'cpmail_replace_recipient',
            'type' => 'str',
            'value' => ''
        ),
        array(
            'group' => 'cpmail_settings',
            'name' => 'cpmail_replace_bcc',
            'type' => 'str',
            'value' => ''
        ),
        array(
            'group' => 'cpmail_settings',
            'name' => 'cpmail_replace_profihost_fix',
            'type' => 'bool',
            'value' => false
        ),
    )
);
