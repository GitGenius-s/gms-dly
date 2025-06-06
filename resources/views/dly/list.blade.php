@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>dly_name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dlyTypes as $index => $dlyType)
                <tr>
                    <td>{{ $dlyType->id }}</td>
                    <td>{{ $dlyType->dly_name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection