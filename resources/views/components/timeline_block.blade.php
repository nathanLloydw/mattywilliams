
<div class="bg-support">

    <div class="container mx-auto px-2">

        <div class="relative">

            <div class="absolute left-1/2 hidden h-full w-1 -translate-x-1/2 transform bg-blue-300 sm:block"></div>

            <div class="flex flex-col gap-12 py-10 text-sm font-semibold antialiased">

                @foreach($component['timeline'] as $event)
                    <div class="mt-6 sm:mt-0">
                        <div class="flex flex-col items-center sm:flex-row">

                            <div class="flex @if($loop->iteration % 2 == 0) justify-start @else justify-end @endif w-full mx-auto items-center">
                                <div class="w-full sm:w-1/2 @if($loop->iteration % 2 == 0) sm:pr-8 @else sm:pl-8 @endif">
                                    <div class="rounded bg-white p-4 shadow">
                                        <div class="text-gray-400 border-b py-2 @if($loop->iteration % 2 == 0) text-right @else text-left @endif">{{ $event['date'] }}</div>
                                        <div class="pt-2">{{ $event['text'] }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="absolute left-1/2 flex h-8 w-8 -translate-x-1/2 -translate-y-4 transform items-center justify-center rounded-full border-4 border-white bg-blue-500 text-white sm:translate-y-0">

                                @php ($icon = $event['icon']->value())
                                @includeIf("SVGs.$icon",['size' => 'sm'])

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</div>