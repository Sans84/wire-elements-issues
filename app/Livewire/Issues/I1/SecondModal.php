<?php

namespace App\Livewire\Issues\I1;

use Livewire\Attributes\On;
use WireElements\Pro\Components\Modal\Modal;

class SecondModal extends Modal
{
    public function render()
    {
        return <<<'HTML'
        <div class="p-4">
            <h2>Second Modal Component</h2>
            <button
                wire:modal="issues.i1.last-modal"
                class="bg-blue-700 text-white m-2">Open Last Modal</button>
        </div>
        HTML;
    }

    #[On('some-event-for-second-modal')]
    public function eventHandler()
    {
        $this->close(
            andDispatch: 'some-event-for-first-modal'
        );
    }
}
