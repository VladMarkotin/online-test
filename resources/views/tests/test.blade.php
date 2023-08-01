@extends('layouts.app')

@section ('content')
    
  @foreach ($tasks as $v)
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$v->question}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">
          <div> 
        @foreach ($v->options as $k => $v)
            @foreach($v as $i => $val)
            <div>
                <input type="checkbox" data-id="{{$i}}" value="{{$i}}">{{$val}}</li>
            </div>
            @endforeach 
            <button class="btn btn-primary">Ответить</button>   
        @endforeach
        </div>
      </h6>
      
      <a href="#" class="card-link">!</a>
    </div>
  </div>
  @endforeach
@endsection