{{-- estensione del layout --}}

@extends ('layouts.comic-layout')

@section('content')

  <ol>
      @foreach($comic as $comic)
          <li>
              <ul>
                  <li>{{ $comic-> title }}</li>
                  <li>{{ $comic-> author }}</li>
                  <li>{{ $comic-> year }}</li>
                  <li>{{ $comic-> review }}</li>
                  <li>{{ $comic-> vote }}</li>
              </ul>
          </li>
          <br>
      @endforeach
  </ol>

@endsection
