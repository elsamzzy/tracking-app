@extends('layout.app')

@section('content')
    <div class="container">
        <div id="map"></div>
    </div>
    <div class="container">
        <!---
        <div class="row">
            <div class="col">
                <ol class="breadcrumb" style="background-color: rgb(255,255,255);">
                    <li class="breadcrumb-item"><a href="#"><span>Home</span></a></li>
                    <li class="breadcrumb-item"><a href="#"><span>Library</span></a></li>
                    <li class="breadcrumb-item"><a href="#"><span>Data</span></a></li>
                </ol>
            </div>
        </div>
        -->
        <div class="row">
            <div class="col">
                <h4 style="color: rgba(33,37,41,0.69);"><br>{{ $current['PartitionKey'] }}<br><br></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h4 style="color: rgba(33,37,41,0.7);">Status:&nbsp;<span style="color: rgba(255,0,0,0.7);">{{ $current['trip_status'] }}</span></h4>
            </div>
            <div class="col">
                <h4 style="color: rgba(33,37,41,0.73);">{{ $current['PartitionKey'] }}</h4>
            </div>
        </div>
    </div>
    <section class="cd-timeline js-cd-timeline">
        <div class="cd-timeline__container">
            @foreach($json as $value)
                <div class="cd-timeline__block js-cd-block">
                    <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                        <img src="{{ asset('img/loc.svg') }}" alt="Picture">
                    </div>
                    <!-- cd-timeline__img -->
                    <div class="cd-timeline__content js-cd-content">
                        <h3>{{ $value['trip_status'] }}</h3>
                        <p><b>{{ $value['current_asset_position_name'] }}</b></p>
                        <a href="#0" class="btn btn-primary btn-lg">Read More</a>
                        <span class="cd-timeline__date" style="border: 2px solid green; background-color: green; border-radius: 12px; color:white;">{{ $value['created_at'] }}</span>
                    </div>
                    <!-- cd-timeline__content -->
                </div>
            @endforeach
            <div class="cd-timeline__block js-cd-block">
                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                    <img src="{{ asset('img/loc.svg') }}" alt="Picture">
                </div>
                <!-- cd-timeline__img -->
                <div class="cd-timeline__content js-cd-content">
                    <h3>Title of section 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                    <a href="#0" class="btn btn-primary btn-lg">Read More</a>
                    <span class="cd-timeline__date" style="border: 2px solid green; background-color: green; border-radius: 12px; color:white;">12 July, 2016</span>
                </div>
                <!-- cd-timeline__content -->
            </div>
            <!-- cd-timeline__block -->
            <div class="cd-timeline__block js-cd-block">
                <div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
                    <img src="{{ asset('img/loc.svg') }}" alt="Movie">
                </div>
                <!-- cd-timeline__img -->
                <div class="cd-timeline__content js-cd-content">
                    <h3>Title of section 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
                    <a href="#0" class="btn btn-primary btn-lg">Read More</a>
                    <span class="cd-timeline__date" style="border: 2px solid red; background-color: red; border-radius: 12px; color:white;">20 July, 2017</span>
                </div>
                <!-- cd-timeline__content -->
            </div>
            <!-- cd-timeline__block -->
            <div class="cd-timeline__block js-cd-block">
                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                    <img src="{{ asset('img/loc.svg') }}" alt="Picture">
                </div>
                <!-- cd-timeline__img -->
                <div class="cd-timeline__content js-cd-content">
                    <h3>Title of section 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
                    <a href="#0" class="btn btn-primary btn-lg">Read More</a>
                    <span class="cd-timeline__date">24 July, 2018</span>
                </div>
                <!-- cd-timeline__content -->
            </div>
            <!-- cd-timeline__block -->
            <div class="cd-timeline__block js-cd-block">
                <div class="cd-timeline__img cd-timeline__img--location js-cd-img">
                    <img src="{{ asset('img/loc.svg') }}" alt="Location">
                </div>
                <!-- cd-timeline__img -->
                <div class="cd-timeline__content js-cd-content">
                    <h3>Title of section 4</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                    <a href="#0" class="btn btn-primary btn-lg">Read More</a>
                    <span class="cd-timeline__date">12 September, 2018</span>
                </div>
                <!-- cd-timeline__content -->
            </div>
            <!-- cd-timeline__block -->
            <div class="cd-timeline__block js-cd-block">
                <div class="cd-timeline__img cd-timeline__img--location js-cd-img">
                    <img src="{{ asset('img/loc.svg') }}" alt="Location">
                </div>
                <!-- cd-timeline__img -->
                <div class="cd-timeline__content js-cd-content">
                    <h3>Title of section 5</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
                    <a href="#0" class="btn btn-primary btn-lg">Read More</a>

                    <span class="cd-timeline__date">20 September, 2018</span>
                </div>
                <!-- cd-timeline__content -->
            </div>
            <!-- cd-timeline__block -->
            <div class="cd-timeline__block js-cd-block">
                <div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
                    <img src="{{ asset('img/loc.svg') }}" alt="Movie">
                </div>
                <!-- cd-timeline__img -->
                <div class="cd-timeline__content js-cd-content">
                    <h3>Final Section</h3>
                    <p>This is the content of the last section</p>
                    <span class="cd-timeline__date">1 October, 2018</span>
                </div>
                <!-- cd-timeline__content -->
            </div>
            <!-- cd-timeline__block -->
        </div>
    </section>

@endsection
