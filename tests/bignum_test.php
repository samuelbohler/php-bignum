<?php
require_once(dirname(__FILE__).'/../src/bignum.php');

class bignum_test extends PHPUnit_Framework_TestCase
{
    public function test_bignum_constuct()
    {
        // New instance without any parameters should cause an error
        $failed = false;
        try
        {
            $fail = new bignum();
        }
        catch(Exception $e) {
            $failed = true;
        }
        $this->assertEquals(true, $failed, 'Constructor doesn\'t fail when given no parameters');

        // New instance from integer
        $int = new bignum(1234);
        $this->assertEquals(true, ($int instanceof bignum));

        // New instance from bignum
        $bignum = new bignum($int);
        $this->assertEquals(true, ($bignum instanceof bignum));
        $this->assertEquals($int, $bignum);

        // New instance from GMP number
        $gmp = new bignum(gmp_init(1234));
        $this->assertEquals(true, ($gmp instanceof bignum));
        $this->assertEquals($int, $gmp);

        // New instance from string
        $str = new bignum('1234');
        $this->assertEquals(true, ($str instanceof bignum));
        $this->assertEquals($int, $str); 
    }

    // public function test_abs_oo()
    // {
    //     $expected = new bignum("3582903485094328594305039485");

    //     $actual   = new bignum("-3582903485094328594305039485");
    //     $actual->abs();

    //     $this->assertEquals($expected, $actual);
    // }
}