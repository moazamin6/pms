<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc51a85a48c6981964f1ab5c20c9205f4
{
	public static $prefixLengthsPsr4 = [
		'E' =>
			[
				'EmailReplyParser\\' => 17,
			],
	];

	public static $prefixDirsPsr4 = [
		'EmailReplyParser\\' =>
			[
				0 => __DIR__ . '/..' . '/willdurand/email-reply-parser/src/EmailReplyParser',
			],
	];

	public static function getInitializer(ClassLoader $loader)
	{
		return \Closure::bind(function() use ($loader)
		{
			$loader->prefixLengthsPsr4 = ComposerStaticInitc51a85a48c6981964f1ab5c20c9205f4::$prefixLengthsPsr4;
			$loader->prefixDirsPsr4 = ComposerStaticInitc51a85a48c6981964f1ab5c20c9205f4::$prefixDirsPsr4;

		}, NULL, ClassLoader::class);
	}
}
