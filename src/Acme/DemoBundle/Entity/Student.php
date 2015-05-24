<?php 

namespace Acme\DemoBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="student")
 */

class Student
{

//defination of variables 
/************************/
   /**
    * @ORM\Column(type="integer", length=40)
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
   */
    protected $id;


   /**
    * @Assert\NotBlank
    * @ORM\Column(type="string", length=200)
   */
   protected $fullname;

   /**
    * @Assert\NotBlank
    * @ORM\Column(type="string", length=200)
   */
   protected $father_job;

  
   /**
    * @Assert\NotBlank
    * @ORM\Column(type="date")    
   */
   protected $birthday;

    /**
    * @Assert\NotBlank
    * @ORM\Column(type="string", length=200)
   */
   protected $national_id;

   /**
    * @Assert\NotBlank
    * @ORM\Column(type="string", length=200)
   */
   protected $address;

   /**
    * @Assert\NotBlank
    * @ORM\Column(type="string", length=200)
   */
   protected $phone;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     * @return Student
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set father_job
     *
     * @param string $fatherJob
     * @return Student
     */
    public function setFatherJob($fatherJob)
    {
        $this->father_job = $fatherJob;

        return $this;
    }

    /**
     * Get father_job
     *
     * @return string 
     */
    public function getFatherJob()
    {
        return $this->father_job;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Student
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set national_id
     *
     * @param string $nationalId
     * @return Student
     */
    public function setNationalId($nationalId)
    {
        $this->national_id = $nationalId;

        return $this;
    }

    /**
     * Get national_id
     *
     * @return string 
     */
    public function getNationalId()
    {
        return $this->national_id;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Student
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Student
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }
}
