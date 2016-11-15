<?php

class TypeMenu extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_type_menu;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $type_menu;

    /**
     *
     * @var integer
     * @Column(type="integer", length=2, nullable=true)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $created_at;

    /**
     * Method to set the value of field id_type_menu
     *
     * @param integer $id_type_menu
     * @return $this
     */
    public function setIdTypeMenu($id_type_menu)
    {
        $this->id_type_menu = $id_type_menu;

        return $this;
    }

    /**
     * Method to set the value of field type_menu
     *
     * @param string $type_menu
     * @return $this
     */
    public function setTypeMenu($type_menu)
    {
        $this->type_menu = $type_menu;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field created_at
     *
     * @param string $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Returns the value of field id_type_menu
     *
     * @return integer
     */
    public function getIdTypeMenu()
    {
        return $this->id_type_menu;
    }

    /**
     * Returns the value of field type_menu
     *
     * @return string
     */
    public function getTypeMenu()
    {
        return $this->type_menu;
    }

    /**
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_type_menu', 'Menu', 'id_type_menu', ['alias' => 'Menu']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return TypeMenu[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return TypeMenu
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'type_menu';
    }

}
