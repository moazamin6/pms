<?php

if(class_exists('ParagonIE_Sodium_Core_Curve25519_Ge_P2', false))
{
	return;
}

/**
 * Class ParagonIE_Sodium_Core_Curve25519_Ge_P2
 */
class ParagonIE_Sodium_Core_Curve25519_Ge_P2
{
	/**
	 * @var ParagonIE_Sodium_Core_Curve25519_Fe
	 */
	public $X;

	/**
	 * @var ParagonIE_Sodium_Core_Curve25519_Fe
	 */
	public $Y;

	/**
	 * @var ParagonIE_Sodium_Core_Curve25519_Fe
	 */
	public $Z;

	/**
	 * ParagonIE_Sodium_Core_Curve25519_Ge_P2 constructor.
	 *
	 * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $x
	 * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $y
	 * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $z
	 * @internal You should not use this directly from another application
	 *
	 */
	public function __construct(
		ParagonIE_Sodium_Core_Curve25519_Fe $x = NULL,
		ParagonIE_Sodium_Core_Curve25519_Fe $y = NULL,
		ParagonIE_Sodium_Core_Curve25519_Fe $z = NULL
	)
	{
		if($x === NULL)
		{
			$x = new ParagonIE_Sodium_Core_Curve25519_Fe();
		}
		$this->X = $x;
		if($y === NULL)
		{
			$y = new ParagonIE_Sodium_Core_Curve25519_Fe();
		}
		$this->Y = $y;
		if($z === NULL)
		{
			$z = new ParagonIE_Sodium_Core_Curve25519_Fe();
		}
		$this->Z = $z;
	}
}
