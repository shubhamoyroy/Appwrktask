@extends('layouts.layout')

@section('content')
<div class="transshow_head">
    <p><a href="{{route('showform')}}">+Add Transaction</a></p>
</div>
<table class="trans_show">
<thead>
    <tr>
        <th>Date</th>
        <th>Description</th>
        <th>Credit</th>
        <th>Debit</th>
        <th>Running Balance</th>
    </tr>
</thead>
<tbody>
    @foreach($alltransaction as $key => $value)
<tr>
    <td>{{date($value->created_at)}}</td>
    <td>{{$value->description}}</td>
    <td>
    <?php if($value->type == "credit") {
            print_r($value->amount);
            }
            else{
            echo "--";
            } ?>
    </td>
    <td>
<?php if($value->type == "debit") {
            print_r($value->amount);
            }
            else{
            echo "--";
            } ?>
    </td>
    <td>{{$value->running_balance}}</td>
</tr>
@endforeach
</tbody>
</table>

@endsection('content')