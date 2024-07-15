<?php

$sum = new Sum();
$sum->sum(1, 2);

/*
 * Giải quyết vấn đề: Hạn chế tối đa code main index
 * Vấn đề mới: Mỗi lần gọi hàm sum -> Khởi tạo SumStorage => hi sinh bộ nhớ và thời gian khởi tạo đối tượng.
 * Giải quyết vấn đề: Vừa giải quyết được dòng code index, ko phải hi sinh bộ nhớ, thời gian khởi tạo => sử dụng singleton design pattern
 * */