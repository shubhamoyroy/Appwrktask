@extends('layouts.layout')

@section('content')
<div class="form_show">
<p class="form_heading"><span>New Transaction</span>
</p>
    @if($errors)
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach
    @endif
<form action="{{route('makeTans')}}" method="post" class="trans_form">
    @csrf
    <div class="form-group">
    <label for="t_type">Transaction Type</label>
    <select class="t_type" name="t_type" id="t_type">
        <option value="credit">Credit</option>
        <option value="debit">Debit</option>
    </select>
</div>
<div class="form-group">
    <label for="amount_col">Amount</label>
    <input type="number" class="amount_col" id="amount_col" name="amount_col">
</div>
<div class="form-group">
    <label for="des_col">description</label>
    <textarea class="des_col" id="des_col" name="des_col"></textarea>
</div>
    <input type="submit" class="submit_btn" name="submit">
</form>
<p class="success_message">
@if(session('success'))
    {{session('success')}}
@endif
<a href="{{route('showtransaction')}}" class="showfrommake">Show Transaction</a>
</div>

</div>
@endsection('content')