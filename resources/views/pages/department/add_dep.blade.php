@extends('components.layout.main')
@section('extrajs')

                            




@section('content')
<div class="container-fluid"> 
 
 
</div>
<div class="container-fluid" style="margin:1%; padding:1%; width:98%; margin-top: 2%; background-color: white;">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="c-table-responsive@desktop"> 
                <table class="c-table">
                    <caption class="c-table__title">
                        Add Department
                    </caption>
                    
                    
                </table>
                <form method="post" action="{{URL::route('saveform')}}">  
                    @csrf
                    <div class="row"> 
                        <div class="col-lg-4 col-md-4 u-mb-medium">
                            <div class="c-field">
                                <label class="c-field__label">Department</label>
                                <input class="c-input c-input--info" type="text" name="department">
                            </div>
                        </div>                   
                    </div> 
                    <div class="col-sm-12 col-md-12 u-mb-medium">
                        <span class="c-divider u-mv-medium"></span>
                    </div>
                    <div class="col-sm-2 col-md-2 u-mb-medium">
                        <div class="c-field">
                            <div class="col u-mb-medium">
                                <button class="c-btn c-btn--info">Save</button>
                            </div>
                        </div>
                    </div> 
                </form>  
            </div>
        </div>
    </div>
</div>
@endsection
@endsection
