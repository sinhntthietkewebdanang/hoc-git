@extends("admin.app")

@section("page_content")
<a href="{{asset('admin/manager_user/role/create')}}" class="btn btn-info" style="float: right;margin-bottom: 20px;">Add New</a>
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
@endsection

@section('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.role') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            { data: 'action', name: 'action' , orderable: false, searchable: false}
        ]
    });
});
</script>
@endsection
