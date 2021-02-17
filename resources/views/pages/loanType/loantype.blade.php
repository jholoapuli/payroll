@extends('components.layout.main')
@section('content')


<div class="container-fluid"> 
 
    Loan Type
</div>
<div class="container-fluid" style="margin:1%; padding:1%; width:98%; margin-top: 2%; background-color: white;">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="c-table-responsive@desktop"> 
                <table class="c-table">
                    <caption class="c-table__title">
                        Loan Type
                    </caption>
                    <thead class="c-table__head c-table__head--slim">
                        <tr class="c-table__row">
                            <th class="c-table__cell c-table__cell--head"></th>
                            <th class="c-table__cell c-table__cell--head">Loan Type</th> 
                            <th class="c-table__cell c-table__cell--head">Description</th> 
                            
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($loantype as $x)
                            <tr class="c-table__row"> 
                                <td class="c-table__cell">{{$x -> id}}</td>  
                                <td class="c-table__cell">{{$x -> type}}</td>  
                                <td class="c-table__cell">{{$x -> description}}<b></b></td>   
                                <td class="c-table__cell">{{$x -> updated_at}}</td>  
                                <td class="c-table__cell">
                                    <div class="c-dropdown dropdown">
                                        <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                            
                                            <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton21">
                                                <a class="c-dropdown__item dropdown-item" href="{{URL::route('update_form',$x->id)}}">Update</a> 
                                                <a class="confirm c-dropdown__item dropdown-item" href="{{URL::route('delete_data',$x->id)}}">Delete</a>
                                            </div>
                                    </div>
                                </td>
                                @endforeach
                            </tr>  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
                            


@endsection
@section('extrajs')


@endsection