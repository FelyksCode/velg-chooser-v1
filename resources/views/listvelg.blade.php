@extends('template.mainLayout')
@section('body')
    <div class="choose-your-velg">
        <h4>
            List VELG
        </h4>
        <div class="complete-our-quiz">
            <table border='1' style="border-collapse: collapse">
                <tr>
                    <th>IMAGE</th>
                    <th>NAME</th>
                </tr>
                <tr>
                    <td>
                        {{-- gambar velg dari datbes --}}
                        <img src="{{ asset('images/velg1.png') }}" alt="Image 1" class="image">

                    </td>
                    <td>
                        {{-- Deskripsi Velg dari datbes --}}
                        VELG 1
                    </td>
                </tr>
                <tr>
                    <td>

                        <img src="{{ asset('images/velg2.png') }}" alt="Image 2" class="image">
                    </td>
                    <td>VELG 2</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
