<?php

namespace Ornj\Bundle\TwigExtensionsBundle\Twig\Twitter;

class ShareExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'twitter_share' => new \Twig_Filter_Method($this, 'buildUrl')
        );
    }

    /**
     * Creates a Twitter share Url
     *
     * @param string $url
     * @param string $message
     * @return string
     */
    public function buildUrl($url, $message = null)
    {
        return '//twitter.com/share?text=' . urlencode($message) . '&url=' . $url;
    }

    public function getName()
    {
        return 'twitter_share_extension';
    }
}