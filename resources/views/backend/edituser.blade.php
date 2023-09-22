@extends('backend.adindex')
@section('admincontent')
    <section class="mt-5">
        <div class="container pt-5">
            <div class="d-flex justify-content-between align-content-center">
                <h2>users</h2>
          
            </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">role</th>
                        <th scope="col">edit role</th>



                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        @if (!$user->hasRole('admin'))
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                    <td class="d-flex justify-content-center align-items-start flex-column">
                                        @foreach ($user->roles as $role)
                                        <p>{{ $role->name }}</p>
                                        @endforeach

                                    </td>


                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop{{ $user->id }}">
                                        edit role
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop{{ $user->id }}" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdrop{{ $user->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5"
                                                        id="staticBackdrop{{ $user->id }}Label">update</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action={{ route('user.editRole', $user->id) }} method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div
                                                            class="mb-3 d-flex justify-content-center align-items-center gap-5">
                                                            <select class="form-select" aria-label="Default select example"
                                                                name="name" id="name">
                                                                <option selected>role</option>
                                                                @foreach ($roles as $role)
                                                                    <option value={{ $role->name }}>{{ $role->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        @endif
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>
@endsection
