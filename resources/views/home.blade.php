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

                    <h1>Page de choix de session</h1>
                   
                    <div>
                        <button onclick="location.href='/usr1_session'">User1</button>
                        <button onclick="location.href='/usr2_session'">User2</button>
                        <button onclick="location.href='/usr3_session'">User3</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
