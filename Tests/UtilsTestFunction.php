<?php

namespace Navitia\Component\Tests;

use Navitia\Component\Utils;

/**
 * Description of UtilsFunctionTest
 * Class for generic test function
 *
 * @author rndiaye
 */
class UtilsTestFunction extends \PHPUnit_Framework_TestCase
{
    /**
     * This function is used to test all setter/getter
     */
    public function setter($testArray, $service)
    {
        foreach ($testArray as $property => $value) {
            $property = Utils::deleteUnderscore($property);
            $setter = 'set'.ucfirst($property);
            $getter = 'get'.ucfirst($property);
            $service->$setter($value);
            $result = $service->$getter();
            $this->assertEquals($result, $value);
        }
    }
}
