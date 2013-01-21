<?php

/**
 * The loader dumper is an object to dump dynamically loaded class in a single
 * file, which improve performances.
 */
class Yampee_Loader_Dumper
{
	/**
	 * Dump the loaded file in a single file
	 *
	 * @param array $loadedClasses
	 * @return string
	 */
	public function dump(array $loadedClasses)
	{
		$content = '<?php';

		foreach ($loadedClasses as $file) {
			$content .= str_replace('<?php', '', php_strip_whitespace($file));
		}

		return $content;
	}
}