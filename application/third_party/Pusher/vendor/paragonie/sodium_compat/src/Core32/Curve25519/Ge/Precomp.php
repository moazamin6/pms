<?php

if(class_exists('ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp', false))
{
	return;
}

/**
 * Class ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp
 */
class ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp
{
	/**
	 * @var ParagonIE_Sodium_Core32_Curve25519_Fe
	 */
	public $yplusx;

	/**
	 * @var ParagonIE_Sodium_Core32_Curve25519_Fe
	 */
	public $yminusx;

	/**
	 * @var ParagonIE_Sodium_Core32_Curve25519_Fe
	 */
	public $xy2d;

	/**
	 * ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp constructor.
	 *
	 * @param ParagonIE_Sodium_Core32_Curve25519_Fe $yplusx
	 * @param ParagonIE_Sodium_Core32_Curve25519_Fe $yminusx
	 * @param ParagonIE_Sodium_Core32_Curve25519_Fe $xy2d
	 * @throws SodiumException
	 * @throws TypeError
	 * @internal You should not use this directly from another application
	 *
	 */
	public function __construct(
		ParagonIE_Sodium_Core32_Curve25519_Fe $yplusx = NULL,
		ParagonIE_Sodium_Core32_Curve25519_Fe $yminusx = NULL,
		ParagonIE_Sodium_Core32_Curve25519_Fe $xy2d = NULL
	)
	{
		if($yplusx === NULL)
		{
			$yplusx = ParagonIE_Sodium_Core32_Curve25519::fe_0();
		}
		$this->yplusx = $yplusx;
		if($yminusx === NULL)
		{
			$yminusx = ParagonIE_Sodium_Core32_Curve25519::fe_0();
		}
		$this->yminusx = $yminusx;
		if($xy2d === NULL)
		{
			$xy2d = ParagonIE_Sodium_Core32_Curve25519::fe_0();
		}
		$this->xy2d = $xy2d;
	}
}
