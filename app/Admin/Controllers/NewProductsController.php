<?php

namespace App\Admin\Controllers;

use App\Models\NewProduct;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\MetalVariant;

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
        $grid->column('price_in_india', __('Price in India'));
        $grid->column('price_in_us', __('Price in US'));
        $grid->column('special_price_india', __('Special Price in India'));
        $grid->column('special_price_us', __('Special Price in US'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('product_weight', __('Product Weight'));
        $grid->column('metal', __('Metal'));
        $grid->column('gemstones', __('Gemstones'));
        $grid->column('plating', __('Plating'));
        $grid->column('setting', __('Setting'));
        $grid->column('stone_shape', __('Stone Shape'));
        $grid->column('stock_status', __('Stock Status'));
        $grid->column('image', __('Image'))->image('', 50, 50); // Display the image
        $grid->column('description', __('Description'));
        $grid->column('meta_title', __('Meta Title'));
        $grid->column('meta_description', __('Meta Description'));
        $grid->column('url_key', __('URL Key'));
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
        $show->field('price_in_india', __('Price in India'));
        $show->field('price_in_us', __('Price in US'));
        $show->field('special_price_india', __('Special Price in India'));
        $show->field('special_price_us', __('Special Price in US'));
        $show->field('quantity', __('Quantity'));
        $show->field('product_weight', __('Product Weight'));
        $show->field('metal', __('Metal'));
        $show->field('gemstones', __('Gemstones'));
        $show->field('plating', __('Plating'));
        $show->field('setting', __('Setting'));
        $show->field('stone_shape', __('Stone Shape'));
        $show->field('stock_status', __('Stock Status'));
        $show->field('image', __('Image'));
        $show->field('description', __('Description'));
        $show->field('meta_title', __('Meta Title'));
        $show->field('meta_description', __('Meta Description'));
        $show->field('url_key', __('URL Key'));
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
        $metalvariant = \App\Models\MetalVariant::pluck('name', 'id');
        $gemstonevariant = \App\Models\GemstoneVariant::pluck('name', 'id');

        $form->select('categories_ids', __('Category'))->options($categories);
        $form->text('name', __('Name'));
        $form->decimal('price_in_india', __('Price in India'))->rules('required');
        $form->decimal('price_in_us', __('Price in US'))->rules('required');
        $form->decimal('special_price_india', __('Special Price in India'));
        $form->decimal('special_price_us', __('Special Price in US'));
        $form->number('quantity', __('Quantity'))->default(0);
        $form->decimal('product_weight', __('Product Weight'), 8, 2);
        $form->select('metal', __('Metal'))->options($metalvariant);
        $form->select('gemstones', __('Gemstones'))->options($gemstonevariant);
        $form->text('plating', __('Plating'));
        $form->text('setting', __('Setting'));
        $form->text('stone_shape', __('Stone Shape'));
        $form->switch('stock_status', __('Stock Status'))->states([
            'on'  => ['value' => 1, 'text' => 'In Stock', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Out of Stock', 'color' => 'danger'],
        ])->default(1);
        
        $form->image('image', __('Image'))->uniqueName()->downloadable()->move('product_img')->rules('required');
        $form->ckeditor('description', __('Description'));
        $form->textarea('meta_title', __('Meta Title'));
        $form->ckeditor('meta_description', __('Meta Description'));
        $form->text('url_key', __('URL Key'))->rules('required|unique:new_products,url_key');

        return $form;
    }
}
