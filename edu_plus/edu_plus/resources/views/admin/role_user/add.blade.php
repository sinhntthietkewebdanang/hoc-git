
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
                <form action="{{ route('role-user.store') }}" method="POST">
                @else
                <form action="{{ route('role-user.update',$data['role_id']) }}" method="POST">
                {{ Form::open(array('route'=>array('role-user.update',$data['role_id']),'method' => 'PUT'))}}
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
                            <a class="btn red" href="{{ route('role-user.index') }}">Hủy</a>
                            
                        </div>
                    </div>
                    <div class="form-body">
                        @if(!isset($data))
                            <div class="form-group">
                                <label class="control-label">User Name</label>
                                <select class="form-control" name="user">
                                    @foreach ($user as $keyUser => $valueUser)
                                        <option value="{{$valueUser->id}}">{{$valueUser->name}}</option>
                                    @endforeach
                                </select>
                                
                            </div>

                            <div class="form-group">
                                <label class="control-label">Role Name</label>
                                <select class="form-control" name="role">
                                    @foreach ($role as $keyRole => $valueRole)
                                        <option value="{{$valueRole->id}}">{{$valueRole->name}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                        @else
                            <div class="form-group">
                                <label class="control-label">User Name</label>
                                <select class="form-control" name="user">
                                    @foreach ($user as $keyUser => $valueUser)
                                        <option value="{{$valueUser->id}}" <?php if($data['user_id']==$valueUser->id) echo 'selected' ?> >{{$valueUser->name}}</option>
                                    @endforeach
                                </select>
                                
                            </div>

                            <div class="form-group">
                                <label class="control-label">Role Name</label>
                                <select class="form-control" name="role">
                                    @foreach ($role as $keyRole => $valueRole)
                                        <option value="{{$valueRole->id}}" <?php if($data['role_id']==$valueRole->id) echo 'selected' ?> >{{$valueRole->name}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                        @endif

                       
                       
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
                            <a class="btn red" href="{{ route('role-user.index') }}">Hủy</a>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>

@endsection