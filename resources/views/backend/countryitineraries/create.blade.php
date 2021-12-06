@extends('backend.layouts.app')

@section('content')
    <div class="content">

        <!-- Form inputs -->

        <div class="card-header header-elements-inline">
            <h5 class="card-title">Create Itineraries</h5>
        </div>

        <div class="card-body">

            {!! Form::open(['method'=>'POST','route'=>['countryitineraries.store'],'class'=>'form-horizontal','role'=>'form','enctype'=>'multipart/form-data']) !!}

            <div class="form-group row">

                {!!Form::label('country','Country Name',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10">
                    {!! Form::text('country',$value=null,['class'=>"form-control",'required'=>'required']) !!}
                </div>

                {!!Form::label('itineraryname','Itinerary Name',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10">
                    {!! Form::text('itineraryname',$value=null,['class'=>"form-control",'required'=>'required']) !!}
                </div>

                {!!Form::label('itineraryimage','Itinerary Image',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10" >
                    {!! Form::file('itineraryimage') !!}
                </div>

                {!!Form::label('description','Description',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10" >
                    {!! Form::text('description',$value=null,['class'=>"form-control",'required'=>'required']) !!}
                </div>

                <hr/>

                {!!Form::label('subheadingname','Sub Heading Name',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10">
                    {!! Form::text('subheadingname',$value=null,['class'=>"form-control",'required'=>'required']) !!}
                </div>

                {!!Form::label('subimageone','Sub Image One',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10" >
                    {!! Form::file('subimageone') !!}
                </div>

                {!!Form::label('subimagetwo','Sub Image Two',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10" >
                    {!! Form::file('subimagetwo') !!}
                </div>

                {!!Form::label('subdescription','Sub Description',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10" >
                    {!! Form::text('subdescription',$value=null,['class'=>"form-control",'required'=>'required']) !!}
                </div>

                <hr/>

                {!!Form::label('sliderheadingname','Slider Heading Name',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10">
                    {!! Form::text('sliderheadingname',$value=null,['class'=>"form-control",'required'=>'required']) !!}
                </div>

                {!!Form::label('sliderimageone','Slider Image One',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10" >
                    {!! Form::file('sliderimageone') !!}
                </div>

                {!!Form::label('sliderimagetwo','Slider Image Two',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10" >
                    {!! Form::file('sliderimagetwo') !!}
                </div>

                {!!Form::label('sliderimagethree','Slider Image Three',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10" >
                    {!! Form::file('sliderimagethree') !!}
                </div>

                {!!Form::label('sliderdescription','Slider Description',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10" >
                    {!! Form::text('sliderdescription',$value=null,['class'=>"form-control",'required'=>'required']) !!}
                </div>


            </div>

            <div class="text-right">
                {{ Form::button('Submit <i class="icon-paperplane ml-2"></i>', ['type' => 'submit', 'class' => 'btn btn-primary legitRipple'] )  }}
            </div>

            {!! Form::close() !!}

        </div>

        <!-- /form inputs -->

    </div>
@endsection
{{--@push('scripts')--}}
{{--<script>--}}
{{--$(document).ready(function () {--}}
{{--$('.emp_no').on('change', function () {--}}
{{--var emp_no = $(this).val();--}}
{{--console.log('worlddestinations no:' + emp_no);--}}

{{--//check if emp no input field has some value , if form input is empty then dont check for user existence--}}
{{--if (emp_no.length > 0) {--}}

{{--$.ajax({--}}
{{--url: '{{url('worlddestinations/checkworlddestinationsExistence')}}',--}}
{{--method: 'GET',--}}
{{--data: {--}}
{{--'emp_no': emp_no //this is the input which is sent in GET Request as parameter--}}
{{--},--}}
{{--dataType: 'json',--}}
{{--//function(data) has (data) which is the json response--}}
{{--success: function (data) {--}}
{{--// data is the response from controller after checking user--}}
{{--//if data has two param: status and message--}}
{{--//if message is false it means worlddestinations already exist else doesn't--}}
{{--console.log(data);--}}
{{--//check if worlddestinations exist--}}
{{--if (data.message === false) {--}}
{{--$('#message').html('<small class="text-danger">worlddestinations already exist</small>');--}}
{{--} else {--}}
{{--$('#message').html('<small class="text-success">new worlddestinations : available</small>');--}}
{{--}--}}
{{--}--}}
{{--});--}}
{{--} else {//if emp no has no input value in form then display nothing--}}
{{--$('#message').html('');--}}
{{--}--}}
{{--});--}}
{{--});--}}
{{--</script>--}}
{{--@endpush--}}
