<?php

namespace Habibun\ValidationBundle;

class Validator
{
    /**
     * @var RuleProvider
     */
    private $rule;
    /**
     * @var false
     */
    private $configBoolean;
    /**
     * @var int
     */
    private $configInteger;

    /**
     * Validator constructor.
     */
    public function __construct(RuleProviderInterface $rule, $configBoolean = false, $configInteger = 0)
    {
        $this->rule = $rule;
        $this->configBoolean = $configBoolean;
        $this->configInteger = $configInteger;
    }

    public function validate()
    {
        if ($this->configBoolean) {
            dd('boolean', $this->rule->getRules());
        }

        if ($this->configInteger) {
            dd('integer', $this->rule->getRules());
        }

        return true;
    }
}
