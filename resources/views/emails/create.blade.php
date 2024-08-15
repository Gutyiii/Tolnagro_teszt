@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Új Email Létrehozása</h1>
    <form action="{{ route('emails.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="subject">Tárgy</label>
            <input type="text" id="subject" name="subject" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="body">Tartalom</label>
            <textarea id="body" name="body" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Mentés</button>
    </form>
</div>
@endsection
