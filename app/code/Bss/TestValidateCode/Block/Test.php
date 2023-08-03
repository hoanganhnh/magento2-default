<?php
declare(strict_types=1);

// @codingStandardsIgnoreFile
namespace Bss\TestValidateCode\Block;

use Magento\Framework\View\Element\Template;

class Test extends Template
{
    public function getProduct()
    {
        echo 'sada';
        if (ereg("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $date, $regs)) {
            echo "$regs[3].$regs[2].$regs[1]";
        } else {
            echo "Invalid date format: $date";
        }
        die;
    }
}
