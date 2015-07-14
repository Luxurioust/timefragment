@include('layout.account-header')
@yield('content')
{{ script('ckeditor') }}
<body class="bg-gray-light">
    @include('layout.admin-navigation')
    @yield('content')

    @include('layout.admin-sidebar')
    @yield('content')
    <div class="preloader">
        <div class="timer"></div>
    </div>
    <div id="container" class="main-content p-30 tp-t-60 tp-lr-10">

        <button class="menu-btn btn btn-bordered text-gray-alt text-bold top-left-corner">&#9776; 菜单</button>
        <div class="row">
            <div class="col-sm-12">
                <div class="bg-white p-tb-30">

                    <div class="btn-group">
                        <div class="iconmelon m-r-10 m-l-30">
                            <svg viewBox="0 0 32 32">
                                <g filter="">
                                    <use xlink:href="#speech-talk-user"></use>
                                </g>
                            </svg>
                        </div>

                        <span class="text-gray-dark text-large align-with-button m-r-30">
                            编辑{{ $resourceName }}
                        </span>
                    </div>

                    <div class="pull-right m-r-30 mail-nav">
                        <a href="{{ route($resource.'.index') }}" class="btn btn-bordered text-gray-alt">
                            &laquo; 返回{{ $resourceName }}列表
                        </a>
                    </div>

                    <div class="p-lr-30 p-tb-10 pm-lr-10">
                        @include('layout.notification')
                    </div>

                    <div class="p-lr-30 p-tb-10 pm-lr-10">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab-general" data-toggle="tab">
                                    <div class="text-small">Main Content</div>
                                    <span class="text-uppercase">主要内容</span>
                                </a>
                            </li>
                            <li>
                                <a href="#tab-meta-data" data-toggle="tab">
                                    <div class="text-small">SEO</div>
                                    <span class="text-uppercase">搜索引擎优化</span>
                                </a>
                            </li>
                            <li>
                                <a href="#tab-images-management" data-toggle="tab">
                                    <div class="text-small">Photo Management</div>
                                    <span class="text-uppercase">照片管理</span>
                                </a>
                            </li>
                            <li>
                                <a href="#tab-info" data-toggle="tab">
                                    <div class="text-small">Goods Information</div>
                                    <span class="text-uppercase">商品信息</span>
                                </a>
                            </li>
                        </ul>

                        <form class="form-horizontal" method="POST" action="{{ route($resource.'.update', $data->id) }}" autocomplete="off" style="padding:1em;border:1px solid #ddd;border-top:0;" accept-charset="UTF-8" enctype="multipart/form-data" name="form">
                            {{-- CSRF Token --}}
                            <input name="_method" type="hidden" value="PUT" />
                            <input name="_token" type="hidden" value="{{ csrf_token() }}" />


                            {{-- Tabs Content --}}
                            <div class="tab-content">

                                {{-- General tab --}}
                                <div class="tab-pane active fade p-30 in" id="tab-general" style="margin:0 1em;">

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="category">分类</label>
                                            {{ $errors->first('category', '<span style="color:#c7254e;margin:0 1em;">:message</span>') }}
                                            {{ Form::select('category', $categoryLists, $data->category->id, array('class' => 'form-control input-sm selectpicker input-light brad')) }}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="location">所在地</label>
                                            {{ $errors->first('province', '<span style="color:#c7254e;margin:0 1em;">:message</span>') }}
                                            <div>
                                                <select id="province" class="input-light brad" data-live-search="false" name="province" onchange="setcity();" rel="{{ $data->province }}">
                                                    <option value="">----请选择省份----</option>
                                                    <option value="安徽">安徽</option>
                                                    <option value="北京">北京</option>
                                                    <option value="重庆">重庆</option>
                                                    <option value="福建">福建</option>
                                                    <option value="甘肃">甘肃</option>
                                                    <option value="广东">广东</option>
                                                    <option value="广西">广西</option>
                                                    <option value="贵州">贵州</option>
                                                    <option value="海南">海南</option>
                                                    <option value="河北">河北</option>
                                                    <option value="黑龙江">黑龙江</option>
                                                    <option value="河南">河南</option>
                                                    <option value="香港">香港</option>
                                                    <option value="湖北">湖北</option>
                                                    <option value="湖南">湖南</option>
                                                    <option value="江苏">江苏</option>
                                                    <option value="江西">江西</option>
                                                    <option value="吉林">吉林</option>
                                                    <option value="辽宁">辽宁</option>
                                                    <option value="澳门">澳门</option>
                                                    <option value="内蒙古">内蒙古</option>
                                                    <option value="宁夏">宁夏</option>
                                                    <option value="青海">青海</option>
                                                    <option value="山东">山东</option>
                                                    <option value="上海">上海</option>
                                                    <option value="山西">山西</option>
                                                    <option value="陕西">陕西</option>
                                                    <option value="四川">四川</option>
                                                    <option value="台湾">台湾</option>
                                                    <option value="天津">天津</option>
                                                    <option value="新疆">新疆</option>
                                                    <option value="西藏">西藏</option>
                                                    <option value="云南">云南</option>
                                                    <option value="浙江">浙江</option>
                                                    <option value="海外">海外</option>
                                                </select>
                                                <div class="i-block">
                                                    <select name="city" id="city" class="input-light brad" rel="{{ $data->city }}" style="width: 140px">
                                                        <option value="" id="select_city">----请选择城市----</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="title">{{ $resourceName }}名称</label>
                                            {{ $errors->first('title', '<span style="color:#c7254e;margin:0 1em;">:message</span>') }}
                                            <input class="form-control" type="text" name="title" id="title" value="{{ Input::old('title', $data->title) }}" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label for="price">{{ $resourceName }}单价（单位：元）</label>
                                            {{ $errors->first('price', '<span style="color:#c7254e;margin:0 1em;">:message</span>') }}
                                            <input class="form-control" type="text" name="price" id="price" value="{{ Input::old('price', $data->price) }}" />
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="quantity">{{ $resourceName }}剩余数量</label>
                                            {{ $errors->first('quantity', '<span style="color:#c7254e;margin:0 1em;">:message</span>') }}
                                            <input class="form-control" type="text" name="quantity" id="quantity" value="{{ Input::old('quantity', $data->quantity) }}" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="slug">Slug</label>
                                            {{ $errors->first('slug', '<span style="color:#c7254e;margin:0 1em;">:message</span>') }}
                                            <div class="input-group">
                                                <span class="input-group-addon" >
                                                    {{ str_finish(URL::to('/'), '/') }}
                                                </span>
                                                <input class="form-control" type="text" name="slug" id="slug" value="{{ Input::old('slug', $data->slug) }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="content">内容</label>
                                            {{ $errors->first('content', '<span style="color:#c7254e;margin:0 1em;">:message</span>') }}
                                            <textarea rows="10" id="editor11" class="ckeditor form-control" name="content" rows="10">{{ Input::old('content', $data->content) }}
                                            </textarea>
                                        </div>
                                    </div>

                                </div>

                                {{-- Meta Data tab --}}
                                <div class="tab-pane fade p-30" id="tab-meta-data" style="margin:0 1em;">

                                    <div class="form-group">
                                        <label for="meta_title">Meta Title</label>
                                        <input class="form-control" type="text" name="meta_title" id="meta_title" value="{{ Input::old('meta_title', $data->meta_title) }}" />
                                    </div>

                                    <div class="form-group">
                                        <label for="meta_description">Meta Description</label>
                                        <input class="form-control" type="text" name="meta_description" id="meta_description" value="{{ Input::old('meta_description', $data->meta_description) }}" />
                                    </div>

                                    <div class="form-group">
                                        <label for="meta_keywords">Meta Keywords</label>
                                        <input class="form-control" type="text" name="meta_keywords" id="meta_keywords" value="{{ Input::old('meta_keywords', $data->meta_keywords) }}" />
                                    </div>

                                </div>

                                {{-- Images Management tab --}}
                                <div class="tab-pane fade p-30" id="tab-images-management" style="margin:0 1em;">

                                    <div class="table-responsive form-group">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width:4em;text-align:center;">
                                                        <div class="icheckbox_flat-blue" aria-checked="false" aria-disabled="false">
                                                            <input type="checkbox" name="notification" value="" class="icheck">
                                                            <ins class="iCheck-helper"></ins>
                                                        </div>
                                                    </th>
                                                    <th>图片</th>
                                                    <th style="width:5em;text-align:center;">操作</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($product->pictures as $picture)
                                                <tr>
                                                    <td style="text-align:center; padding: 50px 0;">
                                                        <div class="icheckbox_flat-blue" aria-checked="false" aria-disabled="false">
                                                            <input type="checkbox" name="notification" value="" class="icheck">
                                                            <ins class="iCheck-helper"></ins>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <img width="100" height="100" src="{{ route('home') }}/uploads/products/{{ $picture->filename }}">
                                                    </td>
                                                    <td style="text-align:center; padding: 50px 0;">
                                                        <a href="javascript:void(0)" class="btn btn-xs btn-danger"
                                                        onclick="modal('{{ route($resource.'.deleteUpload', $picture->id) }}')">删除图片</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                {{-- Info tab --}}
                                <div class="tab-pane fade p-30" id="tab-info" style="margin:0 1em;">

                                    <div class="form-group">
                                        <label>作者</label>
                                        <p class="form-control-static">{{ $data->user ? $data->user->email : '作者信息丢失' }}</p>
                                    </div>

                                    <div class="form-group">
                                        <label>创建时间</label>
                                        <p class="form-control-static">{{ $data->created_at }}（{{ $data->friendly_created_at }}）</p>
                                    </div>

                                    <div class="form-group">
                                        <label>最后修改时间</label>
                                        <p class="form-control-static">{{ $data->updated_at }}（{{ $data->friendly_updated_at }}）</p>
                                    </div>

                                </div>

                            </div>

                            {{-- Form actions --}}
                            <div class="control-group p-lr-30 p-b-30">
                                <div class="controls">
                                    <a class="btn btn-bordered text-gray-alt" href="{{ route($resource.'.edit', $data->id) }}">重 置</a>
                                    <button type="submit" class="btn btn-success">更 新</button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="p-lr-30 p-tb-10 pm-lr-10">上传图片</div>
                    <div class="p-lr-30 p-tb-10 pm-lr-10">
                        <form action="{{ route($resource.'.postUpload', $data->id) }}" class="dropzone" id="upload" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- /main content --}}

    <?php
    $modalData['modal'] = array(
        'id'      => 'myModal',
        'title'   => '系统提示',
        'message' => '确认删除此图片？',
        'footer'  =>
            Form::open(array('id' => 'real-delete', 'method' => 'delete')).'
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">取消</button>
                <button type="submit" class="btn btn-sm btn-danger">确认删除</button>'.
            Form::close(),
    );
    ?>
    @include('layout.modal', $modalData)
    <script>
        function modal(href)
        {
            $('#real-delete').attr('action', href);
            $('#myModal').modal();
        }

        $("#province").val($("#province").attr("rel"));
        $('#select_city').each(function(){
            $(this).replaceWith('<option value="'+$("#city").attr("rel")+'">'+$("#city").attr("rel")+'</option>');
        });
    </script>
</body>
</html>