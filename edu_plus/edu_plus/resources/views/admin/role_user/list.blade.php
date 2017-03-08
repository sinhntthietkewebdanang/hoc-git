@extends("admin.app")
@section("page_content")
<a href="{{asset('admin/manager_user/role-user/create')}}" class="btn btn-info" style="float: right;margin-bottom: 20px;">Add New</a>
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>User id</th>
                <th>Role id</th>
                <th>Created At</th>
                <th>Updated At</th>
                
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
        ajax: '{!! route('datatables.roleuser') !!}',
        columns: [
            { data: 'user_id', name: 'user_id' },
            { data: 'role_id', name: 'role_id' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
          
        ]
    });
});
</script>
@endsection
