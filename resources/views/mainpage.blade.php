@extends('template.mainLayout')
@section('body')
    <div class="choose-your-velg">Choose Your VELG</div>
    <div class="frame1-container">
        <div class="frame1">
            <b class="velg-quiz">VELG QUIZ !!</b>
            <div class="complete-our-quiz">
                Complete our quiz to find exactly what you need. Plus unlock a bonus
                at the end.
            </div>
            <div id="quiz-questions-container">
                <div id="quiz-box">
                    <form action="#" onsubmit="return changeQuestion()">
                        <div id="question">
                            <b>Merk Velg</b>
                        </div>
                        <table id="table">
                            <tr>
                                <td>
                                    <input type="checkbox" name="ssw" value="ssw">
                                </td>
                                <td>
                                    <label>SSW</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="jf" value="jf">
                                </td>
                                <td>
                                    <label>JF</label>
                                </td>
                            </tr>
                        </table>
                        <button type="submit">NEXT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
