<?php
include "paints.php";
include "Mark.php";
/*
$tshirt = new Clothes("白襯衫",1000);
printf("衣服名字: %s\n", $tshirt->getName());
printf("衣服的價錢: %d\n", $tshirt->getPrize());
printf("衣服清洗方式: %s \n", $tshirt->doWash());
*/

$cowpaint = new Paint("鬼洗",3000,100,30);
printf("褲子名稱: %s\n",$cowpaint->getName());
printf("褲子的價錢: %d 元\n",$cowpaint->getPrize());
printf("褲子的長度: %d CM\n",$cowpaint->getLength());
printf("褲子的腰圍: %d 吋 \n",$cowpaint->getWaist());
printf("褲子的清洗方式: %s", $cowpaint->doWash());

$cowpaint->setMark(new class implements Mark{
    public function domark(string $mark)
    {
        print ($mark);
    }
});

$cowpaint->getMark()->domark("Logo");
?>