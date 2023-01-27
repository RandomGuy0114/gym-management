@extends('layout')
@section('content')
<table class="table table-light table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col" class="text-center">id</th>
        <th scope="col" class="text-center">Name</th>
        <th scope="col" class="text-center">Email</th>
        <th scope="col" class="text-center">Membership Type</th>
        <th scope="col" class="text-center">Membership Expiration Date</th>
        <th scope="col" class="text-center">Trainer</th>
      </tr>
    </thead>
    <tbody>
      @if (count($members) > 0)
      @foreach ($members as $member)
          <tr>
              <th scope="row">{{ $member->id }}</th>
              <td>{{ $member->name }}</td>
              <td>{{ $member->email }}</td>
              <td>{{ $member->membership_type }}</td>
              <td>{{ $member->membership_expiration_date }}</td>
              <td>{{ $member->trainer_id }}</td>

          </tr>
      @endforeach
  @else
      <tr>
          <td colspan="4" class="text-center"> No member yet.</td>
      </tr>
  @endif
    
    </tbody>
  </table>
  
@endsection