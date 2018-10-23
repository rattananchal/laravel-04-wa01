@extends('layouts.default')

@section('content')

    <div class="mt-5">

        <h3>Contact</h3>
    </div>

    <div class = "card mt-3 pl-2 pl-2" >
        <div class = "card-title">

    <form role ="form" id = "contact-form" action = "{{route("contact.store")}}" method="POST" class = "contact-form">
        {{(csrf_field())}}


        <div class="form-group">
            <label for="name">Name</label>
            <input name ="name" type="text" class="form-control" id="name" placeholder="FirstName">
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input name ="email" type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="body">Example textarea</label>
            <textarea name ="body" class="form-control" id="body" rows="3" placeholder="Please type your message here"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>

        </div>
    </div>



@endsection
