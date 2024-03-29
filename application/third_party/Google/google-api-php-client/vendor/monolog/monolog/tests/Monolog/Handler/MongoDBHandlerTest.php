<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

use Monolog\TestCase;
use Monolog\Logger;

class MongoDBHandlerTest extends TestCase
{
	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testConstructorShouldThrowExceptionForInvalidMongo()
	{
		new MongoDBHandler(new \stdClass(), 'DB', 'Collection');
	}

	public function testHandle()
	{
		$mongo = $this->getMock('Mongo', ['selectCollection'], [], '', false);
		$collection = $this->getMock('stdClass', ['save']);

		$mongo->expects($this->once())
			->method('selectCollection')
			->with('DB', 'Collection')
			->will($this->returnValue($collection));

		$record = $this->getRecord(Logger::WARNING, 'test', ['data' => new \stdClass, 'foo' => 34]);

		$expected = [
			'message'    => 'test',
			'context'    => ['data' => '[object] (stdClass: {})', 'foo' => 34],
			'level'      => Logger::WARNING,
			'level_name' => 'WARNING',
			'channel'    => 'test',
			'datetime'   => $record['datetime']->format('Y-m-d H:i:s'),
			'extra'      => [],
		];

		$collection->expects($this->once())
			->method('save')
			->with($expected);

		$handler = new MongoDBHandler($mongo, 'DB', 'Collection');
		$handler->handle($record);
	}
}

if(!class_exists('Mongo'))
{
	class Mongo
	{
		public function selectCollection()
		{
		}
	}
}
