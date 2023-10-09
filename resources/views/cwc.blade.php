@extends('layouts.semi')

@section('content')
    
    <section class="mx-4">
        <h3 class="text-center text-dark fw-bold mb-4">Current Central Working Committee</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>CWC Post</th>
                    <th>Name</th>
                    <th>Office Bearer</th>
                </tr>
            </thead>
            <tbody>
                @foreach (\App\Models\Member::all() as $member)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $member->post }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->office_bearer }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </section>

@endsection