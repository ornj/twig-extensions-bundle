<?php

namespace Ornj\Bundle\TwigExtensionsBundle\Twig\Url;

class IsExternalExtension extends \Twig_Extension
{

    public function getFilters()
    {
        return array(
            'is_external' => new \Twig_Filter_Method($this, 'checkUrl')
        );
    }

    /**
     * Checks if supplied host is the host specified in url
     *
     * @param string $url
     * @param string $host
     * @return boolean
     */
    public function checkUrl($url, $host)
    {
        return (strpos($url, $host) !== false) ? false : true;
    }

    public function getName()
    {
        return 'url_is_external_extension';
    }
}