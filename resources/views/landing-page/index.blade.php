@extends('../layouts/app')

@section('content')
    <h1>
        Hello 
        @if ($sex === 'Male')
            Mr.
        @else
            Ms. 
        @endif
        {{$name}}!        
    </h1>        
@endsection