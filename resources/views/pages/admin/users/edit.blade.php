@extends('layouts.main')

@section('content')
<div class="page-header">
    <h3 class="page-title">Create Users</h3>
    <a href="{{ route('users.index') }}" class="btn btn-primary"><i class="fa fa-arrow-left"> Back</i></a>
</div>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="{{ route('users.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $item->name }}"
                            placeholder="Name" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{ $item->email }}"
                            placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Role</label>
                        <select class="form-control" name="role">
                            <option value="admin" @if (old('role', $item->role) === 'admin') selected @endif>Admin
                            </option>
                            <option value="pembimbing" @if (old('role', $item->role) === 'pembimbing') selected
                                @endif>Pembimbing
                            </option>
                            <option value="siswa" @if (old('role', $item->role) === 'siswa') selected @endif>Siswa
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
