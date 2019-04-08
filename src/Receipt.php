<?php
namespace TDD;
class Receipt {
    public function total(array $items = []) {
        return array_sum($items); // liidab antud arvud kokku
    }

    public function tax($amount, $tax) {  // lisame uue funktsiooni, mis võtab kasutusele kaks sisendit
        return ($amount * $tax);  //korrutab need kaks sisendit kokku
    }
}