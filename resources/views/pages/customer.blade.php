

@if (count($showCustomer))
@foreach ($showCustomer as $customer)
{{$customer}}
@endforeach 
@else
  No Custmoer yet
@endif