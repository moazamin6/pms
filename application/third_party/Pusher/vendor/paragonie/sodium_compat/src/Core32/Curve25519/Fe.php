<?php

if(class_exists('ParagonIE_Sodium_Core32_Curve25519_Fe', false))
{
	return;
}

/**
 * Class ParagonIE_Sodium_Core32_Curve25519_Fe
 *
 * This represents a Field Element
 */
class ParagonIE_Sodium_Core32_Curve25519_Fe implements ArrayAccess
{
	/**
	 * @var array<int, ParagonIE_Sodium_Core32_Int32>
	 */
	protected $container = [];

	/**
	 * @var int
	 */
	protected $size = 10;

	/**
	 * @param array<int, ParagonIE_Sodium_Core32_Int32> $array
	 * @param bool $save_indexes
	 * @return self
	 * @throws SodiumException
	 * @throws TypeError
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

		$obj = new ParagonIE_Sodium_Core32_Curve25519_Fe();
		if($save_indexes)
		{
			for($i = 0; $i < $count; ++$i)
			{
				$array[$i]->overflow = 0;
				$obj->offsetSet($keys[$i], $array[$i]);
			}
		}
		else
		{
			for($i = 0; $i < $count; ++$i)
			{
				$array[$i]->overflow = 0;
				$obj->offsetSet($i, $array[$i]);
			}
		}
		return $obj;
	}

	/**
	 * @param array<int, int> $array
	 * @param bool $save_indexes
	 * @return self
	 * @throws SodiumException
	 * @throws TypeError
	 * @internal You should not use this directly from another application
	 *
	 */
	public static function fromIntArray($array, $save_indexes = NULL)
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
		$set = [];
		/** @var int $i */
		/** @var int $v */
		foreach($array as $i => $v)
		{
			$set[$i] = ParagonIE_Sodium_Core32_Int32::fromInt($v);
		}

		$obj = new ParagonIE_Sodium_Core32_Curve25519_Fe();
		if($save_indexes)
		{
			for($i = 0; $i < $count; ++$i)
			{
				$set[$i]->overflow = 0;
				$obj->offsetSet($keys[$i], $set[$i]);
			}
		}
		else
		{
			for($i = 0; $i < $count; ++$i)
			{
				$set[$i]->overflow = 0;
				$obj->offsetSet($i, $set[$i]);
			}
		}
		return $obj;
	}

	/**
	 * @param mixed $offset
	 * @param mixed $value
	 * @return void
	 * @throws SodiumException
	 * @throws TypeError
	 * @internal You should not use this directly from another application
	 *
	 */
	public function offsetSet($offset, $value)
	{
		if(!($value instanceof ParagonIE_Sodium_Core32_Int32))
		{
			throw new InvalidArgumentException('Expected an instance of ParagonIE_Sodium_Core32_Int32');
		}
		if(is_null($offset))
		{
			$this->container[] = $value;
		}
		else
		{
			ParagonIE_Sodium_Core32_Util::declareScalarType($offset, 'int', 1);
			$this->container[(int)$offset] = $value;
		}
	}

	/**
	 * @param mixed $offset
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
	 * @param mixed $offset
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
	 * @param mixed $offset
	 * @return ParagonIE_Sodium_Core32_Int32
	 * @psalm-suppress MixedArrayOffset
	 * @internal You should not use this directly from another application
	 *
	 */
	public function offsetGet($offset)
	{
		if(!isset($this->container[$offset]))
		{
			$this->container[(int)$offset] = new ParagonIE_Sodium_Core32_Int32();
		}
		/** @var ParagonIE_Sodium_Core32_Int32 $get */
		$get = $this->container[$offset];
		return $get;
	}

	/**
	 * @return array
	 * @internal You should not use this directly from another application
	 *
	 */
	public function __debugInfo()
	{
		if(empty($this->container))
		{
			return [];
		}
		$c = [
			(int)($this->container[0]->toInt()),
			(int)($this->container[1]->toInt()),
			(int)($this->container[2]->toInt()),
			(int)($this->container[3]->toInt()),
			(int)($this->container[4]->toInt()),
			(int)($this->container[5]->toInt()),
			(int)($this->container[6]->toInt()),
			(int)($this->container[7]->toInt()),
			(int)($this->container[8]->toInt()),
			(int)($this->container[9]->toInt()),
		];
		return [implode(', ', $c)];
	}
}
