<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\student;

class studentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'student Deshboard';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {

        $grid = new Grid(new student());
            $grid->quickCreate(function (Grid\Tools\QuickCreate $create) {
                $create->text('name', 'Name');
                $create->email('email', 'Email');
            });


        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('class', __('Class'));
        $grid->column('address', __('Address'));
        $grid->column('fee', __('Fee'));
        $grid->column('img')->image(0, 60);
        $grid->quickSearch('name');
        $grid->actions(function (Grid\Displayers\Actions\Actions $actions) {
            $actions->disableEdit();
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
        $show = new Show(student::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('class', __('Class'));
        $show->field('address', __('Address'));
        $show->field('fee', __('Fee'));
        $show->field('img', __('Img'));
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
        $form = new Form(new student());
        $form->text('name', __('Name'));
        $form->text('class', __('Class'));
        $form->text('address', __('Address'));
        $form->number('fee', __('Fee'));
        $form->image('img', __('Img'));
        return $form;
    }
}
