<?php

namespace Pjanka\PjankaToolsBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

final class PjankaToolsBundle extends AbstractBundle
{
    public const TEST = 'test';

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
