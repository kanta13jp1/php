<?php
$var = rand(0, 99);    # 0~99までの整数を生成する
print "$var\n" ;

if($var < 50) {
    print "生成した値は50未満" ;
} else if($var < 75) {
    print "生成した値は50以上75未満" ;
} else {
    print "生成した値は75以上" ;
}
?>