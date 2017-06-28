# Identicon Wrapper for Laravel

Generate awesome avatar placeholders using **identicon**.

### Installation

    composer require rdpascua/laravel-identicon

Add this to your service provider

    Rdpascua\Identicon\IdenticonServiceProvider::class,

And add this to your facades

    'aliases' => [
        'Identicon' => Rdpascua\Identicon\Facades\Identicon::class,
    ]

# Usage

### Identicon::getImageDataUri($string, $size = 64, $color = null)

Returns a base64 image.

```html
<!-- Base64 URI image -->
<img src="{{ Identicon::getImageDataUri('baz') }}">

<!-- Explicitly specify the size and color -->
<img src="{{ Identicon::getImageDataUri('foo', 256, 'B4D455') }}">
```

### Identicon::image($string, $size = 64, $color = null)

Returns a base64 image wrapped in `<img>` tag.

```html
<!-- Show image -->
{{ Identicon::image('baz') }}
```

### Identicon::getImageData($string, $size = 64, $color = null)
### Identicon::displayImage($string, $size = 64, $color = null)

### Credits

* https://github.com/yzalis/Identicon

### License

This wrapper is licensed under the [MIT license](http://opensource.org/licenses/MIT)
