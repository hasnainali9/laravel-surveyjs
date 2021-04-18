# LaravelSurveyJs

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

Laravel Survey Manager system based on surveyjs library. Take a look at [contributing.md](contributing.md) to see a to do list.
<br>
<img src="https://i.imgur.com/o9RAHmp.gif" />
<br>
## Installation

1) In your terminal:

``` bash
$ composer require aidynmakhataev/laravelsurveyjs
```

2) Publish the config file  

```bash
php artisan vendor:publish --provider="Hasnainali9\LaravelSurveyJs\LaravelSurveyJsServiceProvider"
```

3) run the migrations

```bash
php artisan migrate
```


4) Create a new survey on your-project-domain/admin/survey

5) [optional] Change values in config/survey-manager.php (route prefix, middleware, builder theme etc.)

## Usage
TODO
## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.
``

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email hasnain01022000@gmail.com instead of using the issue tracker.

## Credits

- [Hasnain Ali][link-author]
- [Aidyn Makhataev][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/hasnainali9/laravelsurveyjs.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/hasnainali9/laravelsurveyjs.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/hasnainali9/laravelsurveyjs/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/hasnainali9/laravelsurveyjs
[link-downloads]: https://packagist.org/packages/hasnainali9/laravelsurveyjs
[link-travis]: https://travis-ci.org/aidynmakhataev/laravelsurveyjs
[link-styleci]: https://styleci.io/repos/134269033
[link-author]: https://github.com/hasnainali9
[link-contributors]: ./graphs/contributors]
