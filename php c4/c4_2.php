<?php
include("../code.php");
/**
 * 程序改错
 * 功能：根据会员的积分和商品的原价确定商品的现价，涉及到的因素如下：
 * 会员积分决定会员等级
 * 会员等级决定商品折扣
 * 商品折扣决定商品价格
 *  {0-非会员-无折扣}；
 *  {1-1000-98折}-VIP会员；
 *  {1001-3000-85折}-银牌会员
 *  {3001-10000-8折}-金牌会员
 *  {>10001-6折}-至尊会员
 */
 
/**
 * 获得会员等级
 */
echo '中国';
     function getGrade($point){
     if($point == 0){//非会员
        $grade=1;
     }else if($point <= 1000){//VIP会员
         $grade=2;
     }else if($point <= 3000){//银牌会员
         $grade=3;
     }else if($point <= 10000){ //金牌会员
         $grade=4;
     }else{ //至尊会员
         $grade=5;
     }
     return $grade;
 }

 /**
  * 获得会员折扣
  */
 function getDiscount($grade){
     switch($grade){
         case 1:
             $discount = 1;
             break;
         case 2:
             $discount = 0.98;
             break;
         case 3:
             $discount = 0.85;
             break;
         case 4:
             $discount = 0.8;
             break;
         case 5:
             $discount = 0.6;
             break;
         default:
             $discount = -1;
             break;     
     }
     return $discount;

 }

 /**
  * 获得商品价格
  */
 function getPrice($point,$price){
     $grade = getGrade($point);
     var_dump($grade);
     $discount = getDiscount($grade);
     var_dump($discount);
     $newPrice = $discount*$price;

     return $newPrice;
 }

 //调用函数
 $point = 0;
 echo getPrice(500, 600);
 echo '<br />';


 