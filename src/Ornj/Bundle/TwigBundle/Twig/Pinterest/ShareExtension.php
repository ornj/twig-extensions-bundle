<?php

namespace Ornj\Bundle\TwigBundle\Twig\Pinterest;

class ShareExtension extends \Twig_Extension
{
    private $dialog = '//pinterest.com/pin/create/button?';

    public function getFilters()
    {
        return array(
            'pinterest_share' => new \Twig_Filter_Method($this, 'buildUrl')
        );
    }

    /**
     * Creates a Pinterest pin Url
     *
     * @param string $url
     * @return string
     */
    public function buildUrl($url, $media = null, $description = null)
    {
        $params = array(
            'url'           => $url,
            'media'         => $media,
            'description'   => $description,
        );

        return $this->dialog . http_build_query($params);
    }

    public function getName()
    {
        return 'pinterest_share_extension';
    }
}