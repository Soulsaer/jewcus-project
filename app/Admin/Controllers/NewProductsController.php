<?php

namespace App\Admin\Controllers;

use App\Models\NewProduct;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NewProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'NewProduct';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new NewProduct());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('price', __('Price'));
        $grid->column('image', __('Image'))->image('',50,50); // Display the image
        $grid->column('description', __('Description'));
        // $grid->column('categories_ids', __('Categories ids'));
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
        $show = new Show(NewProduct::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('price', __('Price'));
        $show->field('image', __('Image'));
        $show->field('description', __('Description'));
        $show->field('categories_ids', __('Categories ids'));
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
        $form = new Form(new NewProduct());
        $categories = \App\Models\Category::pluck('name', 'id');

        $form->text('name', __('Name'));
        $form->number('price', __('Price'));
        $form->image('image', __('Image'))->uniqueName()->downloadable()->move('product_img')->rules('required');;
        $form->text('description', __('Description'));
        $form->select('categories_ids', __('Category'))->options($categories);

        return $form;
    }
}
