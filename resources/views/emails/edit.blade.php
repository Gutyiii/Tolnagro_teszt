@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Email Szerkesztése</h1>
    <form action="{{ route('emails.update', $email->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="subject">Tárgy</label>
            <input type="text" id="subject" name="subject" class="form-control" value="{{ old('subject', $email->subject) }}" required>
        </div>
        <div class="form-group">
            <label for="body">Tartalom</label>
            <textarea id="body" name="body" class="form-control" rows="4" required>{{ old('body', $email->body) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Mentés</button>
    </form>
</div>
@endsection
