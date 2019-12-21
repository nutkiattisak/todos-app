@extends('layouts.app')
@section('title', 'Edit')
@section('content')
<div class="mdc-top-app-bar--fixed-adjust">
        <div class="mdc-card mdc-card--outlined mdc-elevation--z23" style="width:50%;margin:0 auto;">
            <div class="mdc-card__primary--outlined" tabindex="0">            
                <div class="article__title animatable js-anim-trigger anim-appear">
                    <h1 class="mdc-typography--headline6" style="text-align:center;">Edit Todo</h1>
                </div>
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        {{$error}}
                    @endforeach
                @endif
            <form action="/todos/{{$todo->id}}/update-todos" method="POST">
                @csrf
                
                    <div class="text-field-row text-field-row-fullwidth">
                        <div class="text-field-container">
                            <div class="mdc-text-field text-field mdc-text-field--fullwidth mdc-text-field--no-label mdc-ripple-upgraded" style="--mdc-ripple-fg-size:720px; --mdc-ripple-fg-scale:1.68237; --mdc-ripple-fg-translate-start:-225.5px, -325.781px; --mdc-ripple-fg-translate-end:240px, -332px;">
                            <input type="text" name="name" id="text-field-fullwidth-helper" placeholder="Standard" class="mdc-text-field__input" 
                            aria-label="Text field aria label" value="{{ $todo->name}}">
                            </div>
                        
                        </div>
                    </div>
                    <div class="text-field-row text-field-row-fullwidth">
                        <div class="text-field-container">
                            <div class="mdc-text-field text-field mdc-text-field--fullwidth mdc-text-field--no-label mdc-text-field--textarea">
                                <textarea name="description" id="text-field-fullwidth-textarea-helper" class="mdc-text-field__input">{{$todo->description}}</textarea>
                                <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                    <div class="mdc-notched-outline__leading">
                                </div>
                                <div class="mdc-notched-outline__notch" style="">
                                    <label class="mdc-floating-label" for="text-field-fullwidth-textarea-helper" style=""></label>
                                </div>
                                <div class="mdc-notched-outline__trailing">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit">บันทึก</button>
                </form>
                </div>
            </div>
        </div>
    </div>

@endsection