<?php
namespace App\general;
trait general
{
    public $data=[];
    public function data($key,$value='')
    {
        return $this->data[$key]=$value;
    }
    public function maketitle($first,$second='')
    {
        if(empty($second))
        {
            $second='welcome';
        }
        $seperator=": :";
        return $first.$seperator.$second;
    }

}
?>
