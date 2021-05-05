@extends('..\layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        
                        <td>
                            <button class='btn btn-danger'>
                                <a href="../user_destroy/{{ $user->id }}" class="text-white">
                                    delete
                                </a>
                            </button>
                            <button class="btn btn-primary">
                                <a href="../user_edit/{{ $user->id }}" class="text-white">
                                    edit
                                </a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
