@extends('layouts.admin')

@section('content')
    <div class="row g-4 mb-4">
        <div class="col-12 col-lg-12">
            <div class="card border-0 shadow">
                <div class="card-header p-3 pb-0">
                    <h5 class="card-title">Members ({{ $users->count() }})</h5>
                </div>
                <!--//card-header-->
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
                                @forelse ($users as $user)
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
                                                Delete
                                            </a>
                                        </td>
                                    </tr>

                                    <!--Delete User-->
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
                                    <!--//Delete User-->
                                @empty
                                    <div class="alert alert-warning" role="alert">
                                        Admin please run your migrations!
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{ $users->links() }}

                </div>
                <!--//card-body-->

            </div>
        </div>
    </div>
    <!--//row-->
@endsection
