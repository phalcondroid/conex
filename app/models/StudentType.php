<?php

class StudentType extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_student_type;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    public $student_type;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    /**
     * Method to set the value of field id_student_type
     *
     * @param integer $id_student_type
     * @return $this
     */
    public function setIdStudentType($id_student_type)
    {
        $this->id_student_type = $id_student_type;

        return $this;
    }

    /**
     * Method to set the value of field student_type
     *
     * @param string $student_type
     * @return $this
     */
    public function setStudentType($student_type)
    {
        $this->student_type = $student_type;

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
     * Returns the value of field id_student_type
     *
     * @return integer
     */
    public function getIdStudentType()
    {
        return $this->id_student_type;
    }

    /**
     * Returns the value of field student_type
     *
     * @return string
     */
    public function getStudentType()
    {
        return $this->student_type;
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
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return StudentType[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return StudentType
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
        return 'student_type';
    }

}
