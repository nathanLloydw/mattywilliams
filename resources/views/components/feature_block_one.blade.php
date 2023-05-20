<section class="container mx-auto py-6 px-6 lg:px-14 lg:flex items-center">

    <div class="w-full lg:w-1/2">
        {!! $component['header'] !!}
        <p class="mt-4 xl:w-7/12 w-full m-auto">{{ $component['context'] }}</p>
        <div class="mt-6 md:mt-10 grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-6 lg:mt-6 2xl:mt-12">

            @foreach($component['features'] as $feature)
                @php ($icon = $feature['icon']->value())

                <div class="flex items-center mx-auto">
                    <div class="w-14 lg:w-16 h-14 lg:h-16 relative mr-5 shrink-0">
                        <div class="absolute top-0 right-0 bg-support rounded w-14 lg:w-16 h-14 lg:h-16 mt-2 mr-2"></div>
                        <div class="absolute text-white bottom-0 left-0 bg-primary rounded w-14 lg:w-16 h-14 lg:h-16 flex items-center justify-center mt-2 mr-2 p-4">
                            @includeIf("SVGs.$icon")
                        </div>
                    </div>
                    <div class="flex items-start flex-col pt-8">
                        <h4>{{ $feature['feature_title'] }}</h4>
                        <p class="lg:w-40 2xl:w-52 mt-2 text-left">{{ $feature['feature_context'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <div class="w-full lg:w-1/2 mt-6 lg:mt-0">

        @if($component['asset_type'] == 'image' && isset($component['image']))
            <img src="https://i.ibb.co/SKLJ7WX/austin-distel-jp-Hw8ndw-J-Q-unsplash-1.png" alt="ongoing meeting" class="w-full obejct-fit object-center object-fill h-full" />
        @elseif($component['asset_type'] == 'video' && isset($component['iframe']))

            <div @class(["w-full rounded-lg overflow-hidden"])>{!! $component['iframe'] !!}</div>

        @endif

    </div>

</section>
