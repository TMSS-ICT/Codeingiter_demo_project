<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author User
 */
class test {

    function test(&$a) {
        $a = $a- ($a/10*5);
        return $a;
    }
    function test1() {
        echo test(100);
    }

    //put your code here
}
