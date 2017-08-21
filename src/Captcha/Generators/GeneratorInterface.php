<?php

namespace Bone\Captcha\Captcha\Generators;

interface GeneratorInterface
{
	/**
	 * Rendering captcha.
     *
	 * @param string $str Letters for the captcha.
	 * @param array $params Parameters rendering.
	 * @return string PNG image.
	 */
	public function render(string $str, array $params);
}
