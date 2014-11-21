<?php
namespace Composer\Installers;

class HorisenInstaller extends BaseInstaller
{
    protected $locations = array(
        'cms_lib' => 'library/{$name}/',
        'cms_mod' => 'application/modules/{$name}/',
        'cms_pub' => 'public/plugins/{$name}/',
	'cms_pub_mod' => 'public/modules/{$name}/'
    );
}
