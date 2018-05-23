<?php
/**
 * Created by PhpStorm.
 * User: uk1
 * Date: 23.05.2018
 * Time: 14:53
 */

namespace App\Libs\Vizor\Import;

interface ImportIntarface
{
    public function getArrayImport();
    public function setImport(ImportTypeIntarface $import);
}