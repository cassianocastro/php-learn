<?php
declare(strict_types=1);

namespace Tests;

use Stringable;
use Twig\{ Loader\FilesystemLoader, Environment };

/**
 *
 */
final class TwigTest implements Stringable
{

	private const TEMPLATES = "./public/pages/";

	public function __toString(): string
	{
        $loader = new FilesystemLoader(self::TEMPLATES);

        $loader->addPath(self::TEMPLATES . ".includes/", "inc");
        $loader->addPath(self::TEMPLATES . "aulas_JS/.includes/", "aulas_JS");

		$engine = new Environment(
			$loader,
			[
				"auto_reload"      => true,
				"autoescape"       => "html",
				"cache"            => false,
				"charset"          => "utf-8",
				"strict_variables" => true,
			]
		);

		return $engine->render("aulas_JS/index.twig", [ "name" => "Cassiano" ]);
	}
}