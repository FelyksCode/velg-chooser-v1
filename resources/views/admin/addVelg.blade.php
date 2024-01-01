@extends('template.mainLayout')
@section('body')
    <div id="formVelg">
        <form action="storeVelg" method="post">
            @csrf
            <div id="divFormVelg">
                Nama Velg: <input id="inputFormVelg" type="text" name="name">
            </div><br>
            <div id="divFormVelg">
                Merk Velg: <input id="inputFormVelg" type="text" name="merk">
            </div><br>
            <div id="divFormVelg">
                Ukuran Velg: <input id="inputFormVelg" type="text" name="ukuran">
            </div><br>
            <div id="divFormVelg">
                Bolongan Velg: <input id="inputFormVelg" type="text" name="bolongan">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
