<?php

namespace Rdpascua\Identicon;

use Illuminate\Support\HtmlString;
use Identicon\Identicon as IdenticonLib;

class Identicon
{
    /**
     * Holds the identicon instance
     *
     * @var \Identicon\Identicon
     */
    protected $identicon;

    /**
     * Instantiate the identicon class
     */
    public function __construct()
    {
        $this->identicon = new IdenticonLib;
    }

    /**
     * Get the image data
     *
     * @param   $string
     * @param   $size
     * @param   $color
     * @return string
     */
    public function getImageData($string, $size = 64, $color = null)
    {
        return $this->identicon->getImageData($string, $size, $color);
    }

    /**
     * Display the image
     *
     * @param   $string
     * @param   $size
     * @param   $color
     * @return string
     */
    public function displayImage($string, $size = 64, $color = null)
    {
        return $this->identicon->displayImage($string, $size, $color);
    }

    /**
     * Get the image data uri
     *
     * @param   $string
     * @param   $size
     * @param   $color
     * @return string
     */
    public function getImageDataUri($string, $size = 64, $color = null)
    {
        return $this->identicon->getImageDataUri($string, $size, $color);
    }

    /**
     * Returns a base64 image wrapped in `<img>` tag.
     *
     * @param  $stirng
     * @param  $size
     * @param  $color
     * @return string
     */
    public function image($string, $size = 64, $color = null)
    {
        return new HtmlString('<img src="'.$this->getImageDataUri($string, $size, $color).'" alt="'.$string.'" width="'.$size.'">');
    }
}