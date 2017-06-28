<?php

namespace Rdpascua\Tests\Identicon;

use Rdpascua\Identicon\Identicon;

class IdenticonTest extends \PHPUnit_Framework_TestCase
{
    protected $identicon;

    public function setUp()
    {
        $this->identicon = new Identicon;
    }

    /**
     * @dataProvider resultDataProvider
     */
    public function testDataUri($string, $data)
    {
        $this->assertEquals($data, $this->identicon->getImageDataUri($string));
    }

    /**
     * @dataProvider resultDataProvider
     */
    public function testValidImage($string, $data)
    {
        $this->assertEquals(sprintf('<img src="%s" alt="%s" width="64">', $data, $string), $this->identicon->image($string));
    }

    public function resultDataProvider()
    {
        return [
            ['foo', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEEAAABBCAIAAAABlV4SAAAABnRSTlMAAAAAAABupgeRAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAl0lEQVRoge3ZwQmAMBAFUSMWZAmWYmkpxRIsyRKM8tFhmXcOkSE5LLGd/Zii1n27XZP96Bzc6y82MNjAYAODDQw2MFRoaPGZ73vL+NLsQBrcrcJdsoHBBgYbGGxgsIGhwsxX4RxsYLCBwQYGGxhsYLCB4cE73yD/T79hA4MNDDYw2MBgA4PvfAw2MNjAYAODDQw2MFRouAD+nRVDhaHJ/QAAAABJRU5ErkJggg=='],
            ['a', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEEAAABBCAIAAAABlV4SAAAABnRSTlMAAAAAAABupgeRAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAkUlEQVRoge3YwQ3CMBAAQYIoJKWlBEqhBEqjFEqIH4aMrJ33yfLKH+u225hjfw5OzvX+vE5n7n+4x6/VYKjBUIOhBkMNhhUatqs+cxOt8A41GGow1GCowVCDoQbDY/qJI9vFuZ/lFd6hBkMNhhoMNRhqMLTnM9RgqMFQg6EGQw2GGgzt+Qw1GGow1GCowVCD4QttRwtk510gnAAAAABJRU5ErkJggg=='],
            ['b', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEEAAABBCAIAAAABlV4SAAAABnRSTlMAAAAAAABupgeRAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAAjklEQVRoge3ZwQ0CIRRAQTEWZCmWtCVtKZZkCxzMOv68ORPCCxwIrOP1vP25+68X8AU1GGow1GCowVCDoQZDDYYaDDUYajDUYKjBMKFhbY7bf9I8zvfFs03YhxoMNRhqMNRgqMGwBvztPvaHXn+Z25xtwlmqwVCDoQZDDYYaDDUYajDUYKjBUIOhBsOEhg8t8Q6CO1+DjgAAAABJRU5ErkJggg=='],
        ];
    }
}