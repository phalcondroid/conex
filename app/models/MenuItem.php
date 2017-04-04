<?php

use \Phalcon\Mvc\Model\Relation;

class MenuItem extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_menu_item;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_menu;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $menu_item;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $label;

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
     * Method to set the value of field id_menu_item
     *
     * @param integer $id_menu_item
     * @return $this
     */
    public function setIdMenuItem($id_menu_item)
    {
        $this->id_menu_item = $id_menu_item;

        return $this;
    }

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
     * Method to set the value of field menu_item
     *
     * @param string $menu_item
     * @return $this
     */
    public function setMenuItem($menu_item)
    {
        $this->menu_item = $menu_item;

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
     * Returns the value of field id_menu_item
     *
     * @return integer
     */
    public function getIdMenuItem()
    {
        return $this->id_menu_item;
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
     * Returns the value of field menu_item
     *
     * @return string
     */
    public function getMenuItem()
    {
        return $this->menu_item;
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
        $this->belongsTo('id_action', 'Action', 'id_action', [
            'alias' => 'Action',
            "foreignKey" => array(
                "action" => Relation::ACTION_CASCADE,
            )
        ]);
        $this->belongsTo('id_menu', 'Menu', 'id_menu', [
            'alias' => 'Menu',
            "foreignKey" => array(
                "action" => Relation::ACTION_CASCADE,
            )
        ]);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MenuItem[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MenuItem
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
        return 'menu_item';
    }

}
