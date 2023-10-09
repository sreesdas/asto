@extends('layouts.semi')

@section('content')
    
    <section class="mx-4">
        <h3 class="text-center text-dark fw-bold mb-4">CWC Committees</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Committee </th>
                    <th>Members</th>
                    <th>Objective</th>
                </tr>
            </thead>
            <tbody>
                @foreach (\App\Models\Committee::all() as $member)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $committee->post }}</td>
                        <td></td>
                        <td>{{ $committee->objective }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </section>

@endsection