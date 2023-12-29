@extends('template.mainLayout')
@section('quiz')
    <div class="frame1">
        <b class="velg-quiz">VELG QUIZ !!</b>
        <div class="complete-our-quiz">
            Complete our quiz to find exactly what you need. Plus unlock a bonus
            at the end.
        </div>
        <div id="quiz-questions-container">
            <div id="quiz-box">
                <img src="{{ asset('images/velg1.png') }}" alt="Image 1" class="image">
                <img src="{{ asset('images/velg2.png') }}" alt="Image 2" class="image">
            </div>
        </div>
    </div>
@endsection
