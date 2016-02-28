<?php

namespace App\Entities;

use Kalnoy\Cruddy\Entity;

class Introduction extends Entity {

    /**
     * @var string
     */
    protected $model = 'App\Introduction';

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
        $schema->string('intro_slider_desc');
        $schema->image('intro_slider_pic');
        $schema->image('intro_logo');
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
        $schema->col('intro_slider_desc');
        $schema->col('intro_logo')->format('Image', [ 'width' => 150,'height'=>150 ]);
        $schema->col('updated_at')->reversed();
    }
      protected function files($repo)
    {
        $repo->uploads('intro_slider_pic');
        $repo->uploads('intro_logo');
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