<?php

namespace Habibun\ValidationBundle\Tests;

use Habibun\ValidationBundle\RuleProvider;
use Habibun\ValidationBundle\Validator;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    public function testValidate()
    {
        $validator = new Validator(new RuleProvider());
        $this->assertTrue($validator->validate());
    }
}
