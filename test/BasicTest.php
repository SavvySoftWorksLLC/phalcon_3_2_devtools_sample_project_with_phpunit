<?php

namespace Test;

use BoringLib;

require_once('UnitTestCase.php');

/**
 * Class UnitTest
 */
class BasicTest extends \UnitTestCase
{
    public function testTestCase()
    {
        $this->assertEquals(
            "works",
            "works",
            "This is OK"
        );

        $this->assertEquals(
            "works",
            "works1",
            "This will fail"
        );
    }

    public function testBoringLibrary() {
        $lib = BoringLib("hi");

        $this->assertEquals(
            "hi",
            $lib->getValue(),
            "passes"
        );
    }
}
