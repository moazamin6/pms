<?php

if(class_exists('ParagonIE_Sodium_Core_Curve25519_Fe', false))
{
	return;
}

/**
 * Class ParagonIE_Sodium_Core_Curve25519_Fe
 *
 * This represents a Field Element
 */
class ParagonIE_Sodium_Core_Curve25519_Fe implements ArrayAccess
{
	/**
	 * @var array<int, int>
	 */
	protected $container = [];

	/**
	 * @var int
	 */
	protected $size = 10;

	/**
	 * @param array<int, int> $array
	 * @param bool $save_indexes
	 * @return self
	 * @internal You should not use this directly from another application
	 *
	 */
	public static function fromArray($array, $save_indexes = NULL)
	{
		$count = count($array);
		if($save_indexes)
		{
			$keys = array_keys($array);
		}
		else
		{
			$keys = range(0, $count - 1);
		}
		$array = array_values($array);
		/** @var array<int, int> $keys */

		$obj = new ParagonIE_Sodium_Core_Curve25519_Fe();
		if($save_indexes)
		{
			for($i = 0; $i < $count; ++$i)
			{
				$obj->offsetSet($keys[$i], $array[$i]);
			}
		}
		else
		{
			for($i = 0; $i < $count; ++$i)
			{
				$obj->offsetSet($i, $array[$i]);
			}
		}
		return $obj;
	}

	/**
	 * @param int|null $offset
	 * @param int $value
	 * @return void
	 * @psalm-suppress MixedArrayOffset
	 * @internal You should not use this directly from another application
	 *
	 */
	public function offsetSet($offset, $value)
	{
		if(!is_int($value))
		{
			throw new InvalidArgumentException('Expected an integer');
		}
		if(is_null($offset))
		{
			$this->container[] = $value;
		}
		else
		{
			$this->container[$offset] = $value;
		}
	}

	/**
	 * @param int $offset
	 * @return bool
	 * @psalm-suppress MixedArrayOffset
	 * @internal You should not use this directly from another application
	 *
	 */
	public function offsetExists($offset)
	{
		return isset($this->container[$offset]);
	}

	/**
	 * @param int $offset
	 * @return void
	 * @psalm-suppress MixedArrayOffset
	 * @internal You should not use this directly from another application
	 *
	 */
	public function offsetUnset($offset)
	{
		unset($this->container[$offset]);
	}

	/**
	 * @param int $offset
	 * @return int
	 * @psalm-suppress MixedArrayOffset
	 * @internal You should not use this directly from another application
	 *
	 */
	public function offsetGet($offset)
	{
		if(!isset($this->container[$offset]))
		{
			$this->container[$offset] = 0;
		}
		return (int)($this->container[$offset]);
	}

	/**
	 * @return array
	 * @internal You should not use this directly from another application
	 *
	 */
	public function __debugInfo()
	{
		return [implode(', ', $this->container)];
	}
}
