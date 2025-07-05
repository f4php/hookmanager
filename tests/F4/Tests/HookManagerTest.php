<?php

declare(strict_types=1);

namespace F4\Tests;
use PHPUnit\Framework\TestCase;

use F4\HookManager;

final class HookManagerTest extends TestCase
{
    public function testHook(): void
    {
        HookManager::addHook(hookName: 'MockHook', callback: function(mixed $context): string {
            return 'test-hook-result:'.$context['test'];
        });
        $this->assertSame('test-hook-result:test-value', HookManager::triggerHook(hookName: 'MockHook', context: ['test'=>'test-value'])[0]);
    }
}