<?php

namespace debugchannel;

use debugchannel\D;

class DPete extends \PHPUnit_Framework_Testcase
{

    const DEFAULT_HOST = '192.168.2.163';
    const DEFAULT_CHANNEL = 'pete';
    const DEFAULT_API_KEY = null;

    private $d;

    public function __construct()
    {

        $options = [
            'showMethods' => true,
            'showPrivateMembers' => true,
            'expLvl' => 2
        ];

        $this->d = new D(
            self::DEFAULT_HOST,
            self::DEFAULT_CHANNEL,
            self::DEFAULT_API_KEY,
            $options
        );

    }

    public function testUnknownHandler()
    {
        $this->d->log( rand() );
        return;
        foreach( range(1,1000) as $n ) {
            $this->d->log($n);
            usleep(50000);
            if( $n % 10 === 0 ) {
                $this->d->clear();
            }
        }
    }

}