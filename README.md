![Header image](docs/header-image.png)

# PHP array to table

Converts a PHP array of objects/arrays to a summary table. Useful for debugging and examining data.

```php
echo array_to_table($array);
```



## Requirements

Package requires PHP 8.0 or higher.



## Installation

The best way to install package is using [Composer](http://getcomposer.org/):

```sh
$ composer require licvido/array-to-table
```

Or simply copy the `array_to_table()` function from `src/array_to_table.php` into your project.



## Usage

Pass an array of objects, arrays, or values to the `array_to_table()` function and print result.

```php
// array of values
$array = ['lorem', 'ipsum', 3, 4, 5, 'dolor', 7];

// or array of arrays without keys
$array = [
	[1, 2],
	[1, 2, 3],
	[1, 4, 3],
	[5, 6],
];

// or array of arrays with keys and values
$array = [
	['A' => 1, 'B' => 2],
	['A' => 3, 'B' => 4],
	['A' => 5, 'B' => 6, 'C' => 7, 'D' => 8],
	['E' => 9, 'F' => 0],
];

// or array of objects
$array = [
	(object) ['A' => 1, 'B' => 2],
	(object) ['A' => 3, 'B' => 4],
	(object) ['A' => 5, 'B' => 6, 'C' => 7, 'D' => 8],
	(object) ['E' => 9, 'F' => 0],
];

// or array of mixed arrays and objects
$array = [
	['A' => 1, 'B' => 2],
	(object) ['A' => 3, 'B' => 4],
	['A' => 5, 'B' => 6, 'C' => 7, 'D' => 8],
	(object) ['E' => 9, 'F' => 0],
];

// or array of objects from json
$dummyData = json_decode(file_get_contents('https://dummyjson.com/users'));
$array = $dummyData->users;



// print table
echo array_to_table($array);
```



## Testing

```sh
composer test
```



## License

This library is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.
