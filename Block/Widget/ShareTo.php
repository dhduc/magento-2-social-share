<?php

namespace Unet\SocialShare\Block\Widget;

/**
 * Class Share
 * @package Unet\SocialShare\Block\Widget
 */
class ShareTo extends \Unet\SocialShare\Block\AbstractShare
{
    /**
     * @var string
     */
    private $template = "Unet_SocialShare::shareto.phtml";

    /**
     * setTemplate
     * __construct
     */
    protected function __construct()
    {
        parent::__construct();
        $this->setTemplate($this->template);
    }
}
