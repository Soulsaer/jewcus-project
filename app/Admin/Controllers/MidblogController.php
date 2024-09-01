<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\Midblog;
use Carbon\Carbon;

class MidblogController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'FAQs';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Midblog());

        $grid->column('id', __('Id'));
        $grid->column('midblog_image', __('Image'))->image('', 100, 100);
        $grid->column('banner_heading', __('Banner Heading'));
        $grid->column('slug', __('Slug'));
        $grid->column('author', __('Author'));
        $grid->column('status', __('Status'))->icon([
            0 => 'toggle-off',
            1 => 'toggle-on',
        ], $default = '');
        $grid->column('created_at', __('Created at'))->display(function($date) {
            return Carbon::parse($date)->format(config('.datetime_format'));
        });
        $grid->column('updated_at', __('Updated at'))->display(function($date) {
            return Carbon::parse($date)->format(config('jewcus.datetime_format'));
        });

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
        $show = new Show(Midblog::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('midblog_image', __('Image'));
        $show->field('banner_heading', __('Banner heading'));
        $show->field('slug', __('Slug'));
        $show->field('author', __('Author'));
        $show->field('date', __('Date'));
        $show->field('meta_title', __('Meta title'));
        $show->field('meta_description', __('Meta description'));
        $show->field('meta_keyword', __('Meta keyword'));
        $show->field('other_meta', __('Other meta'));
        $show->field('description', __('Description'));
        $show->field('status', __('Status'));
        $show->field('alt', __('Alt'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Midblog());

        $form->text('midblog_image', __('Image'))->uniqueName()->downloadable()->move('Faq_image');
        $form->text('banner_heading', __('Banner Heading'));
        $form->text('slug', __('Slug'));
        $form->text('author', __('Author'));
        $form->text('date', __('Date'));
        $form->text('meta_title', __('Meta title'));
        $form->textarea('meta_description', __('Meta description'));
        $form->textarea('meta_keyword', __('Meta keyword'));
        $form->textarea('other_meta', __('Other meta'));
        $form->ckeditor('description', __('Description'));
        $form->switch('status', __('Status'));
        $form->text('alt', __('Alt'));

        return $form;
    }
}
