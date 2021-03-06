@extends('backend.index')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ Config::get('settings.admin_path') }}">{{ __('p2p.Control Panel') }}</a>
        </li>
        <li class="breadcrumb-item active">{{ __('p2p.All System depoists.') }}</li>
    </ol>
    <div class="row">
        <div class="col-lg-12">
            
            
        
            
            <h3>{{ __('p2p.Recent Deposits ') }} </h3>
            <table class="table   table-hover " >
  <tr> 
     <td>{{ __('p2p.txn ID ') }} </td>
     <td>{{ __('p2p.Coin') }}</td> 
     <td>{{ __('p2p.Amount') }}</td>
     <td>{{ __('p2p.User ID') }}</td>
     
       <td>{{ __('p2p.Deposit  Address') }}</td>
         <td>{{ __('p2p.Creation Time') }}</td>
         <td>{{ __('p2p.Update Time') }}</td>  <td>{{ __('p2p.Status') }}</td>
     </tr> 
 
@foreach ($deposits as $dt)
    <tr>  
    <td>  <a href="/admin/deposit/{{ $dt->id }}" > {{ $dt->id }}</a></td>
    <td>   {{ $dt->coin }}</td>
    <td>   {{ $dt->amount }}</td> 
    <td>   {{ $dt->user_id }}</td>  
    
    <td>   {{ $dt->deposit_address }}</td>  
   
    <td>   {{ $dt->created_at }}</td>  
    <td>   {{ $dt->updated_at }}</td>  
    <td>   {{ $dt->status }}</td>  
    
    </tr>
    
    
@endforeach

</table>
  
        </div>
    </div>
@endsection