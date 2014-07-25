<?php

class Admin_TravelCategoriesResource extends BaseResource
{
    /**
     * Resource view directory
     * @var string
     */
    protected $resourceView = 'admin.travel_categories';

    /**
     * Model name of the resource, after initialization to a model instance
     * @var string|Illuminate\Database\Eloquent\Model
     */
    protected $model = 'TravelCategories';

    /**
     * Resource identification
     * @var string
     */
    protected $resource = 'travel_categories';

    /**
     * Resource database tables
     * @var string
     */
    protected $resourceTable = 'travel_categories';

    /**
     * Resource name (Chinese)
     * @var string
     */
    protected $resourceName = '去旅行话题';

    /**
     * Custom validation message
     * @var array
     */
    protected $validatorMessages = array(
        'name.required'       => '请填写分类名称。',
        'name.unique'         => '已有同名分类。',
        'sort_order.required' => '请填写分类排序。',
        'sort_order.integer'  => '请填写一个整数。',
    );

    /**
     * Resource list view
     * GET         /resource
     * @return Response
     */
    public function index()
    {
        $datas = $this->model->orderBy('sort_order')->paginate(15);
        return View::make($this->resourceView.'.index')->with(compact('datas'));
    }

    /**
     * Resource create action
     * POST        /resource
     * @return Response
     */
    public function store()
    {
        // Get all form data.
        $data   = Input::all();
        // Create validation rules
        $unique = $this->unique();
        $rules  = array(
            'name'       => 'required|'.$unique,
            'sort_order' => 'required|integer',
            'content'    => 'required|',
        );
        // Custom validation message
        $messages  = $this->validatorMessages;
        // Begin verification
        $validator = Validator::make($data, $rules, $messages);
        if ($validator->passes()) {
            // Verification success
            // Add resource
            $model = $this->model;
            $model->name       = e($data['name']);
            $model->sort_order = e($data['sort_order']);
            $model->content    = e($data['content']);
            if ($model->save()) {
                // Add success
                return Redirect::back()
                    ->with('success', '<strong>'.$this->resourceName.'添加成功：</strong>您可以继续添加新'.$this->resourceName.'，或返回'.$this->resourceName.'列表。');
            } else {
                // Add fail
                return Redirect::back()
                    ->withInput()
                    ->with('error', '<strong>'.$this->resourceName.'添加失败。</strong>');
            }
        } else {
            // Verification fail
            return Redirect::back()->withInput()->withErrors($validator);
        }
    }

    /**
     * Resource edit action
     * PUT/PATCH   /resource/{id}
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        // Get all form data.
        $data = Input::all();
        // Create validation rules
        $rules = array(
            'name'       => 'required|'.$this->unique('name', $id),
            'sort_order' => 'required|integer',
            'content'    => 'required|',
        );
        // Custom validation message
        $messages  = $this->validatorMessages;
        // Begin verification
        $validator = Validator::make($data, $rules, $messages);
        if ($validator->passes()) {
            // Verification success
            // Update resource
            $model = $this->model->find($id);
            $model->name       = e($data['name']);
            $model->sort_order = e($data['sort_order']);
            $model->content    = e($data['content']);
            if ($model->save()) {
                // Update success
                return Redirect::back()
                    ->with('success', '<strong>'.$this->resourceName.'Update success：</strong>您可以继续编辑'.$this->resourceName.'，或返回'.$this->resourceName.'列表。');
            } else {
                // Update fail
                return Redirect::back()
                    ->withInput()
                    ->with('error', '<strong>'.$this->resourceName.'Update fail。</strong>');
            }
        } else {
            // Verification fail
            return Redirect::back()->withInput()->withErrors($validator);
        }
    }

    /**
     * Action: Add resource images
     * @return Response
     */
    public function postUpload($id)
    {
        $input = Input::all();
        $rules = array(
            'file' => 'image|max:3000',
        );

        $validation = Validator::make($input, $rules);

        if ($validation->fails())
        {
            return Response::make($validation->errors->first(), 400);
        }

        $file              = Input::file('file');
        $destinationPath   = 'uploads/travel_category_thumbnails/';
        $ext               = $file->guessClientExtension();  // Get real extension according to mime type
        $fullname          = $file->getClientOriginalName(); // Client file name, including the extension of the client
        $hashname          = date('H.i.s').'-'.md5($fullname).'.'.$ext; // Hash processed file name, including the real extension

        $model             = $this->model->find($id);
        $oldThumbnails     = $model->thumbnails;
        $model->thumbnails = $hashname;
        $model->save();

        $thumbnails        = Image::make($file->getRealPath());
        $upload_success    = $thumbnails->fit(105, 105)->save(public_path($destinationPath.$hashname));

        File::delete(public_path('uploads/travel_category_thumbnails/'.$oldThumbnails));

        if( $upload_success ) {
           return Response::json('success', 200);
        } else {
           return Response::json('error', 400);
        }
    }

    /**
     * Action: Delete resource images
     * @return Response
     */
    public function deleteUpload($id)
    {
        // Only allow delete operations to the picture on the cover of the current resource
        $model      = $this->model->find($id);
        $thumbnails = $model->thumbnails;

        if (is_null($thumbnails))
            return Redirect::back()->with('error', '没有找到对应的图片');
        elseif ($thumbnails) {
        File::delete(public_path('uploads/travel_category_thumbnails/'.$thumbnails));
        $model->thumbnails = NULL;
        $model->save();
            return Redirect::back()->with('success', '图片删除成功。');
        }
        else
            return Redirect::back()->with('warning', '图片删除失败。');
    }
}
