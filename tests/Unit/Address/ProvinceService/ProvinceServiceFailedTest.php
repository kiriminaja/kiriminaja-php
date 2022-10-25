<?php

namespace KiriminAja\Unit\Address\ProvinceService;

use KiriminAja\Services\Address\ProvinceService;
use KiriminAja\Unit\Address\AddressMock;
use PHPUnit\Framework\TestCase;

class ProvinceServiceFailedTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        (new AddressMock())->addressMock()
            ->shouldReceive([
                'provinces' => [
                    false,
                    [
                        'status' => false,
                        'text'   => 'fail get mock data',
                    ]
                ]
            ]);
    }

    public function test()
    {
        $result = (new ProvinceService())->call();

        self::assertFalse($result->status);
    }
}