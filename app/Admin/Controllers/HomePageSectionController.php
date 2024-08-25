<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\HomePageSection;

class HomePageSectionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Home Page Sections';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HomePageSection());

        $grid->column('id', __('Id'));
        $grid->column('section_1_heading', __('Section 1 Heading'));
        $grid->column('section_1_sub_heading', __('Section 1 Sub Heading'));
        $grid->column('section_1_images', __('Section 1 Images'))->image('', 100, 100); // Display image with 100x100 size

        $grid->column('section_4_heading', __('Section 4 Heading'));
        $grid->column('section_4_sub_heading', __('Section 4 Sub Heading'));
        $grid->column('section_4_image', __('Section 4 Image'))->image('', 100, 100); // Display image with 100x100 size
        $grid->column('section_4_video', __('Section 4 Video'));
        $grid->column('section_4_btn_text', __('Button Text'));
        $grid->column('section_4_btn_url', __('Button URL'));

        $grid->column('section_8_heading', __('Section 8 Heading'));
        $grid->column('section_8_sub_heading', __('Section 8 Sub Heading'));

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
        $show = new Show(HomePageSection::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('section_1_heading', __('Section 1 Heading'));
        $show->field('section_1_sub_heading', __('Section 1 Sub Heading'));
        $show->field('section_1_images', __('Section 1 Images'))->image(); // Display full-size image

        $show->field('section_4_heading', __('Section 4 Heading'));
        $show->field('section_4_sub_heading', __('Section 4 Sub Heading'));
        $show->field('section_4_image', __('Section 4 Image'))->image(); // Display full-size image
        $show->field('section_4_video', __('Section 4 Video'));
        $show->field('section_4_btn_text', __('Button Text'));
        $show->field('section_4_btn_url', __('Button URL'));

        $show->field('section_8_heading', __('Section 8 Heading'));
        $show->field('section_8_sub_heading', __('Section 8 Sub Heading'));

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
        $form = new Form(new HomePageSection());

        $form->text('page_name', __('Page Name'));

        $form->tab('Section-1', function (Form $form) {
            $form->text('section_1_heading', __('Section 1 Heading'));
            $form->text('section_1_sub_heading', __('Section 1 Sub Heading'));

            // Embedded form for images with metadata
            $form->embeds('section_1_images','Images' ,function ($form) {
                $form->image('image', __('Image'))->uniqueName()->move('home_image');
                $form->text('alt', __('Alt Text'));
                $form->text('url', __('URL'));
                $form->text('text', __('Text'));
            });
        });

        $form->tab('Section-4', function (Form $form) {
            $form->text('section_4_heading', __('Section 4 Heading'));
            $form->text('section_4_sub_heading', __('Section 4 Sub Heading'));
            $form->image('section_4_image', __('Section 4 Image'))->uniqueName()->move('home_image');
            $form->file('section_4_video', __('Section 4 Video'))->uniqueName()->move('home_video');
            $form->text('section_4_btn_text', __('Button Text'));
            $form->text('section_4_btn_url', __('Button URL'));
        });

        $form->tab('Section-8', function (Form $form) {
            $form->text('section_8_heading', __('Section 8 Heading'));
            $form->text('section_8_sub_heading', __('Section 8 Sub Heading'));
        });


        return $form;
    }


}
