<?php

class MinMaxSum
{
    private $array = [];
    public $min;
    public $max;
    public $sum;

    public function getArray()
    {
        return $this->array;
    }

    public function setArray(array $var)
    {
        $this->array = $var;
    }

    public function run()
    {
        if ($this->validate()) {
            //count the array
            $count = count($this->array);
            //sort
            rsort($this->array);

            $this->max = $this->array[0];
            $this->min = $this->array[$count-1];
            $this->sum = $this->min + $this->max;
            return $this;
        }else {
            echo "not valid";
        }
    }

    private function validate(): bool
    {
        return (empty($this->array))? false: true;
    }
}
