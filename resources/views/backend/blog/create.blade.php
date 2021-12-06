@extends('backend.layouts.app')

@section('content')
    <div class="content">

        <!-- Form inputs -->

        <div class="card-header header-elements-inline">
            <h5 class="card-title">Create Destinations</h5>
        </div>

        <div class="card-body">

            {!! Form::open(['method'=>'POST','route'=>['blog.store'],'class'=>'form-horizontal','role'=>'form','enctype'=>'multipart/form-data']) !!}

            <div class="form-group row">

                {!!Form::label('title','Title',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10">
                    {!! Form::text('title',$value=null,['class'=>"form-control",'required'=>'required']) !!}
                </div>

                {!!Form::label('description','Description',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10">
                    {!! Form::text('description',$value=null,['class'=>"form-control",'required'=>'required']) !!}
                </div>

                {!!Form::label('coverimageone','Cover Image One',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10" >
                    {!! Form::file('coverimageone') !!}
                </div>

                {!!Form::label('coverimagetwo','Cover Image Two',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10" >
                    {!! Form::file('coverimagetwo') !!}
                </div>

                {!!Form::label('coverimagethree','Cover Image Three',['class'=>'col-form-label col-lg-2 require']) !!}
                <div class="col-lg-10" >
                    {!! Form::file('coverimagethree') !!}
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
