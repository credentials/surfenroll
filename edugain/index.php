<?php

define('PROVIDER',  'surfnet');
define('PROVIDER_NAME', 'eduGAIN');
define('SERVER_NAME', 'surfnet_enroll');
define('CREDENTIAL', 'pbdf.pbdf.surfnet-2');
define('IRMA_NAME_ATTRIBUTE', 'fullname');
define('VALIDITY', '+3 months');

$MAP_IRMA_SAML_ATTRIBUTES = [
    'institute'  => 'urn:mace:terena.org:attribute-def:schacHomeOrganization',
    'type'       => 'urn:mace:dir:attribute-def:eduPersonAffiliation',
    'id'         => 'urn:mace:dir:attribute-def:uid',
    'fullid'     => 'urn:mace:dir:attribute-def:eduPersonPrincipalName',
    'fullname'   => 'urn:mace:dir:attribute-def:displayName',
    'firstname'  => 'urn:mace:dir:attribute-def:givenName',
    'familyname' => 'urn:mace:dir:attribute-def:sn',
    'email'      => 'urn:mace:dir:attribute-def:mail',
];

require '../index.php';