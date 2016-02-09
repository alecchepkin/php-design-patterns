<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 09/02/16
 * Time: 16:40
 */

namespace Structural\Proxy\Image;


use Structural\Proxy\Image;
use Structural\Proxy\Image\Real as RealImage;

class Proxy implements Image
{
    private $filename;
    private $image;

    /**
     * Proxy constructor.
     * @param $filename
     */
    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function display()
    {
        if(null == $this->image){
            $this->image = new RealImage($this->filename);
        }

        return $this->image->display();
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }


}