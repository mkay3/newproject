
<h4 class="groupTitle">Specific Information</h4>
<div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="machinery_description">{{ trans('backend_form.collateral_info.machinery_description') }}</label>
            {!!
                Form::text('machinery_description',
                null,
                [
                'id'=>'machinery_description',
                'class'=>'form-control removeValidation machinery_description',
                'data-original-title'=> trans('backend_form.collateral_info.machinery_description'),
                'placeholder'=> trans('backend_form.collateral_info.machinery_description'),
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
           <label class="sr-only" for="name_of_the_valuator">{{ trans('backend_form.collateral_info.name_of_the_valuator') }}</label>
            {!!
                Form::text('name_of_the_valuator',
                null,
                [
                'id'=>'name_of_the_valuator',
                'class'=>'form-control removeValidation name_of_the_valuator',
                'data-original-title'=> trans('backend_form.collateral_info.name_of_the_valuator'),
                'placeholder'=> trans('backend_form.collateral_info.name_of_the_valuator'),
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

<div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="valuation_amount">{{ trans('backend_form.collateral_info.valuation_amount') }}</label>
            {!!
                Form::text('valuation_amount',
                null,
                [
                'id'=>'valuation_amount',
                'class'=>'form-control removeValidation valuation_amount',
                'data-original-title'=> trans('backend_form.collateral_info.valuation_amount'),
                'placeholder'=> trans('backend_form.collateral_info.valuation_amount'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

</div>


    




Key_value Pair:

'machinery_description' => 'Machinery Description',
'model'                 => 'Model',
'year_of_manufacture'   => 'Year of Manufacture',
'name_of_the_valuator'  => 'Name of the valuator',
'basis_of_valuation'    => 'Basis of Valuation',
'make'                  => 'Make',
'serial_number'         => 'Serial Number',
'quantity_in_nos'       => 'Quantity (in nos)',
'valuation_amount'      => 'Valuation Amount'


