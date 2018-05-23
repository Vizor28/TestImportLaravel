<?php
/**
 * Created by PhpStorm.
 * User: uk1
 * Date: 23.05.2018
 * Time: 15:04
 */

namespace App\Libs\Vizor\Import;

class ImportXml implements ImportTypeIntarface
{
    protected $path = 'http://autoload.avito.ru/format/Models.xml';

    public function getArray()
    {
        $file = file_get_contents($this->path);

        $p = xml_parser_create();
        xml_parse_into_struct($p, $file, $vals, $index);
        xml_parser_free($p);

        $result = array();

        foreach ($index['MODEL'] as $key){

            $result[] = $vals[$key]['attributes'];

        }

        return $result;
    }


}