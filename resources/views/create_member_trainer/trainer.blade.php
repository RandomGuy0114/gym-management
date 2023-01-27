@extends('\create')

@section('member')
<h1>Trainer</h1>
    <form method="POST" class="bg-light m-2 p-3">
        @csrf
        <div class="mb-3 ">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="email1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp">
 
        </div>
        <div class="mb-3 ">
            <label for="specialization" class="form-label">Specialization</label>
            <input type="text" class="form-control" id="specialization">
        </div>
        <div class="mb-3 ">
            <label for="phone" class="form-label">Phone</label>
            <input type="number" class="form-control" id="phone" name="trainer_id">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
