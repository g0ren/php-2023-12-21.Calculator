<?php

class Calculator
{
    public $a;
    public $b;
    public $operator;
    private static $instances = [];
    protected function __construct()
    {
        $this->a = 0;
        $this->b = 0;
        $this->operator = "+";
    }

    public static function getInstance() : Calculator
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }
        return self::$instances[$cls];
    }
    public function GetResult(): float|int
    {
        switch ($this->operator){
            case "+":
                return $this->a + $this->b;
                break;
            case "-":
                return $this->a - $this->b;
                break;
            case "*":
                return $this->a * $this->b;
                break;
            case "/":
                return $this->a / $this->b;
                break;
            default:
                return 0;
        }
    }
}