# laravel-model-route

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

```bash
$ composer require kanekescom/laravel-model-route
```

## Usage

```php
namespace App\Models;

use Kanekescom\LaravelUrlPresenter\HasModelRoute;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasModelRoute;

    /**
     * The attributes to parameter route.
     *
     * @return string
     */
    public $param = 'myparam';

    /**
     * Create model_route attribute.
     *
     * @return void
     */
    public function getModelRouteAttribute()
    {
        return $this->modelRouteLoader();
    }

    /**
     * The additional method.
     */
    public function routeParam()
    {
        return request()->route()->parameter($this->param);
    }

    /**
     * The additional method.
     */
    public function modelRouteLoader()
    {
        return optional($this::find($this->routeParam()));
    }
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

```bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email kanekescom@gmail.com instead of using the issue tracker.

## Credits

-   [Kanekes.com][link-author]
-   [All Contributors][link-contributors]

## License

MIT. Please see the [license file](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/kanekescom/laravel-model-route.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/kanekescom/laravel-model-route.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/kanekescom/laravel-model-route/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield
[link-packagist]: https://packagist.org/packages/kanekescom/laravel-model-route
[link-downloads]: https://packagist.org/packages/kanekescom/laravel-model-route
[link-travis]: https://travis-ci.org/kanekescom/laravel-model-route
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/kanekescom
[link-contributors]: ../../contributors
