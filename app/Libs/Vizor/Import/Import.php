<?php

/**
 * Created by PhpStorm.
 * User: uk1
 * Date: 23.05.2018
 * Time: 14:51
 */
namespace App\Libs\Vizor\Import;

class Import implements ImportIntarface
{

    protected $import;

    public function setImport(ImportTypeIntarface $import)
    {
        $this->import = $import;
    }

    public function getArrayImport()
    {
        return $this->import->getArray();
    }

}