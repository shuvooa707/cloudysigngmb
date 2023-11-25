<?php

namespace App\Services\Services\Spin;

use App\Events\SpinEvent;

/**
 * Class SpinService.
 * @desc responsible for handling game actions
 */
final class SpinService
{
    use SpinGetterSetterTrait;
    private array $boardNumbers = [1,2,3,4,5];
    public function __construct($boardNumbers = [])
    {
    }


    /**
     * @return int
     * @desc
     */
    public function generateRandomNumber(): int
    {
        return array_rand($this->getBoardNumbers());
    }

    /**
     * @return void
     * @desc 
     */
    public function spin(): void
    {
        $luckyNumber = $this->generateRandomNumber();
        SpinEvent::dispatch($luckyNumber);
    }
}
