@extends('app')

@section('title', '日系问答_关于日本的问题，有问必答')

@section('content')
    @include('shared._topbar')
    @include('auth._register_messages')
    <div class="welcome-banner">
        <div class="container">
            <div class="hidden-xs col-md-6">
                <img src="/images/rixi/sushi.png" height="400" class="center-block">
            </div>
            <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                <img src="/images/rixi/sushi.png" height="320" class="center-block">
            </div>

            <div class="col-md-6">
                <div class="welcome-banner-text">
                    <h1>关于日本你想知道什么？</h1>

                    <div class="welcome-banner-text-content">
                        <h3>服装？料理？化妆品？文化？关于日本，把想知道的一切都告诉我们吧！
                        我们会尽快的整理出资料通知您的～</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rixi-main">
        <div class="container">
            <div class="tool-bar">
                <div class="tool-bar-info">
                    <p>总计 <strong class="text-primary">{{ \App\Topic::all()->count() }}</strong> 个话题</p>
                </div>
                <div class="new-topic-button pull-right">
                    <a href="{{ route('topic.create') }}" class="btn btn-inverse">新的话题</a>
                </div>
            </div>

            @include('topic.list._topic', ['topics' => $topics])

        </div>
    </div>
    @include('shared._footer')
@endsection
