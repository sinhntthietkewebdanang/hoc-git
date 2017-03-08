
@extends("admin.app")
@section("page_content")

    <div class="col-md-12">
        <div class="portlet box yellow">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Actions Buttons </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                @if(!isset($data))
                <form action="{{ route('role.store') }}" method="POST">
                @else
                <form action="{{ route('role.update',$data['id']) }}" method="POST">
                {{ Form::open(array('route'=>array('role.update',$data['id']),'method' => 'PUT'))}}
                @endif
                {!! csrf_field() !!}
                    <div class="form-actions top">
                        <div class="btn-set pull-left">
                            @if(!isset($data))
                                <button type="submit" class="btn green" name="luu_tao_moi" value="luu_tao_moi">Lưu và tạo mới</button>
                            @else
                            <button type="submit" class="btn green" name="update" value="update">Sửa</button>
                            @endif
                            
                        </div>
                        <div class="btn-set pull-right">
                            @if(!isset($data))
                                <button type="submit" class="btn default" name="luu" value='luu'>Lưu</button>
                            @endif
                            <a class="btn red" href="{{ route('role.index') }}">Hủy</a>
                            
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value={{ old('name',isset($data) ? $data['name'] : null) }}>
                        </div>
                        <div class="form-group">
                            <label class="control-label">display_name</label>
                            <input type="text" class="form-control" name="display_name" placeholder="Enter display_name" value={{ old('display_name',isset($data) ? $data['display_name'] : null) }}>
                        </div>
                        <div class="form-group">
                            <label class="control-label">description</label>
                            <input type="text" class="form-control" name="description" placeholder="Enter description" value={{ old('description',isset($data) ? $data['description'] : null) }}>
                        </div>
                       
                    </div>
                    <div class="form-actions">
                        @if(!isset($data))
                            <button type="submit" class="btn green" name="luu_tao_moi" value="luu_tao_moi">Lưu và tạo mới</button>
                        @else
                            <button type="submit" class="btn green" name="update" value="update">Sửa</button>
                        @endif
                        <div class="btn-set pull-right">
                            @if(!isset($data))
                                <button type="submit" class="btn default" name="luu" value='luu'>Lưu</button>
                            @endif
                            <a class="btn red" href="{{ route('role.index') }}">Hủy</a>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>

@endsection