@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('emails.create') }}" class="btn btn-primary">Új Email</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Tárgy</th>
                <th>Tartalom</th>
                <th>Küldések száma</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @forelse($emails as $email)
                <tr>
                    <td>{{ $email->subject }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($email->body, 50) }}</td> <
                    <td>{{ $email->sent_count }}</td>
                    <td>
                        <form action="{{ route('emails.destroy', $email->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Biztosan törölni szeretné ezt az e-mailt?');">Törlés</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Nincsenek e-mailek.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
