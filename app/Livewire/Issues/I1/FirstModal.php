<?php

namespace App\Livewire\Issues\I1;

use Livewire\Attributes\On;
use WireElements\Pro\Components\Modal\Modal;

class FirstModal extends Modal
{
    public $eventFired = 'false';
    public function render()
    {
        return <<<'HTML'
        <div class="p-4">
            <h2>First Modal Component</h2>
            <p>Event fired: {{ $eventFired }}</p>
            <button
                wire:modal="issues.i1.second-modal"
                class="bg-blue-700 text-white m-2">Open Second Modal</button>
        </div>
        HTML;
    }

    #[On('some-event-for-first-modal')]
    public function eventHandler()
    {
        $this->eventFired = 'true';
    }
}
