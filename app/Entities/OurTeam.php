<?php

namespace App\Entities;

use Kalnoy\Cruddy\Entity;

class OurTeam extends Entity {

    /**
     * @var string
     */
    protected $model = 'App\Our_team';

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
        $schema->string('lawyer_name');
        $schema->text('lawyer_intro');
        $schema->string('lawyer_post');
        $schema->image('lawyer_picture');
        $schema->string('lawyer_twitter');
        $schema->string('lawyer_facebook');
        $schema->string('lawyer_linkedin');
        $schema->string('lawyer_instagram');
        $schema->string('lawyer_mobile');
        $schema->string('lawyer_email');
        $schema->string('lawyer_website');
        $schema->string('lawyer_phone');
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
        $schema->col('lawyer_name');
        $schema->col('lawyer_picture')->format('Image', [ 'width' => 150,'height'=>150 ]);
        $schema->col('lawyer_post');
        $schema->col('lawyer_mobile');
        $schema->col('updated_at')->reversed();
    }
     protected function files($repo)
    {
        $repo->uploads('lawyer_picture');
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