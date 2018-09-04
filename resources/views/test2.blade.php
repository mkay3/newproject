
<h4 class="groupTitle">Specific Information</h4>
<div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
          
           <label class="sr-only" for="machinery_desc">{{ trans('backend_form.collateral_info.machinery_desc') }}</label>
            {!!
                Form::text('machinery_desc',
                null,
                [
                'id'=>'machinery_desc',
                'class'=>'form-control removeValidation machinery_desc',
                'data-original-title'=> trans('backend_form.collateral_info.machinery_desc'),
                'placeholder'=> trans('backend_form.collateral_info.machinery_desc'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                'minlength'=>3,
                'maxlength'=>100
                ]
            )
            !!}
            
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="make"> {{ trans('backend_form.collateral_info.make') }} </label>
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
            <label class="sr-only" for="serial_number">{{ trans('backend_form.collateral_info.serial_number') }}</label>
            {!!
                Form::text('serial_number',
                null,
                [
                'id'=>'serial_number',
                'class'=>'form-control removeValidation serial_number',
                'data-original-title'=> trans('backend_form.collateral_info.serial_number'),
                'placeholder'=> trans('backend_form.collateral_info.serial_number'),
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
            <label class="sr-only" for="year_of_manufact">{{ trans('backend_form.collateral_info.year_of_manufact') }}</label>
            {!!
                Form::text('year_of_manufact',
                null,
                [
                'id'=>'serial_number',
                'class'=>'form-control removeValidation year_of_manufact',
                'data-original-title'=> trans('backend_form.collateral_info.year_of_manufact'),
                'placeholder'=> trans('backend_form.collateral_info.year_of_manufact'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="quantity_in_nos">{{ trans('backend_form.collateral_info.quantity_in_nos') }}</label>
            {!!
                Form::text('quantity_in_nos',
                null,
                [
                'id'=>'quantity_in_nos',
                'class'=>'form-control removeValidation quantity_in_nos',
                'data-original-title'=> trans('backend_form.collateral_info.quantity_in_nos'),
                'placeholder'=> trans('backend_form.collateral_info.quantity_in_nos'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
        </div>
    </div>

</div>