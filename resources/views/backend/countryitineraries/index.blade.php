@extends('backend.layouts.app')
@section('content')
    <div class="content">

        <a href="{{route('countryitineraries.create')}}"
           class="btn btn-primary btn-labeled btn-labeled-left btn-lg legitRipple float-right "><b><i
                    class="icon-people"></i></b> Add Itineraries</a>

        <table class="mdl-data-table table-responsive table-striped table-hover countryitineraries" id="countryitineraries" >
            <thead>
            <tr>
                <th>Country</th>
                <th>Itinerary Name</th>
                <th>Itinerary Image</th>
                <th>Description</th>
                <th>Sub Heading Name</th>
                <th>Sub Image One</th>
                <th>Sub Image Two</th>
                <th>Description</th>
                <th>Slider Heading Name</th>
                <th>Slider Image One</th>
                <th>Slider Image Two</th>
                <th>Slider Image Three</th>
                <th>Description</th>
                <th id="notexport">Action</th>
            </tr>
            </thead>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="showData" tabindex="-1" role="dialog" aria-labelledby="showData" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">Destinations</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-lg" id="showRemoteData" style="height:100%">

                </div>
                <div class="modal-footer mt-3">
                    <button type="button" class="btn btn-secondary mt-5" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script>

        console.log('hello');
        $(document).ready(function () {
            var t = $('.countryitineraries').DataTable({
                dom: 'Bfrtip',
                processing: true,
                serverSide: true,
                ajax: '{!! route('list.countryitineraries') !!}',
                columns: [
                    {data: 'country', name: 'country'},
                    {data: 'itineraryname', name: 'itineraryname'},
                    {data: 'itineraryimage', name: 'itineraryimage'},
                    {data: 'description', name: 'description'},

                    {data: 'subheadingname', name: 'subheadingname'},
                    {data: 'subimageone', name: 'subimageone'},
                    {data: 'subimagetwo', name: 'subimagetwo'},
                    {data: 'subdescription', name: 'subdescription'},

                    {data: 'sliderheadingname', name: 'sliderheadingname'},
                    {data: 'sliderimageone', name: 'sliderimageone'},
                    {data: 'sliderimagetwo', name: 'sliderimagetwo'},
                    {data: 'sliderimagethree', name: 'sliderimagethree'},
                    {data: 'sliderdescription', name: 'sliderdescription'},
                ],
                // "columnDefs": [
                //     {
                //         "targets": [ 8 ],
                //         "visible": false,
                //         "searchable": false
                //     }],
                "order": [[ 1, "desc" ]],
                buttons: [
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [1, 2 ] //Your Colume value those you want
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: [ 1, 2 ] //Your Colume value those you want
                        }
                    },
                ],
                "lengthMenu": [10]  //total rows to show in a table

                // "searching": false

            });

            $('#countryitineraries').on('click', 'a#openShow', function (e) {
                e.preventDefault();
                $('#showData').modal('show');

                $('#showRemoteData').waitMe({
                    effect: 'bounce',
                    text: 'Loading...',
                    bg: "rgba(255,255,255,0.7)",
                    color: "#000",
                    maxSize: '',
                    waitTime: -1,
                    textPos: 'vertical',
                    fontSize: '',
                    source: '',
                });

                var id = $(this).data('id');
                $.ajax({
                    url: 'countryitineraries/show/' + id,
                    method: 'GET',
                    success: function (data) {

                        console.log(data);

                        $('#showRemoteData').html(data);

                        $("#showRemoteData").waitMe("hide");

                    }
                });
            })

        });


    </script>


@endpush
