<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 09/02/16
 * Time: 15:03
 */

namespace Structural\Facade;


class ComputerFacade
{
    private $processor;
    private $memory;
    private $hd;

    const BOOT_ADDRESS = '';
    const BOOT_SECTOR = '';
    const SECTOR_SIZE = '';

    /**
     * ComputerFacade constructor.
     */
    public function __construct()
    {
        $this->hd = new HardDrive();
        $this->processor = new Processor();
        $this->memory = new Memory();
    }

    public function start()
    {
        $this->processor->freeze();
        $data = $this->hd->read($lba = self::BOOT_SECTOR, $size = self::SECTOR_SIZE);
        $this->memory->load(
            $position = self::BOOT_ADDRESS,
            $data
        );
        $this->processor->jumpTo($position = self::BOOT_ADDRESS);
        $this->processor->execute();
        return $this;
    }
}