<?php

declare(strict_types=1);

namespace Flexsyscz\Environment;


final class TempStorage
{
	public static function getDirectory(string $path, string $name): string
	{
		return sprintf('%s/%s/%s', $path, Constants::TEMP_DIR_NAME, $name);
	}
}
