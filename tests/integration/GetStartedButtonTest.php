<?php
/**
 * Created by PhpStorm.
 * User: uesley
 * Date: 24/02/19
 * Time: 11:20
 */

namespace CodeBot;


use PHPUnit\Framework\TestCase;

class GetStartedButtonTest extends TestCase
{
    public function testAddGetStartedButton()
    {
        $data = (new GetStartedButton())->add('Iniciar');
        $callSendApi = new CallSendApi('PAGE_ACCESS_TOKEN');
        //$result = $callSendApi->make($data, CallSendApi::URL_PROFILE);
        //$this->assertTrue(is_string($result));
        $this->assertTrue(true);
    }

}