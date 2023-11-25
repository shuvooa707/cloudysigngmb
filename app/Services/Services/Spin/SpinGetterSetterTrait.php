<?php

namespace App\Services\Services\Spin;

trait SpinGetterSetterTrait
{
    public function getBoardNumbers(): array
    {
        return $this->boardNumbers;
    }

    public function setBoardNumbers(array $boardNumbers): void
    {
        $this->boardNumbers = $boardNumbers;
    }
}