
<h4 class="groupTitle">Specific Information</h4>
<div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">  
           <label class="sr-only" for="issuing_bank">{{ trans('backend_form.collateral_info.issuing_bank') }}</label>
            {!!
                Form::text('issuing_bank',
                null,
                [
                'id'=>'issuing_bank',
                'class'=>'form-control removeValidation issuing_bank',
                'data-original-title'=> trans('backend_form.collateral_info.issuing_bank'),
                'placeholder'=> trans('backend_form.collateral_info.issuing_bank'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
            
        </div>
    </div>

    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="fd_%_against_asset_value">{{ trans('backend_form.collateral_info.fd_%_against_asset_value') }}</label>
            {!!
                Form::text('fd_%_against_asset_value',
                null,
                [
                'id'=>'fd_%_against_asset_value',
                'class'=>'form-control removeValidation fd_%_against_asset_value',
                'data-original-title'=> trans('backend_form.collateral_info.fd_%_against_asset_value'),
                'placeholder'=> trans('backend_form.collateral_info.fd_%_against_asset_value'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
            
        </div>
    </div>

    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="fd_number">{{ trans('backend_form.collateral_info.fd_number') }}</label>
            {!!
                Form::text('fd_number',
                null,
                [
                'id'=>'fd_number',
                'class'=>'form-control removeValidation fd_number',
                'data-original-title'=> trans('backend_form.collateral_info.fd_number'),
                'placeholder'=> trans('backend_form.collateral_info.fd_number'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
            
        </div>
    </div>

    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
           <label class="sr-only" for="branch">{{ trans('backend_form.collateral_info.branch') }}</label>
            {!!
                Form::text('branch',
                null,
                [
                'id'=>'branch',
                'class'=>'form-control removeValidation branch',
                'data-original-title'=> trans('backend_form.collateral_info.branch'),
                'placeholder'=> trans('backend_form.collateral_info.branch'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
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
            <label class="sr-only" for="folio_number">{{ trans('backend_form.collateral_info.folio_number') }}</label>
            {!!
                Form::text('folio_number',
                null,
                [
                'id'=>'folio_number',
                'class'=>'form-control removeValidation folio_number',
                'data-original-title'=> trans('backend_form.collateral_info.folio_number'),
                'placeholder'=> trans('backend_form.collateral_info.folio_number'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
        </div>
    </div>

     <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="fd_long_description">{{ trans('backend_form.collateral_info.fd_long_description') }}</label>
            {!!
                Form::text('fd_long_description',
                null,
                [
                'id'=>'fd_long_description',
                'class'=>'form-control removeValidation fd_long_description',
                'data-original-title'=> trans('backend_form.collateral_info.fd_long_description'),
                'placeholder'=> trans('backend_form.collateral_info.fd_long_description'),
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
            <label class="sr-only" for="search">{{ trans('backend_form.collateral_info.search') }}</label>
            {!!
                Form::text('search',
                null,
                [
                'id'=>'search',
                'class'=>'form-control removeValidation search',
                'data-original-title'=> trans('backend_form.collateral_info.search'),
                'placeholder'=> trans('backend_form.collateral_info.search'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
        </div>
    </div>

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
                'id'=>'serial_number',
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
            <label class="sr-only" for="fd_receipt_number">{{ trans('backend_form.collateral_info.fd_receipt_number') }}</label>
            {!!
                Form::text('fd_receipt_number',
                null,
                [
                'id'=>'serial_number',
                'class'=>'form-control removeValidation fd_receipt_number',
                'data-original-title'=> trans('backend_form.collateral_info.fd_receipt_number'),
                'placeholder'=> trans('backend_form.collateral_info.fd_receipt_number'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip',
                ]
            )
            !!}
        </div>
    </div>

</div>


Key_value Pair:

'issuing_bank'             => 'Issuing Bank',
'fd_%_against_asset_value' => 'FD % Against Asset Value',
'fd_number'                => 'FD Number',
'branch'                   => 'Branch',
'start_date'               => 'Start Date',
'lien_marking_details'     => 'Lien Marking Details',
'folio_number'             => 'Folio Number',
'fd_long_description'      => 'FD Long Description',
'search'                   => 'Search',
'amount'                   => 'Amount',
'maturity_date'            => 'Maturity Date',
'fd_receipt_number'        => 'FD receipt Number'