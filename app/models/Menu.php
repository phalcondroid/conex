<?php

use \Phalcon\Mvc\Model\Relation;

class Menu extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_menu;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_type_menu;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_role;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $label;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $default;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $logo;

    /**
     *
     * @var integer
     * @Column(type="integer", length=2, nullable=false)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $created_at;

    /**
     * Method to set the value of field id_menu
     *
     * @param integer $id_menu
     * @return $this
     */
    public function setIdMenu($id_menu)
    {
        $this->id_menu = $id_menu;

        return $this;
    }

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
     * Method to set the value of field id_role
     *
     * @param integer $id_role
     * @return $this
     */
    public function setIdRole($id_role)
    {
        $this->id_role = $id_role;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field label
     *
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Method to set the value of field default
     *
     * @param string $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Method to set the value of field logo
     *
     * @param string $logo
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

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
     * Returns the value of field id_menu
     *
     * @return integer
     */
    public function getIdMenu()
    {
        return $this->id_menu;
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
     * Returns the value of field id_role
     *
     * @return integer
     */
    public function getIdRole()
    {
        return $this->id_role;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Returns the value of field default
     *
     * @return string
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Returns the value of field logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
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
     *
     */
    public function beforeDelete() {
        $behavior = new \Phalcon\Mvc\Model\Behavior\SoftDelete(array(
            'field' => 'status',
            'value' => '0'
        ));
        $this->addBehavior($behavior);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id_menu', 'MenuItem', 'id_menu', [
            'alias' => 'MenuItem',
            "foreignKey" => array(
                "action" => Relation::ACTION_CASCADE,
            )
        ]);
        $this->hasMany('id_menu', 'Permissions', 'id_menu', [
            'alias' => 'Permissions',
            "foreignKey" => array(
                "action" => Relation::ACTION_CASCADE,
            )
        ]);
        $this->belongsTo('id_controller', 'Controller', 'id_controller', [
            'alias' => 'Controller',
            "foreignKey" => array(
                "action" => Relation::ACTION_CASCADE,
            )
        ]);
        $this->belongsTo('id_role', 'Role', 'id_role', [
            'alias' => 'Role',
            "foreignKey" => array(
                "action" => Relation::ACTION_CASCADE,
            )
        ]);
        $this->belongsTo('id_type_menu', 'TypeMenu', 'id_type_menu', [
            'alias' => 'TypeMenu',
            "foreignKey" => array(
                "action" => Relation::ACTION_CASCADE,
            )
        ]);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Menu[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Menu
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
        return 'menu';
    }

}
