<?php

namespace KiriminAja\Unit\Preference\SetWhitelistExpeditionService;

use KiriminAja\Services\Preference\SetWhitelistExpeditionService;
use KiriminAja\Unit\Preference\PreferenceMock;
use PHPUnit\Framework\TestCase;

class SetWhitelistExpeditionServiceSuccessTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        (new PreferenceMock())->preferenceMock()
            ->shouldReceive([
                'setWhiteListExpedition' => [
                    true,
                    [
                        'status' => true,
                        'text'   => "Success get preference data",
                        'datas'  => [
                            'id'   => 123,
                            'name' => 'Mock preference data'
                        ]
                    ]
                ]
            ]);
    }

    public function test()
    {
        $services = ['jne','sicepat','jnt'];
        $result = (new SetWhitelistExpeditionService($services))->call();
        self::assertTrue($result->status);
    }
}