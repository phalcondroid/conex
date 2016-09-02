<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class UserEmail extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_user_email;

    /**
     *
     * @var integer
     */
    public $id_users;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $domain;

    /**
     *
     * @var string
     */
    public $created_at;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('id_users', 'Users', 'id_users', array('alias' => 'Users'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_email';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserEmail[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserEmail
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
