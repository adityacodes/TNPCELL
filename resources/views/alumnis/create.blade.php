@extends('user')

@section('title',' Create New Alumni')

@section('stylesheets')
<style>
	label{
		font-weight: bold;
	}
</style>
@endsection


@section('content')
     <div class="row">
        <div class="card">
                @include('partials._settingsnav')

                <div class="col-lg-12">
               		 <div class="card tab-content">  
			    		<div class="header">
			                <div class="icon-big icon-success col-md-1 col-xs-3">
			                        <i class="ti-pencil"></i>
			                           
			                </div>
			                <h4 class="title" style="font-weight: bold;">CREATE NEW ALUMNI</h4>

			                <button type="button" class="btn btn-primary pull-right" onclick="window.location='{{ route("admin.alumni.index") }}'">Cancel</button>
			                <p class="category">Items marked <sup class="required">*</sup> are required.</p>
			            </div>
		                 
		                <div class="content">
		                <h4>
					    	{!! Form::open(array('route' => 'admin.alumni.store', 'class' => 'form-horizontal', 'data-parsley-validate' => '', 'enctype' => 'multipart/form-data', 'files' => 'true', 'autocomplete' => 'off')) !!}
					                    <div class="form-group">
					                    	<div class="col-md-3">
								    			<label class="control-label pull-right" for="title">Alumni Name<sup class="required">*</sup>:</label>
								    		</div>
								    		<div class="col-md-4">

	                                            <div class="input-group border-input">                           
	                                                <span class="input-group-addon">
	                                                    <i class="ti-comment-alt"></i>
	                                                </span>
								    				{!! Form::text('alumni_name', null, array('class' => 'form-control border-input', 'id' => 'alumni_name', 'placeholder' => 'Enter name here','maxlength' => '255' )) !!}
								    			</div>
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="alumni_image">Alumni Image:<sup class="required">*</sup></label>
								    		<div class="col-lg-4">

	                                            <div class="input-group border-input">                           
	                                                <span class="input-group-addon">
	                                                    <i class="ti-comment-alt"></i>
	                                                </span>
								    				{!! Form::file('alumni_image', null, array('class' => 'form-control border-input', 'id' => 'alumni_image', 'placeholder' => 'Enter value here', 'required' => '')) !!}
								    			</div>
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="alumni_desig">Alumni Designation:<sup class="required">*</sup></label>
								    		<div class="col-lg-4">

	                                            <div class="input-group border-input">                           
	                                                <span class="input-group-addon">
	                                                    <i class="ti-comment-alt"></i>
	                                                </span>
								    				{!! Form::text('alumni_desig', null, array('class' => 'form-control border-input', 'id' => 'alumni_desig', 'placeholder' => 'Enter tenth Percentage Requirement', 'required' => '' )) !!}
								    			</div>
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="alumni_company">Alumni Company:<sup class="required">*</sup></label>
								    		<div class="col-lg-4">

	                                            <div class="input-group border-input">                           
	                                                <span class="input-group-addon">
	                                                    <i class="ti-comment-alt"></i>
	                                                </span>
								    				{!! Form::text('alumni_company', null, array('class' => 'form-control border-input', 'id' => 'alumni_company', 'placeholder' => 'Enter value here ', 'required' => '' )) !!}
								    			</div>
								    		</div>
								    	</div>
								    	<div class="form-group">
								    		<label class="col-lg-3 control-label" for="alumni_website">Alumni Website:<sup class="required">*</sup></label>
								    		<div class="col-lg-4">

	                                            <div class="input-group border-input">                           
	                                                <span class="input-group-addon">
	                                                    <i class="ti-comment-alt"></i>
	                                                </span>
								    				{!! Form::text('alumni_website', null, array('class' => 'form-control border-input', 'id' => 'alumni_website', 'placeholder' => 'Enter value here' )) !!}
								    			</div>
								    		</div>
								    	</div>
								    	
					                    <div class="form-group">
						                    {!! Form::submit('Create Alumni', array('class' => 'btn pull-down btn-success btn-lg col-lg-8 col-md-offset-2 col-xs-offset-3 text-center', 'id' => 'submit'  )) !!}
						                </div>
							{!! Form::close() !!}
							</h4>
			    		</div> 
			    	  </div>
		    	</div>                    
		    
		    <div class="footer"></div>
        </div>
	</div>


@endsection

@section('scripts')

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>
@endsection
