<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ProgressBar extends Component
{
    public array $steps = [
        [
            'name' => 'Look Up',
            'description' => 'Citation case search record',
        ],
        [
            'name' => 'Info',
            'description' => 'Citation details and violations',
        ],
        [
            'name' => 'Amount',
            'description' => 'Total citation payment due',
        ],
        [
            'name' => 'Payment',
            'description' => 'Record of payments made',
        ],
        [
            'name' => 'Receipt',
            'description' => 'Proof of citation payment',
        ],
    ];

    public int $currentStep;

    public function render(): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.progress-bar');
    }

    #[On('nextStep')]
    public function updateCurrentStep(int $step): void
    {
        $this->currentStep = $step;

        if ($this->currentStep === count($this->steps)) {
            $this->dispatch('completedSteps');
        }
    }
}
