<?php

namespace App\Entities;

use Kalnoy\Cruddy\Entity;

class MainSlider extends Entity {

    /**
     * @var string
     */
    protected $model = 'App\Main_slider';

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
        $schema->string('title');
        $schema->string('short_desc');
        $schema->text('long_desc');
        $schema->image('picture');
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
        $schema->col('title');
        $schema->col('short_desc');
        $schema->col('picture')->format('picture');
        $schema->col('updated_at')->reversed();
    }
    
    /*
     * To upload image
     */
     protected function files($repo)
    {
        $repo->uploads('picture');
    }
      protected static function boot()
    {
    parent::boot();

    // Remove image file when model is deleted
    static::deleted(function ($model)
    {
        if ($model->Activity_field) File::delete(public_path($model->Activity_field));
    });
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
}