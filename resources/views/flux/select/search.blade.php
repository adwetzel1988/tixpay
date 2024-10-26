@props([
    'closable' => false,
    'icon' => null,
])

@php
$classes = Flux::classes()
    ->add('h-10 w-full flex items-center px-3 py-2')
    ->add('font-medium text-sm text-zinc-800 dark:text-white')
    ->add('pl-9') // Make room for magnifying glass icon...
    ->add($closable ? 'pr-9' : '') // Make room for close button...
    ->add('outline-none')
    ->add('border-b border-zinc-200 dark:border-zinc-600')
    ->add('bg-white dark:bg-zinc-700')
    ;
@endphp

<div class="relative flex grow mx-[-5px] mt-[-5px] mb-[5px]" data-flux-select-search>
    <div class="absolute top-0 bottom-0 flex items-center justify-center text-xs text-zinc-400 pl-3.5 left-0">
        <?php if (is_string($icon)): ?>
            <flux:icon :$icon variant="micro" />
        <?php elseif ($icon): ?>
            {{ $icon }}
        <?php else: ?>
            <flux:icon.magnifying-glass variant="micro" />
        <?php endif; ?>
    </div>

    <input type="text" {{ $attributes->class($classes)->merge(['placeholder' => 'Search...']) }} autofocus />

    <?php if ($closable): ?>
        <div class="absolute top-0 bottom-0 flex items-center justify-center text-xs text-zinc-400 pr-3.5 right-0 [&:has(+input:focus)]:text-zinc-800 [&:has(+input:focus)]:dark:text-zinc-400">
            <ui-close>
                <flux:button icon="x-mark" variant="subtle" size="xs" />
            </ui-close>
        </div>
    <?php endif; ?>
</div>
