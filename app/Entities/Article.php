<?php

namespace App\Entities;

use Kalnoy\Cruddy\Entity;

class Article extends Entity {

    /**
     * @var string
     */
    protected $model = 'App\Article';

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
        $schema->string('author');
        $schema->text('short_desc');
        $schema->ckedit('description');
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
        $schema->col('author');
        $schema->col('picture')->format('Image', [ 'width' => 150,'height'=>150 ]);
        $schema->col('updated_at')->reversed();
    }
      protected function files($repo)
    {
        $repo->uploads('picture');
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