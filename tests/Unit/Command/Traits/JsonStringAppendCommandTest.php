<?php
/**
 * This file is part of PhpRedisJSON library
 *
 * @project   phpredis-json
 * @author    Rafael Campoy <rafa.campoy@gmail.com>
 * @copyright 2019 Rafael Campoy <rafa.campoy@gmail.com>
 * @license   MIT
 * @link      https://github.com/averias/phpredis-json
 *
 * Copyright and license information, is included in
 * the LICENSE file that is distributed with this source code.
 */

namespace Averias\RedisJson\Tests\Unit\Command\Traits;

use Averias\RedisJson\Enum\JsonCommands;
use Averias\RedisJson\Tests\Enum\Keys;
use Averias\RedisJson\Tests\Unit\Command\BaseTestJsonCommandTrait;

class JsonStringAppendCommandTest extends BaseTestJsonCommandTrait
{
    public function testJsonStringAppend(): void
    {
        $mock = $this->getRedisJsonClient(
            8,
            [JsonCommands::APPEND_STRING, [Keys::DEFAULT_KEY], [Keys::DEFAULT_KEY, '.', json_encode(' days')]]
        );
        $result = $mock->jsonStringAppend(Keys::DEFAULT_KEY, ' days', '.');
        $this->assertEquals(8, $result);
    }
}
