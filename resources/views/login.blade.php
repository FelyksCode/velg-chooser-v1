@extends('template.mainLayout')
@section('body')
    <div class="frame1-container">
        <div class="frame1">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h1>Login</h1>
            <form action="adminpage" method="POST">
                @csrf
                <div>
                    Username
                    <input type="text" name="username">
                </div><br>
                <div>
                    Password
                    <input type="password" name="password">
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
@endsection
