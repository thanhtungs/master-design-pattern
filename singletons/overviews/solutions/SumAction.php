<?php
require 'Sum.php';
require 'SumStorage.php';
class SumAction
{
    public function __construct($args)
    {
        $sum = new Sum();
        $sum->sum(1, 2);
    }

    /*
     * Problem
    Mỗi lần gọi hàm sum -> khởi tạo sumStorage
    1. hi sinh bộ nhớ
    2. thời gian khởi tạo đối tượng
    */
}