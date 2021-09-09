@extends('layouts.main')

@section('content')
<div class="card-header bg-dark text-white">
    <div class="float-end">
        <a href="/member/create" class="btn btn-primary btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
            User
        </a>
    </div>
    <h4>Table members</h4>
</div>
<div class="card-body">
    <table id="example" class="table table-dark table-striped table-hover m-2" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Upline</th>
                <th>Downline</th>
                <th>
                    <div class="float-end">
                        Action
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $d)
                <tr>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->address }}</td>
                    <td>{{ $d->phone }}</td>
                    <td>{{ $d->up_id == NULL ? "-" : $d->up->nama }}</td>
                    <td>
                        {{ $d->down1_id == NULL ? "-" : $d->down1->nama}}
                        {{ $d->down1_id != NULL && $d->down2_id != NULL ? ",".$d->down2->nama : ""}}
                    </td>
                    <td>
                        <div class="float-end">
                            <a href="#" class="btn btn-danger badge badge-pill">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="card-footer text-light bg-dark">
    <div class="float-end">
        9/9/2021
    </div>
</div>
@endsection
