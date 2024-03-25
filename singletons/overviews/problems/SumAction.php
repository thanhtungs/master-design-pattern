<?php
class SumAction
{
    public function __construct($args)
    {
        $sum = new Sum();
        $sumStorage = new SumStorage();
        $result = $sum->sum(1, 2);
        $sumStorage->store($result);
    }

    /*
     * Problem
    1 nghiệp vụ => 3 dòng code
    -> Hàng nghìn nghiệp vụ -> nhiều dòng code, không kiểm soát được
    */
}