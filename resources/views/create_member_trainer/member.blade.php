@extends('\create')

@section('member')
<h1>Member</h1>
@if (session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif
    <form method="POST" action="{{ route('add_member') }}" class="bg-light m-2 p-3">
        @csrf
        <div class="mb-3 ">
            <label for="exampleInputName" class="form-label">Name:</label>
            <input type="text" class="form-control" id="exampleInputName" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3 ">
            <label for="exampleInputMembershipType" class="form-label">Membership Type</label>
            <input type="text" class="form-control" id="exampleInputMembershipType" name="membershipType">
        </div>
        <div class="mb-3 ">
            <label for="exampleInputMemberExpirationDate" class="form-label">Membership Expiration Date</label>
            <input type="date" class="form-control" id="exampleInputMemberExpirationDate" name="membershipExpirationDate">
        </div>
        <div class="mb-3 ">
            <label for="exampleInputMemberExpirationDate" class="form-label">Trainer Id</label>
            <input type="number" class="form-control" id="exampleInputMemberExpirationDate" name="trainerId">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
