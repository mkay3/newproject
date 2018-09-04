<h4 class="groupTitle">Specific Information</h4>
<div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="area_type">{{ trans('backend_form.collateral_info.area_type') }}</label>
            {!!
                Form::select('area_type',
                array("6"=>"Area Type"),
                [
                'id'=>'area_type',
                'class'=>'form-control removeValidation area_type',
                'data-original-title'=> trans('backend_form.collateral_info.area_type'),
                'placeholder'=> trans('backend_form.collateral_info.area_type'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="owner_name">{{ trans('backend_form.collateral_info.owner_name') }}</label>
             {!!
                Form::text('owner_name',
                null,
                [
                'id'=>'owner_name',
                'class'=>'form-control removeValidation owner_name',
                'data-original-title'=> trans('backend_form.collateral_info.owner_name'),
                'placeholder'=> trans('backend_form.collateral_info.owner_name'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="property_address">{{ trans('backend_form.collateral_info.property_address') }}</label>
            {!!
                Form::text('property_address',
                null,
                [
                'id'=>'property_address',
                'class'=>'form-control removeValidation property_address',
                'data-original-title'=> trans('backend_form.collateral_info.property_address'),
                'placeholder'=> trans('backend_form.collateral_info.property_address'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
        </div>  
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="plot_no">{{ trans('backend_form.collateral_info.plot_no') }}</label>
            {!!
                Form::text('plot_no',
                null,
                [
                'id'=>'plot_no',
                'class'=>'form-control removeValidation plot_no',
                'data-original-title'=> trans('backend_form.collateral_info.plot_no'),
                'placeholder'=> trans('backend_form.collateral_info.plot_no'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
            <span class="mndry">*</span>
        </div>  
    </div>
</div> 

<div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="survey_number">{{ trans('backend_form.collateral_info.survey_number') }}</label>
            {!!
                Form::text('survey_number',
                null,
                [
                'id'=>'survey_number',
                'class'=>'form-control removeValidation survey_number',
                'data-original-title'=> trans('backend_form.collateral_info.survey_number'),
                'placeholder'=> trans('backend_form.collateral_info.survey_number'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="locality">{{ trans('backend_form.collateral_info.locality') }}</label>
            {!!
                Form::text('locality',
                null,
                [
                'id'=>'locality',
                'class'=>'form-control removeValidation locality',
                'data-original-title'=> trans('backend_form.collateral_info.locality'),
                'placeholder'=> trans('backend_form.collateral_info.locality'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
            <span class="mndry">*</span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="state">{{ trans('backend_form.collateral_info.state') }}</label>
            {!!
                Form::select('state',
                array("6"=>"State"),
                [
                'id'=>'state',
                'class'=>'form-control removeValidation state',
                'data-original-title'=> trans('backend_form.collateral_info.state'),
                'placeholder'=> trans('backend_form.collateral_info.state'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
            <span class="mndry">*</span>
        </div>  
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="district">{{ trans('backend_form.collateral_info.district') }}</label>
            {!!
                Form::select('district',
                array("6"=>"District"),
                [
                'id'=>'district',
                'class'=>'form-control removeValidation district',
                'data-original-title'=> trans('backend_form.collateral_info.district'),
                'placeholder'=> trans('backend_form.collateral_info.district'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
            <span class="mndry">*</span>
        </div>  
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="pincode">{{ trans('backend_form.collateral_info.pincode') }}</label>
            {!!
                Form::text('pincode',
                null,
                [
                'id'=>'pincode',
                'class'=>'form-control removeValidation pincode',
                'data-original-title'=> trans('backend_form.collateral_info.pincode'),
                'placeholder'=> trans('backend_form.collateral_info.pincode'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
            <span class="mndry">*</span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="horizontal_deviation_%">{{ trans('backend_form.collateral_info.horizontal_deviation_%') }}</label>
            {!!
                Form::text('horizontal_deviation_%',
                null,
                [
                'id'=>'horizontal_deviation_%',
                'class'=>'form-control removeValidation horizontal_deviation_%',
                'data-original-title'=> trans('backend_form.collateral_info.horizontal_deviation_%'),
                'placeholder'=> trans('backend_form.collateral_info.horizontal_deviation_%'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="vertical_deviation_%">{{ trans('backend_form.collateral_info.vertical_deviation_%') }}</label>
            {!!
                Form::text('vertical_deviation_%',
                null,
                [
                'id'=>'vertical_deviation_%',
                'class'=>'form-control removeValidation vertical_deviation_%',
                'data-original-title'=> trans('backend_form.collateral_info.vertical_deviation_%'),
                'placeholder'=> trans('backend_form.collateral_info.vertical_deviation_%'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
        </div>  
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="built_up_area_in_selected_area_type">{{ trans('backend_form.collateral_info.built_up_area_in_selected_area_type') }}</label>
            {!!
                Form::text('built_up_area_in_selected_area_type',
                null,
                [
                'id'=>'built_up_area',
                'class'=>'form-control removeValidation built_up_area_in_selected_area_type',
                'data-original-title'=> trans('backend_form.collateral_info.built_up_area_in_selected_area_type'),
                'placeholder'=> trans('backend_form.collateral_info.built_up_area_in_selected_area_type'),
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
            <label class="sr-only" for="date_of_valuation">{{ trans('backend_form.collateral_info.date_of_valuation') }}</label>
            {!!
                Form::text('date_of_valuation',
                null,
                [
                'id'=>'date_of_valuation',
                'class'=>'form-control removeValidation date_of_valuation',
                'data-original-title'=> trans('backend_form.collateral_info.date_of_valuation'),
                'placeholder'=> trans('backend_form.collateral_info.date_of_valuation'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
        </div>
    </div>
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
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
            <span class="mndry">*</span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="forced_sale_value">{{ trans('backend_form.collateral_info.forced_sale_value') }}</label>
            {!!
                Form::text('forced_sale_value',
                null,
                [
                'id'=>'forced_sale_value',
                'class'=>'form-control removeValidation forced_sale_value',
                'data-original-title'=> trans('backend_form.collateral_info.forced_sale_value'),
                'placeholder'=> trans('backend_form.collateral_info.forced_sale_value'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
        </div>  
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="government_guidance_value">{{ trans('backend_form.collateral_info.government_guidance_value') }}</label>
            {!!
                Form::text('government_guidance_value',
                null,
                [
                'id'=>'government_guidance_value',
                'class'=>'form-control removeValidation government_guidance_value',
                'data-original-title'=> trans('backend_form.collateral_info.government_guidance_value'),
                'placeholder'=> trans('backend_form.collateral_info.government_guidance_value'),
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
            <label class="sr-only" for="basic_of_valuation">{{ trans('backend_form.collateral_info.basic_of_valuation') }}</label>
            {!!
                Form::select('basic_of_valuation',
                array("6"=>"Basic of Valuation"),
                [
                'id'=>'basic_of_valuation',
                'class'=>'form-control removeValidation basic_of_valuation',
                'data-original-title'=> trans('backend_form.collateral_info.basic_of_valuation'),
                'placeholder'=> trans('backend_form.collateral_info.basic_of_valuation'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="no_of_title_documents">{{ trans('backend_form.collateral_info.no_of_title_documents') }}</label>
            {!!
                Form::text('no_of_title_documents',
                null,
                [
                'id'=>'no_of_title_documents',
                'class'=>'form-control removeValidation no_of_title_documents',
                'data-original-title'=> trans('backend_form.collateral_info.no_of_title_documents'),
                'placeholder'=> trans('backend_form.collateral_info.no_of_title_documents'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
            <span class="mndry">*</span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="document_type">{{ trans('backend_form.collateral_info.document_type') }}</label>
            {!!
                Form::select('document_type',
                array("6"=>"Document Type"),
                [
                'id'=>'document_type',
                'class'=>'form-control removeValidation document_type',
                'data-original-title'=> trans('backend_form.collateral_info.document_type'),
                'placeholder'=> trans('backend_form.collateral_info.document_type'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
            <span class="mndry">*</span>
        </div>  
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="others">{{ trans('backend_form.collateral_info.others') }}</label>
            {!!
                Form::text('others',
                null,
                [
                'id'=>'others',
                'class'=>'form-control removeValidation others',
                'data-original-title'=> trans('backend_form.collateral_info.others'),
                'placeholder'=> trans('backend_form.collateral_info.others'),
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
            <label class="sr-only" for="area_of_the_plot_in_selected_area_type">{{ trans('backend_form.collateral_info.area_of_the_plot_in_selected_area_type') }}</label>
            {!!
                Form::text('area_of_the_plot_in_selected_area_type',
                null,
                [
                'id'=>'area_of_the_plot_in_selected_area_type',
                'class'=>'form-control removeValidation area_of_the_plot_in_selected_area_type',
                'data-original-title'=> trans('backend_form.collateral_info.area_of_the_plot_in_selected_area_type'),
                'placeholder'=> trans('backend_form.collateral_info.area_of_the_plot_in_selected_area_type'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}

        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="title_document_number">{{ trans('backend_form.collateral_info.title_document_number') }}</label>
            {!!
                Form::text('title_document_number',
                null,
                [
                'id'=>'title_document_number',
                'class'=>'form-control removeValidation title_document_number',
                'data-original-title'=> trans('backend_form.collateral_info.title_document_number'),
                'placeholder'=> trans('backend_form.collateral_info.title_document_number'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
            <span class="mndry">*</span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="sub_registrar_office">{{ trans('backend_form.collateral_info.sub_registrar_office') }}</label>
            {!!
                Form::text('sub_registrar_office',
                null,
                [
                'id'=>'sub_registrar_office',
                'class'=>'form-control removeValidation sub_registrar_office',
                'data-original-title'=> trans('backend_form.collateral_info.sub_registrar_office'),
                'placeholder'=> trans('backend_form.collateral_info.sub_registrar_office'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
            <span class="mndry">*</span>
        </div>  
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="cersai_security_interest_id">{{ trans('backend_form.collateral_info.cersai_security_interest_id') }}</label>
            {!!
                Form::text('cersai_security_interest_id',
                null,
                [
                'id'=>'cersai_security_interest_id',
                'class'=>'form-control removeValidation cersai_security_interest_id',
                'data-original-title'=> trans('backend_form.collateral_info.cersai_security_interest_id'),
                'placeholder'=> trans('backend_form.collateral_info.cersai_security_interest_id'),
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
            <label class="sr-only" for="cersai_asset_id">{{ trans('backend_form.collateral_info.cersai_asset_id') }}</label>
            {!!
                Form::text('cersai_asset_id',
                null,
                [
                'id'=>'cersai_asset_id',
                'class'=>'form-control removeValidation cersai_asset_id',
                'data-original-title'=> trans('backend_form.collateral_info.cersai_asset_id'),
                'placeholder'=> trans('backend_form.collateral_info.cersai_asset_id'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}

        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="valuation_amount_2">{{trans('backend_form.collateral_info.valuation_amount_2') }}</label>
            {!!
                Form::text('valuation_amount_2',
                null,
                [
                'id'=>'valuation_amount_2',
                'class'=>'form-control removeValidation valuation_amount_2',
                'data-original-title'=> trans('backend_form.collateral_info.valuation_amount_2'),
                'placeholder'=> trans('backend_form.collateral_info.valuation_amount_2'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="common_area_in_selected_area_type">{{trans('backend_form.collateral_info.common_area_in_selected_area_type') }}</label>
            {!!
                Form::text('common_area_in_selected_area_type',
                null,
                [
                'id'=>'common_area_in_selected_area_type',
                'class'=>'form-control removeValidation common_area_in_selected_area_type',
                'data-original-title'=> trans('backend_form.collateral_info.common_area_in_selected_area_type'),
                'placeholder'=> trans('backend_form.collateral_info.common_area_in_selected_area_type'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
        </div>  
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="total_area_in_selected_area_type">{{trans('backend_form.collateral_info.total_area_in_selected_area_type') }}</label>
            {!!
                Form::text('total_area_in_selected_area_type',
                null,
                [
                'id'=>'total_area_in_selected_area_type',
                'class'=>'form-control removeValidation total_area_in_selected_area_type',
                'data-original-title'=> trans('backend_form.collateral_info.total_area_in_selected_area_type'),
                'placeholder'=> trans('backend_form.collateral_info.total_area_in_selected_area_type'),
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
            <label class="sr-only" for="year_of_construction">{{ trans('backend_form.collateral_info.year_of_construction') }}</label>
            {!!
                Form::text('year_of_construction',
                null,
                [
                'id'=>'year_of_construction',
                'class'=>'form-control removeValidation year_of_construction',
                'data-original-title'=> trans('backend_form.collateral_info.year_of_construction'),
                'placeholder'=> trans('backend_form.collateral_info.year_of_construction'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}

        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="floor_area_ratio_or_floor_space_index">{{ trans('backend_form.collateral_info.floor_area_ratio_or_floor_space_index') }}</label>
            {!!
                Form::text('floor_area_ratio_or_floor_space_index',
                null,
                [
                'id'=>'floor_area_ratio_or_floor_space_index',
                'class'=>'form-control removeValidation floor_area_ratio_or_floor_space_index',
                'data-original-title'=> trans('backend_form.collateral_info.floor_area_ratio_or_floor_space_index'),
                'placeholder'=> trans('backend_form.collateral_info.floor_area_ratio_or_floor_space_index'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="sanction_plan_available">{{ trans('backend_form.collateral_info.sanction_plan_available')}}</label>
            {!!
                Form::text('sanction_plan_available',
                null,
                [
                'id'=>'sanction_plan_available',
                'class'=>'form-control removeValidation sanction_plan_available',
                'data-original-title'=> trans('backend_form.collateral_info.sanction_plan_available'),
                'placeholder'=> trans('backend_form.collateral_info.sanction_plan_available'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}

        </div>  
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="form-group  mar_b20">
            <label class="sr-only" for="dist_from_branch_to_property_in_kms">{{ trans('backend_form.collateral_info.dist_from_branch_to_property_in_kms') }}</label>
            {!!
                Form::text('dist_from_branch_to_property_in_kms',
                null,
                [
                'id'=>'dist_from_branch_to_property_in_kms',
                'class'=>'form-control removeValidation dist_from_branch_to_property_in_kms',
                'data-original-title'=> trans('backend_form.collateral_info.dist_from_branch_to_property_in_kms'),
                'placeholder'=> trans('backend_form.collateral_info.dist_from_branch_to_property_in_kms'),
                'data-placement'=>'top',
                'data-toggle'=>'tooltip'
                ]
            )
            !!}
        </div>  
    </div>
</div>



