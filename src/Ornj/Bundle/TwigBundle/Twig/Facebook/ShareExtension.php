<?php

namespace Ornj\Bundle\TwigBundle\Twig\Facebook;

class ShareExtension extends \Twig_Extension
{
    private $appId;
    private $dialog = '//www.facebook.com/dialog/feed?';

    public function __construct($appId)
    {
        $this->appId = $appId;
    }

    public function getFilters()
    {
        return array(
            'facebook_share' => new \Twig_Filter_Method($this, 'buildUrl')
        );
    }

    /**
     * Creates a Facebook share Url
     * @url http://developers.facebook.com/docs/reference/dialogs/feed/
     * @param string $url
     * @param string $picture
     * @param string $name
     * @param string $caption
     * @param string $description
     * @param string $redirect
     * @return string
     */
    public function buildUrl($url, $picture = null, $name = null, $caption = null, $description = null, $redirect = null)
    {
        $params = array(
            'app_id'        => $this->appId,
            'link'          => $url,
            'picture'       => $picture,
            'name'          => $name,
            'caption'       => $caption,
            'description'   => $description,
            'redirect_url'  => $redirect,
        );

        return $this->dialog . http_build_query($params);
    }

    public function getName()
    {
        return 'facebook_share_extension';
    }
}