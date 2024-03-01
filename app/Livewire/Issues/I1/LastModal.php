<?php

namespace App\Livewire\Issues\I1;

use WireElements\Pro\Components\Modal\Modal;

class LastModal extends Modal
{
    public function render()
    {
        return <<<'HTML'
        <div class="p-4">
            <h2>Last Modal Component</h2>
            <button
                wire:click="buttonCloseClicked"
                class="bg-blue-700 text-white m-2">Close</button>
        </div>
        HTML;
    }

    public function buttonCloseClicked()
    {
        $this->close(
            andDispatch: 'some-event-for-second-modal'
        );
    }
}
