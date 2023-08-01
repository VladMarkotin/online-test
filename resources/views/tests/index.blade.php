@extends('layouts.app')

@section ('content')
  @foreach ($tests as $v)
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$v->subject}}</h5>
      @if ($v->type == 3)
      <h6 class="card-subtitle mb-2 text-muted">Exam</h6>
      @elseif ($v->type == 2)
      <h6 class="card-subtitle mb-2 text-muted">Offset</h6>
      @else
      <h6 class="card-subtitle mb-2 text-muted">Test</h6>
      @endif
      <a href= "{{ route('show', ['id' => $v->id]) }}" class="card-link">Do it!</a>
    </div>
  </div>
  @endforeach
@endsection