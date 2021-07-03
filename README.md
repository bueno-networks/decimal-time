# Convert decimal to time

Easy-to-use tool for converting decimal values to time

# Require

Below are the minimum settings for using the tool.

- PHP >= 7.4.

# How to install

To install the package in your project, just run the command below at the root of your project.

```bash
composer require bnw/decimal-to-time-converter
```

# How to use

Below is an example of how to use the tool.

```php
<?php 

require_once __DIR__.'/vendor/autoload.php';

use BNW\Converter\DecimalToTime;

$converter = new DecimalToTime();
$converter->convert(0.08); // 00:05
$converter->convert(0.17); // 00:10
$converter->convert(1.5); // 01:30
$converter->convert(246.70); // 246:42

```

# Run tests

Fork the project, and perform the clone.

To run the test battery, run the command below at the project root.

```bash
composer tests
```

# How to contribute

I would like to contribute with ideas or suggestions, open an issue and start the conversation with the development team.

# license

- [MIT](https://github.com/bueno-networks/decimal-time/blob/master/LICENSE)
