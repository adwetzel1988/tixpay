<nav aria-label="Progress">
    <ol role="list" class="overflow-hidden">
        @foreach($steps as $index => $step)
            @if ($index < $currentStep)
                <li class="relative pb-10">
                    @if($index < count($steps) - 1)
                        <div class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-indigo-600" aria-hidden="true"></div>
                    @endif
                    <!-- Complete Step -->
                    <a href="#" class="group relative flex items-start">
                        <span class="flex h-9 items-center">
                            <span class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full bg-indigo-600 group-hover:bg-indigo-800">
                                <flux:icon.check-circle class="text-white size-9" />
                            </span>
                        </span>
                        <span class="ml-4 flex min-w-0 flex-col">
                            <span class="text-sm font-medium">{{ $step['name'] }}</span>
                            <span class="text-sm text-gray-500">{{ $step['description'] }}</span>
                        </span>
                    </a>
                </li>
            @elseif ($index === $currentStep)
                <li class="relative pb-10">
                    @if($index < count($steps) - 1)
                        <div class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-indigo-600" aria-hidden="true"></div>
                    @endif
                    <!-- Current Step -->
                    <a href="#" class="group relative flex items-start" aria-current="step">
                        <span class="flex h-9 items-center" aria-hidden="true">
                            <span class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full border-2 border-indigo-600 bg-white">
                                <span class="h-2.5 w-2.5 rounded-full bg-indigo-600"></span>
                            </span>
                        </span>
                        <span class="ml-4 flex min-w-0 flex-col">
                            <span class="text-sm font-medium text-indigo-600">{{ $step['name'] }}</span>
                            <span class="text-sm text-gray-500">{{ $step['description'] }}</span>
                        </span>
                    </a>
                </li>
            @elseif ($index === count($steps) - 1)
                <li class="relative">
                    <!-- Last Step -->
                    <a href="#" class="group relative flex items-start">
                        <span class="flex h-9 items-center" aria-hidden="true">
                            <span class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-300 bg-white group-hover:border-gray-400">
                                <span class="h-2.5 w-2.5 rounded-full bg-transparent group-hover:bg-gray-300"></span>
                            </span>
                        </span>
                        <span class="ml-4 flex min-w-0 flex-col">
                            <span class="text-sm font-medium text-gray-500">{{ $step['name'] }}</span>
                            <span class="text-sm text-gray-500">{{ $step['description'] }}</span>
                        </span>
                    </a>
                </li>
            @else
                <li class="relative pb-10">
                  <div class="absolute left-4 top-4 -ml-px mt-0.5 h-full w-0.5 bg-gray-300" aria-hidden="true"></div>
                  <!-- Upcoming Step -->
                  <a href="#" class="group relative flex items-start">
                    <span class="flex h-9 items-center" aria-hidden="true">
                      <span class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-300 bg-white group-hover:border-gray-400">
                        <span class="h-2.5 w-2.5 rounded-full bg-transparent group-hover:bg-gray-300"></span>
                      </span>
                    </span>
                    <span class="ml-4 flex min-w-0 flex-col">
                      <span class="text-sm font-medium text-gray-500">{{ $step['name'] }}</span>
                      <span class="text-sm text-gray-500">{{ $step['description'] }}</span>
                    </span>
                  </a>
                </li>
            @endif
        @endforeach
    </ol>
</nav>
