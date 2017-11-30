# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\AdherentApi();
$id = 56; // int | 

try {
    $result = $api_instance->getAdherentByID($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdherentApi->getAdherentByID: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdherentApi* | [**getAdherentByID**](docs/Api/AdherentApi.md#getadherentbyid) | **GET** /adherents/{id} | Retourne l&#39;adhérent correspondant à l&#39;id
*AdherentApi* | [**getAdherents**](docs/Api/AdherentApi.md#getadherents) | **GET** /adherents | Retourne tous les adherents
*AdherentApi* | [**postAdherents**](docs/Api/AdherentApi.md#postadherents) | **POST** /adherents | Crée des adherents
*CategorieApi* | [**getCategorieByID**](docs/Api/CategorieApi.md#getcategoriebyid) | **GET** /categories/{id} | Retourne la catégorie correspondant à l&#39;id
*CategorieApi* | [**getCategories**](docs/Api/CategorieApi.md#getcategories) | **GET** /categories | Retourne toutes les categories
*CategorieApi* | [**postCategories**](docs/Api/CategorieApi.md#postcategories) | **POST** /categories | Crée des categories
*CinemaApi* | [**getCinemaByID**](docs/Api/CinemaApi.md#getcinemabyid) | **GET** /cinemas/{id} | Retourne le cinéma correspondant à l&#39;id
*CinemaApi* | [**getCinemas**](docs/Api/CinemaApi.md#getcinemas) | **GET** /cinemas | Retourne tous les cinémas
*CinemaApi* | [**postCinemas**](docs/Api/CinemaApi.md#postcinemas) | **POST** /cinemas | Crée des cinémas
*FilmApi* | [**getFilmByID**](docs/Api/FilmApi.md#getfilmbyid) | **GET** /films/{id} | Retourne le film correspondant à l&#39;id
*FilmApi* | [**getFilms**](docs/Api/FilmApi.md#getfilms) | **GET** /films | Retourne tous les films
*FilmApi* | [**postFilms**](docs/Api/FilmApi.md#postfilms) | **POST** /films | Crée des films
*SeanceApi* | [**getSeanceByID**](docs/Api/SeanceApi.md#getseancebyid) | **GET** /seances/{id} | Retourne la seance correspondant à l&#39;id
*SeanceApi* | [**getSeances**](docs/Api/SeanceApi.md#getseances) | **GET** /seances | Retourne toutes les seances
*SeanceApi* | [**postSeances**](docs/Api/SeanceApi.md#postseances) | **POST** /seances | Crée des seances


## Documentation For Models

 - [Adherent](docs/Model/Adherent.md)
 - [Categorie](docs/Model/Categorie.md)
 - [Cinema](docs/Model/Cinema.md)
 - [Film](docs/Model/Film.md)
 - [Seance](docs/Model/Seance.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication


## Author



