@extends('layouts.main')

@section('content')
<div class="card-header bg-dark text-white px-4 py-3">
    <h1>Add New Member</h1>
</div>
<div class="card-body px-4 py-4">
    <form method="POST" action="/member">
        @csrf
        <div class="mb-4">
            <label for="nama" class="form-label">Nama : </label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="address" class="form-label">Address : </label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}">
            @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="phone" class="form-label">Phone : </label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
            @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="upline" class="form-label">Upline : </label>
            <select class="form-select form-select-lg mb-3 @error('up_id') is-invalid @enderror" id="upline" aria-label=".form-select-lg example" name="up_id">
                <option selected disabled>Select your upline</option>
                @foreach($members as $d)
                    @if($d->down1_id == NULL || $d->down2_id == NULL)
                        <option value="{{ $d->id }}" {{ ( old("up_id") == $d->id ? "selected":"") }}>
                            {{ $d->nama }}
                        </option>
                    @else
                        <option value="{{ $d->id }}" disabled>
                            {{ $d->nama }} <span class="fs-6">(Already full)</span>
                        </option>
                    @endif
                @endforeach
            </select>
        </div>
        <div>
            <div class="d-grid gap-2">
                <input type="submit" value="Create New Member" class="btn btn-primary mb-2">
                <a href="/" class="btn btn-dark">BACK</a>
            </div>
        </div>
    </form>
</div>
@endsection
