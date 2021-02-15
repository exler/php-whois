<?php

namespace Exler\Whois;

use PHPUnit\Framework\TestCase;

class WhoisTest extends TestCase
{
    private static $whois;

    public static function setUpBeforeClass(): void
    {
        self::$whois = new Whois(15);
    }

    public function testLookup()
    {
        $r = self::$whois->lookup("example.com");
        $this->assertStringContainsString(
            "For more information on Whois status codes, please visit https://icann.org/epp",
            $r
        );
    }

    public function testCheckAvailability()
    {
        $r = self::$whois->isAvailable("example.com");
        $this->assertFalse($r);

        $r = self::$whois->isAvailable("nowouldwouldeverbuyawebsitewiththatname.com");
        $this->assertTrue($r);
    }
}
