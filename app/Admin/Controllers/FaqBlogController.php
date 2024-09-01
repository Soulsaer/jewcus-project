<?php

namespace App\Admin\Controllers;

use App\Models\FaqBlog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FaqBlogController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'FaqBlog';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
{
    $grid = new Grid(new FaqBlog());

    $grid->column('id', __('Id'))->sortable();
    $grid->column('midblog_image', __('Image'))->image('', 100, 100);
    $grid->column('banner_heading', __('Banner Heading'))->sortable();
    $grid->column('author', __('Author'))->sortable();
    $grid->column('date', __('Date'))->sortable();
    $grid->column('description', __('Description'))->limit(50);
    $grid->column('status', __('Status'))->using([1 => 'Active', 0 => 'Inactive'])->label([
        1 => 'success',
        0 => 'danger',
    ]);

    return $grid;
}


    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(FaqBlog::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('midblog_image', __('Midblog image'));
        $show->field('banner_heading', __('Banner heading'));
        $show->field('slug', __('Slug'));
        $show->field('author', __('Author'));
        $show->field('date', __('Date'));
        $show->field('description', __('Description'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form(){
        $form = new Form(new FaqBlog());
    
        $form->image('midblog_image', __('Image'))->uniqueName()->move('faq_images')->rules('required');
        $form->text('banner_heading', __('Banner Heading'))->rules('required');
        $form->text('slug', __('Slug'))->rules('required|unique:faq_blogs,slug');
        $form->text('author', __('Author'))->rules('required');
        $form->date('date', __('Date'))->default(date('Y-m-d'))->rules('required');
        $form->textarea('description', __('Description'))->rules('required');
        $form->switch('status', __('Status'))->default(1);
    
        return $form;
    }
    
}
