@extends('layouts.app')
@section('content')
    <div class="mdc-top-app-bar--fixed-adjust">
        <div class="mdc-card mdc-card--outlined mdc-elevation--z23" style="width:50%;margin:0 auto;">
            <div class="mdc-card__primary--outlined" tabindex="0">            
                <div class="article__title animatable js-anim-trigger anim-appear">
                    <h1 class="mdc-typography--headline6">{{$todo->name}}</h1>
                </div>
                {{$todo->description}}
            </div>
        </div>
    </div>
@endsection