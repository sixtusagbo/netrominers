@extends('layouts.admin')

@section('content')
    <div class="row g-4 mb-4">
        <div class="col-12 col-lg-12">
            <div class="card border-0 shadow">
                <div class="card-header p-3 d-flex justify-content-between">
                    <h5 class="card-title">Members ({{ $users->count() }})</h5>
                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#createUserModal">Create</button>
                </div>

                <div class="card-body">

                    <div class="table-responsive rounded mb-2">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th class="border-0 rounded-start">Username</th>
                                    <th class="border-0">Email</th>
                                    <th class="border-0">Full Name</th>
                                    <th class="border-0">Referred By:</th>
                                    <th class="border-0 rounded-end">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="item">{{ $user->username }}</td>
                                        <td class="item">{{ $user->email }}
                                        </td>
                                        <td class="item">{{ $user->name }}</td>
                                        <td class="item">
                                            {{ $user->referrer ? $user->referrer->username : 'Nobody' }}</td>
                                        <td class="item">
                                            <a href="" data-bs-toggle="modal" class="btn btn-danger"
                                                data-bs-target="#deleteUser{{ $user->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                </svg>
                                            </a>
                                            <a href="{{ route('controls.edit', $user->id) }}" class="btn btn-purple">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-sliders2" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M10.5 1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4H1.5a.5.5 0 0 1 0-1H10V1.5a.5.5 0 0 1 .5-.5ZM12 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-6.5 2A.5.5 0 0 1 6 6v1.5h8.5a.5.5 0 0 1 0 1H6V10a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5ZM1 8a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2A.5.5 0 0 1 1 8Zm9.5 2a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V13H1.5a.5.5 0 0 1 0-1H10v-1.5a.5.5 0 0 1 .5-.5Zm1.5 2.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>



                                    <!-- Delete User -->
                                    <div class="modal fade" id="deleteUser{{ $user->id }}" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-primary">Delete User</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="DeleteUserModalBody">
                                                    <p>
                                                        Are you sure you wish to delete
                                                        "{{ $user->name }}"?
                                                    </p>
                                                    <form method="POST" action="{{ route('controls.destroy', $user->id) }}"
                                                        id="deleteUser">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">No</button>
                                                            <button type="submit"
                                                                class="btn btn-danger btn-md font-weight-medium auth-form-btn">
                                                                Yes
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Delete User -->
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

                <!-- Create User -->

                <!-- User -->
            </div>
        </div>
    </div>
    <!--//row-->
@endsection
