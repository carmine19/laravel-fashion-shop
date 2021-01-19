@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Vestiti e taglie</h1>

                <ul>
                    @foreach($dresses as $ele)
                    <li><a href="">{{$ele->nome}} - {{$ele->taglia}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
