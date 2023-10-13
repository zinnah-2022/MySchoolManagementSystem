<?php

namespace App\Admin\Controllers;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\category;

class categoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'category';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new category());
        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'))->width(200);
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->paginate(2);
        $grid->quickSearch('name');
        $grid->column('Id')->totalRow();
        $grid->enableHotKeys();
        return $grid;
    }

    /**
     * Make a show builder.

     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(category::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->divider();
        $show->field("mama","maja")->link($href = 'www.facebook.com', $target = '_blank');
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new category());
            $form->text('name', __('name'));
        $form->setAction('/my_pdf')->target('__blank');
        $form->submitted(function (Form $form) {
            return redirect('/my_pdf');
        });
        return $form;
    }
}
