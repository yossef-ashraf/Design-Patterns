<?php

namespace Pattern\Test;

use Pattern\Adapter\Adapter;
use Pattern\Adapter\Auth\AdapterBasicAuth;
use Pattern\Adapter\Auth\AdapterTokenAuth;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
 
    public function testCanAuthWithBasicAuthLib()
    {
        $basicAuthAdapter = $this->createMock(AdapterBasicAuth::class);
        $basicAuthAdapter->expects($this->once())
            ->method('login')
            ->with(['username' => 'test', 'password' => 'test'])
            ->willReturn('test-test');
        $loginData = new Adapter($basicAuthAdapter);
        $result = $loginData->login(['username'=>'test','password' => 'test']);
    
        $this->assertEquals('test-test', $result);
        
    }

    public function testCanAuthWithTokenAuthLib()
    {
        $tokenAuthAdapter = $this->createMock(AdapterTokenAuth::class);
        $tokenAuthAdapter->expects($this->once())
            ->method('login')
            ->with(['key'=>'test','token' => 'test'])
            ->willReturn(base64_encode('test-test'));
        $loginData = new Adapter($tokenAuthAdapter);
        $result = $loginData->login(['key'=>'test','token' => 'test']);

        $this->assertEquals(base64_encode('test-test'), $result);
    
    } 

}
