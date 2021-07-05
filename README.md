<h1 align="center">Mossengine/FiveCode-Parsers-Maths</h1>

<p align="center">
    <strong>A Parser for the FiveCode library that provides math based logical instructions.</strong>
</p>

<p align="center">
    <a href="https://github.com/Mossengine/FiveCode-Parsers-Maths"><img src="https://badgen.net/packagist/name/Mossengine/FiveCode-Parsers-Maths" alt="Source Code"></a>
    <a href="https://packagist.org/packages/Mossengine/FiveCode-Parsers-Maths"><img src="https://badgen.net/packagist/v/Mossengine/FiveCode-Parsers-Maths?label=version" alt="Download Package"></a>
    <a href="https://php.net"><img src="https://badgen.net/packagist/php/Mossengine/FiveCode-Parsers-Maths" alt="PHP Programming Language"></a>
    <img src="https://badgen.net/circleci/github/Mossengine/FiveCode-Parsers-Maths/master?icon=circleci" alt="Build Status">
    <a href="https://codecov.io/github/Mossengine/FiveCode-Parsers-Maths"><img src="https://badgen.net/codecov/c/github/Mossengine/FiveCode-Parsers-Maths/master?icon=codecov" alt="Codecov Code Coverage"></a>
    <a href="https://github.com/mossengine/FiveCode-Parsers-Maths/blob/master/LICENSE"><img src="https://badgen.net/packagist/license/Mossengine/FiveCode-Parsers-Maths" alt="Read License"></a>
    <a href="https://packagist.org/packages/Mossengine/FiveCode-Parsers-Maths/stats"><img src="https://badgen.net/packagist/dt/Mossengine/FiveCode-Parsers-Maths" alt="Package downloads on Packagist"></a>
</p>


## Installation

```
$ composer require mossengine/fivecode-parsers-maths ^1.0.0
```

```json
{
    "require": {
        "mossengine/fivecode-parsers-maths": "^1.0.0"
    }
}
```

## Usage

```php
// Require the autoloader, normal composer stuff
require 'vendor/autoload.php';

Mossengine\FiveCode\FiveCode::make([
    'parsers' => [
        'include' => [
            Mossengine\FiveCode\Parsers\Maths::class
        ]
    ],
])
    ->evaluate([
        ['maths.addition' => [
            1,
            2
        ]]
    ])
    ->return(0);
```

## Documentation
Read the <a href="https://github.com/Mossengine/FiveCode/blob/2.2.2/docs/index.md">docs</a> for more details on FiveCode language structure
