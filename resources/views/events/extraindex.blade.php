<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('nerds') }}">View events</a></li>
        <li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
    </ul>
</nav>

<h1>All the events</h1>

<!-- will be used to show any messages -->
<!-- @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif -->

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Name</td>
            <td>Description</td>
            <td>Date</td>
            <td>Location</td>
            <td>Contact</td>
        </tr>
    </thead>
    <tbody>
    @foreach($program as $key => $value)
        <tr>
            <td>{{ $value->name }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->date }}</td>
            <td>{{ $value->location }}</td>
            <td>{{ $value->contact }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <!-- <a class="btn btn-small btn-success" href="{{ URL::to('nerds/' . $value->id) }}">Show this Nerd</a> -->

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <!-- <a class="btn btn-small btn-info" href="{{ URL::to('nerds/' . $value->id . '/edit') }}">Edit this Nerd</a> -->

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>