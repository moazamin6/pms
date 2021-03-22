<?php

if(class_exists('ParagonIE_Sodium_Core_Curve25519_Ge_Precomp', false))
{
	return;
}

/**
 * Class ParagonIE_Sodium_Core_Curve25519_Ge_Precomp
 */
class ParagonIE_Sodium_Core_Curve25519_Ge_Precomp
{
	/**
	 * @var ParagonIE_Sodium_Core_Curve25519_Fe
	 */
	public $yplusx;

	/**
	 * @var ParagonIE_Sodium_Core_Curve25519_Fe
	 */
	public $yminusx;

	/**
	 * @var ParagonIE_Sodium_Core_Curve25519_Fe
	 */
	public $xy2d;

	/**
	 * ParagonIE_Sodium_Core_Curve25519_Ge_Precomp constructor.
	 *
	 * @param ParagonIE_Sodium_Core_Curve25519_Fe $yplusx
	 * @param ParagonIE_Sodium_Core_Curve25519_Fe $yminusx
	 * @param ParagonIE_Sodium_Core_Curve25519_Fe $xy2d
	 * @internal You should not use this directly from another application
	 *
	 */
	public function __construct(
		ParagonIE_Sodium_Core_Curve25519_Fe $yplusx = NULL,
		ParagonIE_Sodium_Core_Curve25519_Fe $yminusx = NULL,
		ParagonIE_Sodium_Core_Curve25519_Fe $xy2d = NULL
	)
	{
		if($yplusx === NULL)
		{
			$yplusx = new ParagonIE_Sodium_Core_Curve25519_Fe();
		}
		$this->yplusx = $yplusx;
		if($yminusx === NULL)
		{
			$yminusx = new ParagonIE_Sodium_Core_Curve25519_Fe();
		}
		$this->yminusx = $yminusx;
		if($xy2d === NULL)
		{
			$xy2d = new ParagonIE_Sodium_Core_Curve25519_Fe();
		}
		$this->xy2d = $xy2d;
	}
}
