<x-app-layout>
    <x-slot name="header">
        <div calss='header_color'>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>
    <div class="dashboard_back">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("Let's Training") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul>
        <li>
            <div class='blog'>
                <a href='/' id='blog-text'>Blog</a>
            </div>
        </li>
        <li>
            <div class='record'>
                <a href='/records' id='record-text'>Record</a>
            </div>
        </li>
        <li>
            <div class='body'>
                <a href='/bodies' id='body-text'>Body</a>
            </div>
        </li>
    </ul>
    <ul>
        <li>
            <div class='graph'>
                <a href='/records/graphs/weight_graph' id='graph-text'>Graph</a>
            </div>
        </li>
        <li>
            <div class='training'>
                <a href='/trainings' id='training-text'>Training</a>
            </div>
        </li>
        <li>
            <div class='music'>
                <a href='/music' id='music-text'>Music</a>
            </div>
        </li>
    </ul>
    <style>
        .header_color{
            background-color: Cornsilk;
        }
        .dashboard_back{
            background-image: url({{ url::asset('images/gym.jpg'); }});
            background-size:contain;
            background-attachment: fixed;
            background-position: center center;
        }
        .blog{
            background-image: url({{ url::asset('images/board.jpg'); }});
            background-size:cover;
            width: 300px;
            height: 200px;
            position: relative;
        }
        #blog-text{
            color:white;
            position:absolute;
            padding: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            width: 100px;
            height: 80px;
        }
        .record{
            background-image: url({{ url::asset('images/record.jpg'); }});
            background-size:cover;
            width: 300px;
            height: 200px;
            position: relative;
        }
        #record-text{
            color:white;
            position:absolute;
            padding: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            width: 100px;
            height: 80px;
        }
        .body{
            background-image: url({{ url::asset('images/body.png'); }});
            background-size:cover;
            width: 300px;
            height: 200px;
            position: relative;
        }
        #body-text{
            color:black;
            position:absolute;
            padding: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            width: 100px;
            height: 80px;
        }
        .graph{
            background-image: url({{ url::asset('images/graph.png'); }});
            background-size:cover;
            width: 300px;
            height: 200px;
            position: relative;
        }
        #graph-text{
            color:black;
            position:absolute;
            padding: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            width: 100px;
            height: 80px;
        }
        .training{
            background-image: url({{ url::asset('images/dumbbell.jpg'); }});
            background-size:cover;
            width: 300px;
            height: 200px;
            position: relative;
        }
        #training-text{
            color:white;
            position:absolute;
            padding: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            width: 100px;
            height: 80px;
        }
        .music{
            background-image: url({{ url::asset('images/music.png'); }});
            background-size:cover;
            width: 300px;
            height: 200px;
            position: relative;
        }
        #music-text{
            color:white;
            position:absolute;
            padding: 20px;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            width: 100px;
            height: 80px;
        }
        
        
        ul{
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            height: 200px;
        }
    </style>
</x-app-layout>
