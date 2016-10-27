# Laravel IFTTT Maker event emitter

Emit IFTTT events easily.

## Install

Via Composer :

``` bash
$ composer require maxeee09/laravel-ifttt-maker
```

then add the following line into `config/app.php` provider array :
 
``` php
'providers' => [
		...
		Maxeee09\IFTTT\Maker\Providers\IFTTTMakerServiceProvider::class,
		...
],
```

## Configuration

Publish package configuration :

``` bash
$ php artisan vendor:publish --provider="Maxeee09\IFTTT\Maker\Providers\IFTTTMakerServiceProvider" --tag="config"
```

Add the following line into your `.env` file :

```
...
IFTTT_MAKER_KEY=[YOUR_IFTTT_MAKER_KEY]
...
```

## Usage

Using façade :

``` php
IFTTTMaker::event( 'your_event_name' , [
	'your' => 'data' ,
	'event' => 'data' ,
	'payload' => 'data' ,
] ) ;
```

Using helper :

``` php
ifttt_maker( 'your_event_name' , [
	'your' => 'data' ,
	'event' => 'data' ,
	'payload' => 'data' ,
] ) ;
```

Enjoy your IFTTT recipes !

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Author

- [Maxence BOURQUIN][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/Maxeee09
