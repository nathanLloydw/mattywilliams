<svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(127, 219, 255, 1)" offset="0%"></stop><stop stop-color="rgba(127, 219, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,40L48,35C96,30,192,20,288,18.3C384,17,480,23,576,35C672,47,768,63,864,73.3C960,83,1056,87,1152,85C1248,83,1344,77,1440,61.7C1536,47,1632,23,1728,18.3C1824,13,1920,27,2016,33.3C2112,40,2208,40,2304,48.3C2400,57,2496,73,2592,80C2688,87,2784,83,2880,71.7C2976,60,3072,40,3168,40C3264,40,3360,60,3456,56.7C3552,53,3648,27,3744,28.3C3840,30,3936,60,4032,61.7C4128,63,4224,37,4320,26.7C4416,17,4512,23,4608,21.7C4704,20,4800,10,4896,15C4992,20,5088,40,5184,43.3C5280,47,5376,33,5472,25C5568,17,5664,13,5760,20C5856,27,5952,43,6048,45C6144,47,6240,33,6336,31.7C6432,30,6528,40,6624,43.3C6720,47,6816,43,6864,41.7L6912,40L6912,100L6864,100C6816,100,6720,100,6624,100C6528,100,6432,100,6336,100C6240,100,6144,100,6048,100C5952,100,5856,100,5760,100C5664,100,5568,100,5472,100C5376,100,5280,100,5184,100C5088,100,4992,100,4896,100C4800,100,4704,100,4608,100C4512,100,4416,100,4320,100C4224,100,4128,100,4032,100C3936,100,3840,100,3744,100C3648,100,3552,100,3456,100C3360,100,3264,100,3168,100C3072,100,2976,100,2880,100C2784,100,2688,100,2592,100C2496,100,2400,100,2304,100C2208,100,2112,100,2016,100C1920,100,1824,100,1728,100C1632,100,1536,100,1440,100C1344,100,1248,100,1152,100C1056,100,960,100,864,100C768,100,672,100,576,100C480,100,384,100,288,100C192,100,96,100,48,100L0,100Z"></path></svg>
<div class="bg-support">

    <div class="container mx-auto px-2">

        <div class="relative">

            <div class="absolute left-1/2 hidden h-full w-1 -translate-x-1/2 transform bg-blue-300 sm:block"></div>

            <div class="flex flex-col gap-12 py-10 text-sm font-semibold antialiased">

                @foreach($component['timeline'] as $event)
                    <div class="mt-6 sm:mt-0">
                        <div class="flex flex-col items-center sm:flex-row">

                            <div class="flex flex-col sm:flex-row @if($loop->iteration % 2 == 0) justify-start @else justify-end @endif w-full mx-auto items-center">

                                @if($event['asset'] && $loop->iteration % 2 !== 0)
                                    <div class="sm:w-1/2 py-2 sm:pr-8">
                                        <img class="rounded-md" src="{{ $event['asset']['permalink'] }}">
                                    </div>
                                @endif

                                <div class="w-full sm:w-1/2 @if($loop->iteration % 2 == 0) sm:pr-8 @else sm:pl-8 @endif">
                                    <div class="rounded bg-white p-4 shadow">
                                        <div class="border-b py-2 [&>p]:text-lg [&>p]:text-black [&>p]:font-bold @if($loop->iteration % 2 == 0) [&>p]:text-right @else [&>p]:text-left @endif">{!! $event['head_line'] !!}</div>
                                        <div class="pt-2 [&>p]:text-left [&>p]:text-black [&>p]:font-semibold @if($loop->iteration % 2 == 0) [&>p]:text-right @else [&>p]:text-left @endif">{!! $event['text'] !!}</div>
                                    </div>
                                </div>

                                    @if($event['asset'] && $loop->iteration % 2 == 0)
                                        <div class="sm:w-1/2 py-2 sm:pl-8">
                                            <img class="rounded-md" src="{{ $event['asset']['permalink'] }}">
                                        </div>
                                    @endif
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
<svg class="waves rotate-180" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
     viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" class="fill-support opacity-70" />
        <use xlink:href="#gentle-wave" x="48" y="3" class="fill-support opacity-50" />
        <use xlink:href="#gentle-wave" x="48" y="5" class="fill-support opacity-30" />
        <use xlink:href="#gentle-wave" x="48" y="7" class="fill-support" />
    </g>
</svg>