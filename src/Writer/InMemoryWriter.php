<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Exporter\Writer;

class InMemoryWriter implements WriterInterface
{
    /**
     * @var array
     */
    protected $elements;

    /**
     * {@inheritdoc}
     */
    public function open(): void
    {
        $this->elements = [];
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        return $this->elements;
    }

    /**
     * {@inheritdoc}
     */
    public function write(array $data): void
    {
        $this->elements[] = $data;
    }

    /**
     * @return array
     */
    public function getElements(): array
    {
        return $this->elements;
    }
}
