
<h4 class="groupTitle">Specific Information</h4>
<div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="make">{{ trans('backend_form.collateral_info.make') }}</label>
            {!!
                Form::text('make',
                null,
                [
                'id'=>'make',
                'class'=>'form-control removeValidation make',
                'data-original-title'=> trans('backend_form.collateral_info.make'),
                'placeholder'=> trans('backend_form.collateral_info.make'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="year_of_manufacture">{{ trans('backend_form.collateral_info.year_of_manufacture') }}</label>
            {!!
                Form::text('year_of_manufacture',
                null,
                [
                'id'=>'year_of_manufacture',
                'class'=>'form-control removeValidation year_of_manufacture',
                'data-original-title'=> trans('backend_form.collateral_info.year_of_manufacture'),
                'placeholder'=> trans('backend_form.collateral_info.year_of_manufacture'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="chasis_number">{{ trans('backend_form.collateral_info.chasis_number') }}</label>
            {!!
                Form::text('chasis_number',
                null,
                [
                'id'=>'chasis_number',
                'class'=>'form-control removeValidation chasis_number',
                'data-original-title'=> trans('backend_form.collateral_info.chasis_number'),
                'placeholder'=> trans('backend_form.collateral_info.chasis_number'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="registration_number">{{ trans('backend_form.collateral_info.registration_number') }}</label>
            {!!
                Form::text('registration_number',
                null,
                [
                'id'=>'registration_number',
                'class'=>'form-control removeValidation registration_number',
                'data-original-title'=> trans('backend_form.collateral_info.registration_number'),
                'placeholder'=> trans('backend_form.collateral_info.registration_number'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

</div> 
<div class="row">
    
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="model">{{ trans('backend_form.collateral_info.model') }}</label>
            {!!
                Form::text('model',
                null,
                [
                'id'=>'model',
                'class'=>'form-control removeValidation model',
                'data-original-title'=> trans('backend_form.collateral_info.model'),
                'placeholder'=> trans('backend_form.collateral_info.model'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="engine_number">{{ trans('backend_form.collateral_info.engine_number') }}</label>
            {!!
                Form::text('engine_number',
                null,
                [
                'id'=>'engine_number',
                'class'=>'form-control removeValidation engine_number',
                'data-original-title'=> trans('backend_form.collateral_info.engine_number'),
                'placeholder'=> trans('backend_form.collateral_info.engine_number'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

    
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="color">{{ trans('backend_form.collateral_info.color') }}</label>
            {!!
                Form::select('color',
                [],
                [
                'id'=>'color',
                'class'=>'form-control removeValidation color',
                'data-original-title'=> trans('backend_form.collateral_info.color'),
                'placeholder'=> trans('backend_form.collateral_info.color'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

</div>

Key_value Pair:

'make'                => 'Make',
'year_of_manufacture' => 'Year of manufacture',
'chasis_number'       => 'Chasis Number',
'registration_number' => 'Registration Number',
'model'               => 'Model',
'engine_number'       => 'Engine Number',
'color'               => 'Color'



