<?php

namespace Habibun\ValidationBundle;

class RuleProvider implements RuleProviderInterface
{
    public function getRules(): array
    {
        return [
            'rule_1' => 'rule_1',
            'rule_2' => 'rule_2',
        ];
    }
}
