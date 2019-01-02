@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Page de choix du type de compte</h1>
                    <form action="/traitement" method="GET">
                        <div  style="display: flex;">
                            <p>
                                <img src="avatar_1" alt="avatar"><br>
                                <input type="radio" name="user" value="1" checked > User 1
                            </p>
                            <p>
                                <img src="avatar_2" alt="avatar"><br>
                                <input type="radio" name="user" value="2"> User 2
                            </p>
                            <p>
                                <img src="avatar_2" alt="avatar"><br>
                                <input type="radio" name="user" value="3"> User 3
                            </p>
                        </div>
                        <div>
                            <input type="submit" value="Validez">
                        </div>
                    </form>
                    <div>
                        <input type="submit" value="Back">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
