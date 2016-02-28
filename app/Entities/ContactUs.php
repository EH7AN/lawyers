<?php

namespace App\Entities;

use Kalnoy\Cruddy\Entity;

class ContactUs extends Entity {

    /**
     * @var string
     */
    protected $model = 'App\Contact_u';

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
        $schema->string('address');
        $schema->string('mobile');
        $schema->string('fax');
        $schema->string('tell');
        $schema->string('email');
        $schema->string('twitter');
        $schema->string('instagram');
        $schema->string('facebook');
        $schema->ckedit('about_us');

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
        $schema->col('address');
        $schema->col('mobile');
        
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
}