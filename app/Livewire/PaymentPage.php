<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class PaymentPage extends Component
{
    public int $currentStep = 0;

    public bool $disableSubmitButton = false;

    public function render(): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.payment-page');
    }

    public function nextStep(): void
    {
        $this->currentStep++;
        $this->dispatch('nextStep', $this->currentStep);
    }

    #[On('completedSteps')]
    public function completedSteps(): void
    {
        $this->disableSubmitButton = true;
    }
}
