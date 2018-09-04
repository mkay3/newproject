
<h4 class="groupTitle">Specific Information</h4>
<div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="amount">{{ trans('backend_form.collateral_info.amount') }}</label>
            {!!
                Form::text('amount',
                null,
                [
                'id'=>'amount',
                'class'=>'form-control removeValidation amount',
                'data-original-title'=> trans('backend_form.collateral_info.amount'),
                'placeholder'=> trans('backend_form.collateral_info.amount'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="maturity_date">{{ trans('backend_form.collateral_info.maturity_date') }}</label>
            {!!
                Form::text('maturity_date',
                null,
                [
                'id'=>'maturity_date',
                'class'=>'form-control removeValidation maturity_date',
                'data-original-title'=> trans('backend_form.collateral_info.maturity_date'),
                'placeholder'=> trans('backend_form.collateral_info.maturity_date'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="sd_receipt_number">{{ trans('backend_form.collateral_info.sd_receipt_number') }}</label>
            {!!
                Form::text('sd_receipt_number',
                null,
                [
                'id'=>'sd_receipt_number',
                'class'=>'form-control removeValidation sd_receipt_number',
                'data-original-title'=> trans('backend_form.collateral_info.sd_receipt_number'),
                'placeholder'=> trans('backend_form.collateral_info.sd_receipt_number'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="sd_long_description">{{ trans('backend_form.collateral_info.sd_long_description') }}</label>
            {!!
                Form::text('sd_long_description',
                null,
                [
                'id'=>'sd_long_description',
                'class'=>'form-control removeValidation sd_long_description',
                'data-original-title'=> trans('backend_form.collateral_info.sd_long_description'),
                'placeholder'=> trans('backend_form.collateral_info.sd_long_description'),
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
           <label class="sr-only" for="start_date">{{ trans('backend_form.collateral_info.start_date') }}</label>
            {!!
                Form::text('start_date',
                null,
                [
                'id'=>'start_date',
                'class'=>'form-control removeValidation start_date',
                'data-original-title'=> trans('backend_form.collateral_info.start_date'),
                'placeholder'=> trans('backend_form.collateral_info.start_date'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="lien_marking_details">{{ trans('backend_form.collateral_info.lien_marking_details') }}</label>
            {!!
                Form::text('lien_marking_details',
                null,
                [
                'id'=>'lien_marking_details',
                'class'=>'form-control removeValidation lien_marking_details',
                'data-original-title'=> trans('backend_form.collateral_info.lien_marking_details'),
                'placeholder'=> trans('backend_form.collateral_info.lien_marking_details'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="sd_%_against_asset_value">{{ trans('backend_form.collateral_info.sd_%_against_asset_value') }}</label>
            {!!
                Form::text('sd_%_against_asset_value',
                null,
                [
                'id'=>'sd_%_against_asset_value',
                'class'=>'form-control removeValidation sd_%_against_asset_value',
                'data-original-title'=> trans('backend_form.collateral_info.sd_%_against_asset_value'),
                'placeholder'=> trans('backend_form.collateral_info.sd_%_against_asset_value'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="type_of_interest">{{ trans('backend_form.collateral_info.type_of_interest') }}</label>
            {!!
                Form::select('type_of_interest',
                [],
                [
                'id'=>'type_of_interest',
                'class'=>'form-control removeValidation type_of_interest',
                'data-original-title'=> trans('backend_form.collateral_info.type_of_interest'),
                'placeholder'=> trans('backend_form.collateral_info.type_of_interest'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
            
        </div>
    </div>

</div>

Key_value Pair:

'amount'                   => 'Amount',
'maturity_date'            => 'Maturity Date',
'sd_receipt_number'        => 'SD receipt Number',
'sd_long_description'      => 'SD Long description',
'start_date'               => 'Start Date',
'lien_marking_details'     => 'Lien Marking details',
'sd_%_against_asset_value' => 'SD % against Asset value',
'type_of_interest'         => 'Type of interest'


