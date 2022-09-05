@props([
    'left_title' => 'Left title',
    'left_list' => [
        'Left item 1',
        'Left item 2',
        'Left item 3',
        'Left item 4',
    ],
    'right_title' => 'Right title',
    'right_list' => [
        'Right item 1',
        'Right item 2',
        'Right item 3',
        'Right item 4',
    ]
])
<section id="block-s-2q">
    <div class="sec-a-3-b">
        <div class="wrapper">
            <div class="bl-7w">
                <div class="img-l">
                    <img src="{{asset('view/images/3icon.svg')}}" style="max-width:207px;" title="Included features" alt="Included features">
                </div>
                <div class="text-l">
                    <div class="flx-m">
                        <img class="img-m" src="{{asset('view/images/3icon.svg')}}" style="max-width:207px;" title="logo" alt="logo">
                        <h3>{{$left_title}}</h3>
                    </div>
                    <ul>
                        @foreach($left_list as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
            <div class="bl-3w">

                <div class="col-q-l">
                    <div class="img-l">
                        <img src="{{asset('view/images/1inon.svg')}}" style="max-width:207px;" title="logo" alt="logo">
                    </div>
                    <div class="text-l">
                        <div class="flx-m">
                            <img class="img-m" src="{{asset('view/images/1inon.svg')}}" style="max-width:207px;" title="logo" alt="logo">
                            <h3>{{$right_title}}</h3>
                        </div>
                        <ul>
                            @foreach($right_list as $item)
                                <li>{{$item}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
