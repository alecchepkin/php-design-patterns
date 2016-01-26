<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 26/01/16
 * Time: 15:06
 */

namespace Behavioral\ChainOfResponsobility;


class ChainOfResponsobilityTest extends \PHPUnit_Framework_TestCase{

    public function testLogger()
    {
        $loger1 = new Logger\Email(LoggerHelper::PRIORITY_ERROR);
        $loger2 = new Logger\File(LoggerHelper::PRIORITY_NOTICE, $loger1);
        $loger = new Logger\Profiling(LoggerHelper::PRIORITY_DEBUG, $loger2);

        $loger->message('Start profiling module1', LoggerHelper::PRIORITY_DEBUG);
        $loger->message('Access denied for User1', LoggerHelper::PRIORITY_NOTICE);
        $loger->message('Roll back the transaction', LoggerHelper::PRIORITY_ERROR);

        exit;

    }

}