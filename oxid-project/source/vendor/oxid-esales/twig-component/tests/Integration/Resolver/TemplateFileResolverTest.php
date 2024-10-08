<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\Twig\Tests\Integration\Resolver;

use OxidEsales\EshopCommunity\Internal\Framework\Templating\Resolver\TemplateFileResolverInterface;
use OxidEsales\EshopCommunity\Tests\ContainerTrait;
use PHPUnit\Framework\TestCase;

final class TemplateFileResolverTest extends TestCase
{
    use ContainerTrait;

    /**
     * @dataProvider templateNameFileDataProvider
     */
    public function testResolveSmartyTemplate(string $templateName, string $expectedFilename): void
    {
        $filename = $this->get(TemplateFileResolverInterface::class)->getFilename($templateName);

        $this->assertEquals($expectedFilename, $filename);
    }

    public function templateNameFileDataProvider(): array
    {
        return [
            [
                'template',
                'template.html.twig'
            ],
            [
                'some/path/template_name.html.twig',
                'some/path/template_name.html.twig'
            ],
        ];
    }
}
