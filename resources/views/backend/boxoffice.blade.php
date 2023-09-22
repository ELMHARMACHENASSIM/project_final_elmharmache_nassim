@extends('backend.adindex')
@section('admincontent')
<section class="mt-5">
    <div class="container pt-5">
        <div class="d-flex justify-content-between align-content-center">
            <h2>boxoffie</h2>
      
        </div>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">message</th>
                    <th scope="col">subject</th>



                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                  
                        <tr>
                            <th scope="row">{{ $contact->id }}</th>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>{{ $contact->subject }}</td>


                        </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>

@endsection