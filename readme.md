# Identicon Wrapper for Laravel 4

Add this to your `composer.json` and update your composer.

Add to your service provider in `app/config/app.php`

    'Rdpascua\Identicon\IdenticonServiceProvider',

And add this to your facades

    'Identicon'  => 'Rdpascua\Identicon\Facade',

### Usage

    //Displays and generates an image
    Identicon::displayImage('foo');

    //get the image data
    Identicon::getImageData('bar');

    //base64 image
    Identicon::getImageDataUri('baz');

    //You can also adjust the size of the identicon and color
    Identicon::displayImage('foo', 256, 'B4D455');

### Credits
* https://github.com/yzalis/Identicon

### License

This wrapper is licensed under the [MIT license](http://opensource.org/licenses/MIT)
