@extends('layouts.admin')

@section('content')
    <h2>Progetti</h2>


    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    {{-- messaggio errore se gia c'è --}}
    @if(session('error'))
    <div class="alert alert-danger" role="alert">
        {{session('error')}}
      </div>
    @endif
{{-- messaggio di successo --}}
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>
    @endif

    {{-- route corretta {{route('admin.Project.store')}} --}}
    <div class="my-4">
        <form action="{{route('admin.Project.store')}}" method="POST" class="d-flex">
            @csrf
            <input class="form-control me-2" name="title" type="input" placeholder="New Project" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">invia</button>
        </form>
    </div>
    <table class="table crud-table">
        <thead>
          <tr>
            <th scope="col">id progetto</th>
            <th scope="col">nome</th>
          </tr>
        </thead>
        <tbody>
            {{-- @foreach ( $projects as $category ) --}}

            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>
                    <a href="#">View</a>
                    <a href="#">Edit</a>
                    <form action="#" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
