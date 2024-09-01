<?php

namespace App\Admin\Controllers;

use App\Models\SectionImage;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SectionImageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SectionImage';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SectionImage());

        $grid->column('id', __('Id'));
        $grid->column('section_1_images', __('Section 1 images'))->image();
        $grid->column('section_1_images_alt', __('Section 1 images alt'));
        $grid->column('section_1_images_url', __('Section 1 images url'));
        $grid->column('section_1_images_text', __('Section 1 images text'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(SectionImage::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('section_1_images', __('Section 1 images'));
        $show->field('section_1_images_alt', __('Section 1 images alt'));
        $show->field('section_1_images_url', __('Section 1 images url'));
        $show->field('section_1_images_text', __('Section 1 images text'));
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
    $form = new Form(new SectionImage());

    $form->image('section_1_images', __('Section 1 Images'))
        ->uniqueName() 
        ->downloadable() 
        ->move('section_img') 
        ->rules('required'); 

    $form->text('section_1_images_alt', __('Section 1 Images Alt'))
        ->rules('required'); 

    $form->text('section_1_images_url', __('Section 1 Images URL'));

    $form->text('section_1_images_text', __('Section 1 Images Text'))
        ->rules('nullable'); 

    return $form;
}

}
