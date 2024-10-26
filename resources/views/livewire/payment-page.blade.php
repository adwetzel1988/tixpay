<div class="flex flex-row justify-center">
    <div class="w-[400px]">
        <livewire:progress-bar :current-step="$currentStep" />
    </div>
    <div class="flex flex-col w-1/2">
        @switch($currentStep)
            @case(0)
                <livewire:steps.lookup />
                @break
            @case(1)
                <livewire:steps.info />
                @break
            @case(2)
                <livewire:steps.amount />
                @break
            @case(3)
                <livewire:steps.payment />
                @break
        @endswitch
        <flux:button class="mt-20 h-15" wire:click="nextStep" :disabled="$disableSubmitButton">Next</flux:button>
    </div>
</div>
