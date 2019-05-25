<?php
namespace Craft;

class GdugPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Get Default User Group');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Oli';
    }

    function getDeveloperUrl()
    {
        return 'https://github.com/olivierbon';
    }
}