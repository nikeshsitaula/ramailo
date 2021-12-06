@extends('backend.layouts.app')

@section('content')
    <div class="content">

        <!-- Form inputs -->

        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Destinations</h5>
        </div>

        <div class="card-body">

            {!! Form::model($worlddestinations,['method'=>'PUT','route'=>['employee.update',$worlddestinations->id],'class'=>'form-horizontal','role'=>'form']) !!}

            {!!Form::label('country','Country Name',['class'=>'col-form-label col-lg-2 require']) !!}
            <div class="col-lg-10">

                {!! Form::number('country',$value=null,['class'=>"form-control",'required'=>'required', 'readonly' => 'true']) !!}
            </div>
            {!!Form::label('speciality','Speciality',['class'=>'col-form-label col-lg-2 require']) !!}
            <div class="col-lg-10">

                {!! Form::text('speciality',$value=null,['class'=>"form-control",'required'=>'required']) !!}
            </div>
            {!!Form::label('continent','Continent',['class'=>'col-form-label col-lg-2 require']) !!}
            <div class="col-lg-10">

                {!! Form::text('continent',$value=null,['class'=>"form-control",'required'=>'required']) !!}
            </div>
        </div>

        <div class="text-right">
            <button type="submit" class="btn btn-primary legitRipple">Submit <i
                    class="icon-paperplane ml-2"></i></button>
        </div>

        {!! Form::close() !!}

    </div>

@endsection
