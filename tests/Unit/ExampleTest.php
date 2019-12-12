<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    function isPalindrome($x) {

        if ($x < 0) {
            return false;
        }

        $num = $x;
        $res = 0;
        while($num > 9){
            $remainder = $num % 10; //获取余数
            $num = ($num - $remainder)/10;//初始化传进来的变量
            $res = $res * 10 + $remainder;
        }
        $reversed =  $res * 10 + $num;

        if ($reversed == $x) {
            return true;
        }
        return false;
    }


    public function testBasicTest()
    {
        $this->assertTrue($this->isPalindrome(121));
    }

    function reverseList($head) {
        $newHead = null;

        while($head != null) {
            $node = $head->next;
            $node->next = $newHead;
            $newHead = $node;

            $head = $head->next;
        }

        return $newHead;
    }
}
