<?php

use CodeIgniter\Events\Events;
use Tatter\Patches\Patches;

class SourceTest extends \Tests\Support\VirtualTestCase
{
	public function testEventsTrigger()
	{
		$GLOBALS['testSourceDidPrepatch'] = false;

		$patches = new Patches($this->config);

		$result  = Events::trigger('prepatch', $this->project, []);

		$this->assertTrue($result);
		$this->assertTrue($GLOBALS['testSourceDidPrepatch']);
	}
}
