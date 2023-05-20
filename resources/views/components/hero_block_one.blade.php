<section class="container mx-auto lg:flex py-6 px-6 lg:px-14">

    @if($component['image_location']->value() == 'left')
        <div @class(["w-full lg:pr-1 flex items-center shrink-0",
                     'lg:w-1/2'=>$component['block_ratio'] == '50-50',
                     'lg:w-2/3'=>$component['block_ratio'] == '66-33',
                     'lg:w-3/4'=>$component['block_ratio'] == '75-25'])>

            @if($component['asset_type'] == 'image' && isset($component['image']))
                <img @class(["m-auto",'rounded-lg'=>$component['rounded_image_borders']]) src="{{ $component['image']['permalink'] }}">
            @elseif($component['asset_type'] == 'video' && isset($component['video']))
                <div @class(["w-full",'rounded-lg overflow-hidden'=>$component['rounded_image_borders']])>{!! $component['video'] !!}</div>
            @endif

        </div>
    @endif

    <div class="w-full lg:w-auto lg:px-10 m-auto flex flex-col items-center py-6">
        <div class="lg:flex justify-center items-center flex-col mb-5 space-y-6">
            {!! $component['context'] !!}
        </div>

        <div class="flex space-x-4 justify-center items-center">
            @foreach($component['buttons'] as $button)
                @if($loop->iteration % 2 != 0)
                    <button class="primary lg:py-3"><a href="{{ $button['button_link'] }}">{{ $button['button_text'] }}</a></button>
                @else
                    <button class="secondary lg:py-3"><a href="{{ $button['button_link'] }}">{{ $button['button_text'] }}</a></button>
                @endif
            @endforeach
        </div>
    </div>

    @if($component['image_location']->value() == 'right')
        <div @class(["w-full lg:pl-1 flex items-center shrink-0",
                     'lg:w-1/2'=>$component['block_ratio'] == '50-50',
                     'lg:w-1/3'=>$component['block_ratio'] == '66-33',
                     'lg:w-1/4'=>$component['block_ratio'] == '75-25'])>

            @if($component['asset_type'] == 'image' && isset($component['image']))
                <img @class(["m-auto",'rounded-lg'=>$component['rounded_image_borders']]) src="{{ $component['image']['permalink'] }}">
            @elseif($component['asset_type'] == 'video'  && isset($component['video']))
                <div @class(["w-full",'rounded-lg overflow-hidden'=>$component['rounded_image_borders']])>{!! $component['video'] !!}</div>
            @endif

        </div>
    @endif

</section>