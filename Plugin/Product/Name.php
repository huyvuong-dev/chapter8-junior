<?php

namespace Magenest\Chapter8\Plugin\Product;

class Name
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $name)
    {
        $specialprice = $subject->getSpecialPrice();
        $specialfromdate = $subject->getSpecialFromDate();
        $specialtodate = $subject->getSpecialToDate();
        $today = time();
        if ($specialprice && $today >= strtotime($specialfromdate)) {
            if (!$specialtodate || $today <= strtotime($specialtodate))
                $name = "Special: " . $name;
        }
        return $name;
    }
}