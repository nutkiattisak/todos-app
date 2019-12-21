@extends('layouts.app')
@section('content')
<div class="mdc-top-app-bar--fixed-adjust">
  <div class="mdc-card mdc-card--outlined mdc-elevation--z23" style="width:70%;margin:0 auto;">
    <div class="mdc-card__primary--outlined" tabindex="0">            
      <div class="article__title animatable js-anim-trigger anim-appear">
          <h1 class="mdc-typography--headline2">TODO</h1>
      </div>
      <ul class="mdc-list mdc-list--two-line">
        @foreach($todos as $todo)
        
        <li class="mdc-list-item">
        
          <span class="mdc-list-item__text">
          <a href="/todos/show/{{ $todo->id }}">
            <span class="mmdc-list-item__primary-text">{{ $todo->name }}</span>
            </a>    
              <span class="mdc-list-item__secondary-text">{{ $todo->created_at}}</span>
          </span>  
               
          <a href="/todos/{{ $todo->id}}/edit" class="mdc-list-item__meta material-icons" aria-hidden="true">edit</a>
          <a href="/todos/{{ $todo->id}}/delete" class="material-icons" aria-hidden="true">delete</a>
        </li>
       
        @endforeach
      </ul>      
    </div>
  </div>
</div>
@endsection