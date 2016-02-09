<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 09/02/16
 * Time: 16:37
 */

namespace Structural\Proxy\Image;


use Structural\Proxy\Image;

class Real implements Image
{
    private $filename;

    /**
     * Real constructor.
     * @param $filename
     */
    public function __construct($filename)
    {
        $this->filename = $filename;
    }


    public function display()
    {
        printf("Displaying real image: %s", $this->filename);
        return true;
    }
}