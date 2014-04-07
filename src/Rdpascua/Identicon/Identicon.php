<?php namespace Rdpascua\Identicon;

class Identicon {

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
        $this->identicon = new \Identicon\Identicon();
    }

    /**
     * Get the image data
     * @param   $string
     * @param   $size
     * @param   $color
     * @return
     */
    public function getImageData($string, $size = 64, $color = null)
    {
        return $this->identicon->getImageData($string, $size, $color);
    }

    /**
     * Display the image
     * @param   $string
     * @param   $size
     * @param   $color
     * @return
     */
    public function displayImage($string, $size = 64, $color = null)
    {
        return $this->identicon->displayImage($string, $size, $color);
    }

    /**
     * Get the image data uri
     * @param   $string
     * @param   $size
     * @param   $color
     * @return
     */
    public function getImageDataUri($string, $size = 64, $color = null)
    {
        return $this->identicon->getImageDataUri($string, $size, $color);
    }
}