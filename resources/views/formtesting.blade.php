
@if($errors)
@foreach($errors as $error)
    {{ $error }}
@endforeach
@endif
{!! Form::open(['url'=>'store','action'=>'','method'=>'']) !!}
<h4 class="groupTitle">Specific Information</h4>
<div class="row">
     <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="type">{{ trans('backend_form.collateral_info.type') }}</label>
            {!!
                Form::text('type',
                null,
                [
                'id'=>'type',
                'class'=>'form-control removeValidation type',
                'data-original-title'=> trans('backend_form.collateral_info.type'),
                'placeholder'=> trans('backend_form.collateral_info.type'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

   <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="quanitity_in_gms">{{ trans('backend_form.collateral_info.quanitity_in_gms') }}</label>
            {!!
                Form::text('quanitity_in_gms',
                null,
                [
                'id'=>'quanitity_in_gms',
                'class'=>'form-control removeValidation quanitity_in_gms',
                'data-original-title'=> trans('backend_form.collateral_info.quanitity_in_gms'),
                'placeholder'=> trans('backend_form.collateral_info.quanitity_in_gms'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">  
           <label class="sr-only" for="carat">{{ trans('backend_form.collateral_info.carat') }}</label>
            {!!
                Form::text('carat',
                null,
                [
                'id'=>'carat',
                'class'=>'form-control removeValidation carat',
                'data-original-title'=> trans('backend_form.collateral_info.carat'),
                'placeholder'=> trans('backend_form.collateral_info.carat'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="basis_of_valuation">{{ trans('backend_form.collateral_info.basis_of_valuation') }}</label>
            {!!
                Form::select('basis_of_valuation',
                 [],
                [
                'id'=>'basis_of_valuation',
                'class'=>'form-control removeValidation basis_of_valuation',
                'data-original-title'=> trans('backend_form.collateral_info.basis_of_valuation'),
                'placeholder'=> trans('backend_form.collateral_info.basis_of_valuation'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>
    
    {!! Form::label('email','email-address') !!}
    {!! Form::text('email',null) !!}
    {!! Form::label('password','Enter password') !!}
    {!! Form::password('password',null) !!}
    {!! Form::email('email','m@abc') !!}
    {!! Form::file('mfile') !!}
    {!! Form::checkbox('gender','male') !!}
    {!! Form::label('language','language')!!}
    {!! Form::radio('language','hindi',false) !!}
    {!! Form::number('n','num') !!}
    {!! Form::selectMonth('month') !!}
    {!! Form::selectRange('number', 10, 20) !!}
</div> 
{!! $errors->first('type',"<li class='text-danger'>:message</li>") !!}
{!! $errors->first('basis_of_valuation',"<li class='text-danger'>:message</li>") !!}

{!! Form::submit('submit') !!}

{!! Form::close()  !!}

@foreach($errors->all() as $error)
 {{ $error }} &nbsp;
@endforeach
