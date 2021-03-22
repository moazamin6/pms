<?php


if(class_exists('ParagonIE_Sodium_Core_Curve25519_Ge_Cached', false))
{
	return;
}

/**
 * Class ParagonIE_Sodium_Core_Curve25519_Ge_Cached
 */
class ParagonIE_Sodium_Core_Curve25519_Ge_Cached
{
	/**
	 * @var ParagonIE_Sodium_Core_Curve25519_Fe
	 */
	public $YplusX;

	/**
	 * @var ParagonIE_Sodium_Core_Curve25519_Fe
	 */
	public $YminusX;

	/**
	 * @var ParagonIE_Sodium_Core_Curve25519_Fe
	 */
	public $Z;

	/**
	 * @var ParagonIE_Sodium_Core_Curve25519_Fe
	 */
	public $T2d;

	/**
	 * ParagonIE_Sodium_Core_Curve25519_Ge_Cached constructor.
	 *
	 * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $YplusX
	 * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $YminusX
	 * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $Z
	 * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $T2d
	 * @internal You should not use this directly from another application
	 *
	 */
	public function __construct(
		ParagonIE_Sodium_Core_Curve25519_Fe $YplusX = NULL,
		ParagonIE_Sodium_Core_Curve25519_Fe $YminusX = NULL,
		ParagonIE_Sodium_Core_Curve25519_Fe $Z = NULL,
		ParagonIE_Sodium_Core_Curve25519_Fe $T2d = NULL
	)
	{
		if($YplusX === NULL)
		{
			$YplusX = new ParagonIE_Sodium_Core_Curve25519_Fe();
		}
		$this->YplusX = $YplusX;
		if($YminusX === NULL)
		{
			$YminusX = new ParagonIE_Sodium_Core_Curve25519_Fe();
		}
		$this->YminusX = $YminusX;
		if($Z === NULL)
		{
			$Z = new ParagonIE_Sodium_Core_Curve25519_Fe();
		}
		$this->Z = $Z;
		if($T2d === NULL)
		{
			$T2d = new ParagonIE_Sodium_Core_Curve25519_Fe();
		}
		$this->T2d = $T2d;
	}
}
