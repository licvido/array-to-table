<?php
declare(strict_types=1);

/**
 * @param mixed[] $objects
 * @return string
 */
function array_to_table(array $objects): string
{
	$table = '<table border="1" style="max-width:100%; white-space:nowrap;">';
	$columns = [];

	foreach ($objects as $object) {
		if (is_object($object) || is_array($object)) {
			$object = (array) $object;
		} else {
			$object = [$object];
		}

		foreach ($object as $key => $value) {
			if (!in_array($key, $columns, true)) {
				$columns[] = $key;
			}
		}
	}

	$table .= '<tr>';
	foreach ($columns as $column) {
		if (count($columns) === 1 && $column === 0) {
			$column = 'Values';
		}

		$table .= "<th>{$column}</th>";
	}
	$table .= '</tr>';

	foreach ($objects as $object) {
		if (is_object($object) || is_array($object)) {
			$object = (array) $object;
		} else {
			$object = [$object];
		}

		$table .= '<tr>';
		foreach ($columns as $column) {
			$value = $object[$column] ?? null;

			if (!is_scalar($value) && !is_null($value)) {
				$value = '<em>' . gettype($value) . '</em>';
			}

			$table .= "<td>{$value}</td>";
		}
		$table .= '</tr>';
	}

	$table .= '</table>';

	return $table;
}
