@extends('template.mainLayout')

@section('body')
    <div class="choose-your-velg">
        <h4>
            Admin Page
        </h4>
        <form action="add" method="get">
            <button type="submit">Add New Velg</button>
        </form>
        <br>
        <table border='1' style="border-collapse: collapse" id="tableAdmin">
            <tr>
                <th>IMAGE</th>
                <th>NAME</th>
            </tr>
            <tr>
                <td>gambar</td>
                <td>panjenengan</td>
            </tr>
        </table>
    </div>
@endsection
