@extends('backend.layouts.app')

@section('content')
    <div class="content">

        <!-- Form inputs -->

        <div class="card-header header-elements-inline">
            <h5 class="card-title">Create Destinations</h5>
        </div>

        <div class="card-body">

            {!! Form::open(['method'=>'POST','route'=>['worlddestinations.store'],'class'=>'form-horizontal','role'=>'form','enctype'=>'multipart/form-data']) !!}

            <div class="form-group row">

                {!!Form::label('country','Country Name',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10">
                    {!! Form::text('country',$value=null,['class'=>"form-control",'required'=>'required']) !!}
                </div>

                {!!Form::label('speciality','Speciality',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10">
                    {!! Form::text('speciality',$value=null,['class'=>"form-control",'required'=>'required']) !!}
                </div>

                {!!Form::label('continent','Continent (asia, europe, northamerica, australia, africa, middleeast)',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10" >
                    {!! Form::text('continent',$value=null,['class'=>"form-control",'required'=>'required']) !!}
                </div>

                {!!Form::label('countryimage','Country Image',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10" >
                    {!! Form::file('countryimage') !!}
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

