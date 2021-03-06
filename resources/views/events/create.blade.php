@extends('user')

@section('title',' Create New event')

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
			                <h4 class="title" style="font-weight: bold;">CREATE NEW EVENT</h4>
			                <button type="button" class="btn btn-primary pull-right" onclick="window.location='{{ route("admin.mainevents.index") }}'">CANCEL</button>
			                <p class="category">Items marked <sup class="required">*</sup> are required.</p>
			            </div>
                 
		                <div class="content">
		                	<h4>
					    	{!! Form::open(array('route' => 'admin.mainevents.store', 'class' => 'form-horizontal', 'data-parsley-validate' => '', 'autocomplete' => 'off')) !!}
					                    <div class="form-group">
								    		<label class="col-lg-3 control-label" for="event_subject">Event Subject :</label>
								    		<div class="col-lg-5">

	                                            <div class="input-group border-input">                           
	                                                <span class="input-group-addon">
	                                                    <i class="ti-comment-alt"></i>
	                                                </span>
								    				{!! Form::text('event_subject', null, array('class' => 'form-control border-input', 'id' => 'event_subject', 'placeholder' => 'Enter event subject here', 'required' => '','minlength'=>'5','maxlength' => '255' )) !!}
								    			</div>
								    		</div>
								    	</div>

						            	<div class="form-group">
								    		<label class="col-md-3 control-label" for="event_message">Event Message :</label>
								    		<div class="col-lg-5">

	                                            <div class="input-group border-input">                           
	                                                <span class="input-group-addon">
	                                                    <i class="ti-comment-alt"></i>
	                                                </span>
								    				{!! Form::textarea('event_message', null, array('class' => 'form-control border-input', 'id' => 'event_message', 'placeholder' => 'Enter event message here', 'required' => '')) !!}
								    			</div>
								    		</div>
								    	</div>
					                    <div class="form-group">
						                    {!! Form::submit('Create Event', array('class' => 'btn pull-down btn-success btn-lg col-lg-8 col-md-offset-2 col-xs-offset-3 text-center', 'id' => 'submit'  )) !!}
						                </div>
							{!! Form::close() !!}
							</h4>
				    	</div>                     
		    		</div>
		    	</div>
        </div>
	</div>


@endsection
