<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;

interface ProductVariantAssociationTypeInterface extends
    CodeAwareInterface,
    ResourceInterface,
    TranslatableInterface
{
    public function getName(): ?string;

    public function setName(?string $name): void;
}
