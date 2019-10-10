<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SubjectRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SubjectCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class SubjectCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Subject');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/subject');
        $this->crud->setEntityNameStrings('subject', 'subjects');

    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
        $this->crud->addColumn([
          'name' => 'subject_code',
          'label' => 'Subject Code',
          'type' => 'text'
        ]);
        $this->crud->addColumn([
          'name' => 'subject_description',
          'label' => 'Subject Description',
          'type' => 'text'
        ]);
        //$this->crud->removeColumn('subject_id');
        //$this->crud->setColumnsDetails(['subject_code', 'subject_description'], ['attribute' => 'value']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(SubjectRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();
        $this->crud->removeField('id');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
