<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 10:45
 */

namespace Behavioral\TemplateMethod;

use Behavioral\TemplateMethod\Game\Basketball as BasketballGame;
use Behavioral\TemplateMethod\Game\Football as FootballGame;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testTemplateMethod()
    {
        $game = new FootballGame;
        $result = $game->play();
        $this->assertTrue($result);


        $game = new BasketballGame;
        $game->play();
        $this->assertTrue($result);
    }
}
