<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    form {
        width: 60%;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 2px;
        margin: auto;
    }
</style>

<body>


    @if (Session::has('message'))
        <div class="m-auto">
            <span class="alert alert-success">
                {{ Session::get('message') }}
            </span>
        </div>
    @endif

    <form method="post" action="{{ url('/item/create') }}">

        @csrf
        {{-- @csrf is used for form security, to work against cross site request forgery --}}
        <h1>create Item</h1>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Title</label>
                <input name="title" type="text" class="form-control" id="inputforname" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Creator</label>
                <select name="user_id" id="" class="form-control">
                    <option value="">Select Created</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Price</label>
                <input name="price" type="text" class="form-control" id="inputPassword4" placeholder="Price">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-5">Create Item</button>
    </form>

</body>

</html>
