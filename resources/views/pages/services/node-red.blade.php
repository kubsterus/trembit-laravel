@extends('skeleton')

@section('critical_styles')
    @inlineCss(css/services/mobile-app-development.css)
@endsection
@section('content')
    <x-service-item-section :blocks="[
        [
            'title' => 'Node-Red Development',
            'image' => asset('view/images/serviceLogoNodeRed1.webp'),
            'content' => [
                'In recent years the Internet of Things (IoT) technology shows overhelming growth.
                Basically IoT is the networking of physical devices like smart watches, vehicles, drones, buildings, etc via internet.
                And when businesses starts building applications with IoT usage they meet the need to somehow connect all this devices
                together and integrate them to other popular online services. And here is Node-RED appears.
                <br>
                Node-RED is a simple tool that allows to wire Internet of Things in a visual appealing way.
                Node-RED was built by IBM team in 2014, with the main goal to free up development time by elimination of routine programming tasks.
                Node-RED supply us with the open source web-based flow editor where engineers can wire IoT together by using large library of existing nodes.
                Afterwards designed flows can be deployed in one-click.',
            ],
        ],
        [
            'image' => asset('view/images/serviceLogoNodeRed2.webp'),
            'content' => [
                'Trembit propose to develop various Node-RED flows with custom nodes. We wire together API\'s, online services and hardware devices.
                With Node-RED we create real working prototypes in days. Since ligthweight runtime of Node-RED built on top of Node.JS we use simplest hardware for deploying.
                For example RapsberryPi is one of the most popular solutions for running Demos with Node-RED.'
            ]
        ],
    ]"></x-service-item-section>
@endsection
