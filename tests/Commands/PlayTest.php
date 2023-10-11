<?php
// See : https://symfony.com/doc/current/console.html#testing-commands
namespace Kajoom\GitlabApi\Tests\Commands;

use Kajoom\GitlabApi\Commands\Play;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

class PlayTest extends TestCase
{
    public function testItDoesNotCrash()
    {
        $command = new Play();

        $tester = new CommandTester($command);
        $tester->setInputs([10, 'yes', '', 'yes', 10, 'no']);
        $tester->execute([]);

        $tester->assertCommandIsSuccessful();
    }
}
