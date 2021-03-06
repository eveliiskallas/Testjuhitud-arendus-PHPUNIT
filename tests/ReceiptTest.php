<?php
namespace TDD\Test;
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR .'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\Receipt;

class ReceiptTest extends TestCase {
    public function setUp() {  //lisame meetodi setUp
        $this->Receipt = new Receipt(); // loome receipt objekti, mis on võrdne uue receipt objektiga
    }
    public function tearDown() {  //lisame meetodi tearDown, see tühistab receipt objekti, tagades, et PHP ei kannaks midagi ühest testikäigust teise.
        unset($this->Receipt); //
    }
    public function testTotal() {
        $input = [0,2,5,8]; // antud arvud, mis liidetakse kokku
        $output = $this->Receipt->total($input); // output on siis võrdne selle arve summaga. See muudab testi rohkem isoleeritumaks
        $this->assertEquals(
            15, // eeldatakse, et arve summa on 15
            $output, // väljastab summa
            'When summing the total should equal 15' // väljastab sõnumi, kui test kukub läbi
        );
    }

    public function testTax() {  // loome uue meetodi
        $inputAmount = 10.00;  // loome sisendi, mis on 10 rahaühikut.
        $taxInput = 0.10; // see on maksu protsent
        $output = $this->Receipt->tax($inputAmount, $taxInput); // kutsume selle meetodi Receipt objektis välja.
        $this->assertEquals(
            1.00,
            $output,
            'The tax calculation should equal 1.00'
        );
    }
}

//    public function testTotal() {
////        $Receipt = new Receipt();
////        $this->assertEquals(
////            15,
////            $Receipt->total([0,2,5,8]),
////            'When summing the total should equal 15'
////        );
////    }
////}