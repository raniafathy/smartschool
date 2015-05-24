<?php 

namespace Acme\DemoBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="teacher")
 */

class Teacher
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
    * @ORM\Column(type="string", length=40)
   */
   protected $code;

   /**
    * @Assert\NotBlank
    * @ORM\Column(type="string", length=200)
   */
   protected $fullname;

   /**
    * @Assert\NotBlank
    * @ORM\Column(type="string", length=200)
   */
   protected $job;

   /**
    * @Assert\NotBlank
    * @ORM\Column(type="string", length=200)
   */
   protected $graduate;

   /**
    * @Assert\NotBlank
    * @ORM\Column(type="date")
   */
   protected $date_of_graduate;
  
   /**
    * @Assert\NotBlank
    * @ORM\Column(type="date")    
   */
   protected $birthday;

   /**
    * @Assert\NotBlank
    * @ORM\Column(type="date")
   */
   protected $appointment_date;

   /**
    * @Assert\NotBlank
    * @ORM\Column(type="date")
   */
   protected $join_date;

   /**
    * @Assert\NotBlank
    * @ORM\Column(type="string", length=200)
   */
   protected $degree;

   /**
    * @Assert\NotBlank
    * @ORM\Column(type="date")
   */
   protected $date_of_get_degree;

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
     * Set code
     *
     * @param string $code
     * @return Teacher
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     * @return Teacher
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
     * Set job
     *
     * @param string $job
     * @return Teacher
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set graduate
     *
     * @param string $graduate
     * @return Teacher
     */
    public function setGraduate($graduate)
    {
        $this->graduate = $graduate;

        return $this;
    }

    /**
     * Get graduate
     *
     * @return string 
     */
    public function getGraduate()
    {
        return $this->graduate;
    }

    /**
     * Set date_of_graduate
     *
     * @param \DateTime $dateOfGraduate
     * @return Teacher
     */
    public function setDateOfGraduate($dateOfGraduate)
    {
        $this->date_of_graduate = $dateOfGraduate;

        return $this;
    }

    /**
     * Get date_of_graduate
     *
     * @return \DateTime 
     */
    public function getDateOfGraduate()
    {
        return $this->date_of_graduate;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Teacher
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
     * Set appointment_date
     *
     * @param \DateTime $appointmentDate
     * @return Teacher
     */
    public function setAppointmentDate($appointmentDate)
    {
        $this->appointment_date = $appointmentDate;

        return $this;
    }

    /**
     * Get appointment_date
     *
     * @return \DateTime 
     */
    public function getAppointmentDate()
    {
        return $this->appointment_date;
    }

    /**
     * Set join_date
     *
     * @param \DateTime $joinDate
     * @return Teacher
     */
    public function setJoinDate($joinDate)
    {
        $this->join_date = $joinDate;

        return $this;
    }

    /**
     * Get join_date
     *
     * @return \DateTime 
     */
    public function getJoinDate()
    {
        return $this->join_date;
    }

    /**
     * Set degree
     *
     * @param string $degree
     * @return Teacher
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;

        return $this;
    }

    /**
     * Get degree
     *
     * @return string 
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Set date_of_get_degree
     *
     * @param \DateTime $dateOfGetDegree
     * @return Teacher
     */
    public function setDateOfGetDegree($dateOfGetDegree)
    {
        $this->date_of_get_degree = $dateOfGetDegree;

        return $this;
    }

    /**
     * Get date_of_get_degree
     *
     * @return \DateTime 
     */
    public function getDateOfGetDegree()
    {
        return $this->date_of_get_degree;
    }

    /**
     * Set national_id
     *
     * @param integer $nationalId
     * @return Teacher
     */
    public function setNationalId($nationalId)
    {
        $this->national_id = $nationalId;

        return $this;
    }

    /**
     * Get national_id
     *
     * @return integer 
     */
    public function getNationalId()
    {
        return $this->national_id;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Teacher
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
     * @return Teacher
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
