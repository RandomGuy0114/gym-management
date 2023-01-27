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
      <tr>
        <th scope="row " class="text-center">1</th>
        <td class="text-center">Mark</td>
        <td class="text-center">Otto</td>
        <td class="text-center">easy</td>
        <td class="text-center">01-12-24</td>
        <td class="text-center">Jose</td>
     
      </tr>
    
    </tbody>
  </table>
@endsection