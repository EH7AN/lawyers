<?php

namespace App\Entities;

use Kalnoy\Cruddy\Entity;

class activityFields extends Entity {

    /**
     * @var string
     */
    protected $model = 'App\Activity_field';

    /**
     * The name of the column that is used to convert a model to a string.
     *
     * @var string
     */
    protected $titleAttribute = null;

    /**
     * The name of the column that will sort data by default.
     *
     * @var string
     */
    protected $defaultOrder = null;

    /**
     * Define some fields.
     *
     * @param \Kalnoy\Cruddy\Schema\Fields\InstanceFactory $schema
     */
    public function fields($schema)
    {
        $schema->increments('id');
        $schema->string('activity_title');
        $schema->string('activity_desc');
        $schema->string('activity_logo');;

        $schema->timestamps();
    }

    /**
     * Define some columns.
     *
     * @param \Kalnoy\Cruddy\Schema\Columns\InstanceFactory $schema
     */
    public function columns($schema)
    {
        $schema->col('id');
        $schema->col('activity_title');
        $schema->col('activity_desc');
        $schema->col('activity_logo');
        $schema->col('updated_at')->reversed();
    }

    /**
     * Define validation rules.
     *
     * @param \Kalnoy\Cruddy\Service\Validation\FluentValidator $v
     */
    public function rules($v)
    {
        $v->always([

        ]);
    }
    // protected function files($repo)
    // {
    //     $repo->uploads('activity_logo');
    // }
//     protected static function boot()
//     {
//     parent::boot();

//     // Remove image file when model is deleted
//     static::deleted(function ($model)
//     {
//         if ($model->Activity_field) File::delete(public_path($model->Activity_field));
//     });
// }
}