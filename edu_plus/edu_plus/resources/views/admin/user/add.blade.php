
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
                <form action="{{ route('user.store') }}" method="POST">
                @else
                <form action="{{ route('user.update',$data['id']) }}" method="POST">
                {{ Form::open(array('route'=>array('user.update',$data['id']),'method' => 'PUT'))}}
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
                            <a class="btn red" href="{{ route('user.index') }}">Hủy</a>
                            
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value={{ old('name',isset($data) ? $data['name'] : null) }}>
                            <span class="help-block"> A block of help text. </span>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <input type="email" name="email" class="form-control" placeholder="Email Address"  value={{ old('email',isset($data) ? $data['email'] : null) }}> </div>
                        </div>
                        
                        <div class="form-group" <?php if(isset($data)) echo 'hidden';?>>
                            <label class="control-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="Password" name="password"  value={{ old('password',isset($data) ? $data['password'] : null) }}>
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <label class="control-label">First name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="First name" name="first_name" value={{ old('first_name',isset($data) ? $data['first_name'] : null) }}>
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label">Last name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Last name" name="last_name" value={{ old('last_name',isset($data) ? $data['last_name'] : null) }}>
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label">Gender</label>
                            <div class="input-group">
                                <select name="gender" class="form-control">
                                    @if(isset($data))
                                        @if($data['is_men']==0)
                                        <option value="0" selected>Female</option>
                                        <option value="1">Male</option>
                                        @else
                                        <option value="0" >Female</option>
                                        <option value="1" selected>Male</option>
                                        @endif
                                    @else
                                        <option value="0">Female</option>
                                        <option value="1">Male</option>
                                    @endif
                                </select>
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Birthday</label>
                            <div class="input-group">
                                <input type="date" class="form-control" placeholder="birthday" name="birthday" value={{ old('birthday',isset($data) ? $data['date_of_birth'] : null) }}>
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="address" name="address" value={{ old('address',isset($data) ? $data['address'] : null) }}>
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
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
                            <a class="btn red" href="{{ route('user.index') }}">Hủy</a>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>

@endsection