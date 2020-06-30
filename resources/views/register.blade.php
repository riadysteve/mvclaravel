@extends('htmltemplate.layout')

@section('title', 'Form Signup')

@section('content')
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

    <form action="/welcome" method="post">
        @csrf

        <div>
            <p>First Name:</p>
            <input type="text" id="firstName" name="firstname">
        </div>



        <div>
            <p>Last Name:</p>
            <input type="text" id="lastName" name="lastname">
        </div>

        <div>
            <p>Gender :</p>
            <input type="radio"> Male
            <br>
            <input type="radio"> Female
            <br>
            <input type="radio"> Other
        </div>

        <div>
            <p>Nationality :</p>
            <select>
                <option value="">Indonesian</option>
                <option value="">Singaporean</option>
                <option value="">Malaysian</option>
                <option value="">Australian</option>
            </select>
        </div>

        <div>
            <p>Language Spoken :</p>
            <input type="checkbox" name="" id=""> Bahasa Indonesia
            <br>
            <input type="checkbox"> English
            <br>
            <input type="checkbox" name="" id=""> Other
        </div>

        <div>
            <p>Bio :</p>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>

        <button type="submit">Sign Up</button>

    </form>
@endsection