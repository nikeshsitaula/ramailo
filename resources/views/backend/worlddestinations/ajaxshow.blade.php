<div class="content">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Field</th>
            <th>Detail</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Country</td>
            <td>{{$worlddestinations->country}}</td>
        </tr>
        <tr>
            <td>Speciality</td>
            <td>{{$worlddestinations->speciality}}</td>
        </tr>
        <tr>
            <td>Continent</td>
            <td>{{$worlddestinations->continent}}</td>
        </tr>
        <tr>
            <td>Created At</td>
            <td>
                @if(!empty($worlddestinations->created_at))
                    {{$worlddestinations->created_at}}
                @endif
            </td>
        </tr>
        <tr>
            <td>Updated At</td>
            <td>
                @if(!empty($worlddestinations->updated_at))
                    {{$worlddestinations->updated_at}}
                @endif
            </td>
        </tr>
        </tbody>


        <tbody>
        @if(!empty($images))
            @foreach($images as $image)
                <td><img class="img-responsive" style="width:300px;"
                         src="/storage/countryimages/{{$image->countryimages}}"/></td>
            @endforeach
        @endif
        </tbody>
    </table>
    <!-- /form inputs -->
</div>
