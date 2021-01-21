@extends('layouts.template_admin')

@section('content')
<div class="layout-px-spacing">
    <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area">
                <div class="col-md-12 text-right mb-3">
                    <a href="{{ route('polda_create') }}" class="btn btn-success">Add New</a>
                </div>
                <div class="table-responsive">
                    <table id="tbl_polda" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>A.K.A</th>
                                <th>Province</th>
                                <th>City</th>
                                <th>Address</th>
                                <th>Picture</th>
                                <th>Logo</th>
                                <th>Profile</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('library_css')
<link rel="stylesheet" type="text/css" href="{{ secure_asset('template/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('template/plugins/table/datatable/dt-global_style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('template/plugins/font-icons/fontawesome/css/regular.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('template/plugins/font-icons/fontawesome/css/fontawesome.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('template/custom.css') }}">
@endpush

@push('library_js')
<script src="{{ secure_asset('template/plugins/table/datatable/datatables.js') }}"></script>
<script src="{{ secure_asset('template/plugins/font-icons/feather/feather.min.js') }}"></script>
<script src="{{ secure_asset('template/plugins/editors/markdown/simplemde.min.js') }}"></script>
<script type="text/javascript">
    feather.replace();
</script>
@endpush

@push('page_js')
<script src="{{ secure_asset('js/polda.js') }}"></script>
@endpush