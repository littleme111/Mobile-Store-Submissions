<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\David;
use AppBundle\Entity\Form;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\EventDispatcher\EventDispatcher;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;


/**
 * Form
 *
 * @ORM\Table(name="form")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormRepository")
 */
class Form extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('android', CheckboxType::class, ['required' => false])
            ->add('ios', CheckboxType::class, array(
            	'required' => false
						))
            ->add('appName', TextType::class, array(
                'label' => 'Nom de l\'application',
                'required' => 'true'
            ))

            ->add('version', TextType::class, ['required' => false])
            ->add('countries', TextType::class, ['required' => false])
            ->add('descShort', TextAreaType::class, ['required' => false])
            ->add('descLong', TextareaType::class, ['required' => false])
            ->add('appUpdate', CheckboxType::class, ['required' => false])
            ->add('updateChanges', TextAreaType::class, ['required' => false])
            ->add('keywords', TextAreaType::class, ['required' => false])

            ->add('imgA1', FileType::class, ['required' => false, 'label' => 'Image Android 1 : '])
					->add('imgA2', FileType::class,	['required' => false,'label' => 'Image Android 2 : '])
					->add('imgA3', FileType::class, ['required' => false, 'label' => 'Image Android 3 : '])
					->add('imgI1', FileType::class, ['required' => false, 'label' => 'Image iPhone n°1 : '])
					->add('imgI2', FileType::class, ['required' => false, 'label' => 'Image iPhone n°2'])
					->add('imgI3', FileType::class, ['required' => false, 'label' => 'Image iPhone n°3'])

					->add('tablette', CheckboxType::class, ['mapped' => FALSE])
					->add('imgAT1', FileType::class, ['required' => false, 'label' => 'Image Tablette n°1 '])
					->add('imgAT2', FileType::class, ['required' => false, 'label' => 'Image Tablette n°2 '])
					->add('imgAT3', FileType::class, ['required' => false, 'label' => 'Image Tablette n°2 '])
					->add('ipad', CheckboxType::class, ['mapped' => FALSE])
					->add('imgAI1', FileType::class, ['required' => false, 'label' => 'Image Ipad n° 1'])
					->add('imgAI2', FileType::class, ['required' => false, 'label' => 'Image Ipad n° 2'])
					->add('imgAI3', FileType::class, ['required' => false, 'label' => 'Image Ipad n° 3'])
            ->add('webUrl', TextType::class, ['required' => false])
            ->add('assistanceUrl', TextType::class, ['required' => false])
            ->add('email', TextType::class, ['required' => false])
            ->add('rules', TextType::class, ['required' => false])
            ->add('marketingUrl', TextType::class, ['required' => false])
            ->add('copyright', TextType::class, ['required' => false])
            ->add('save', SubmitType::class)
						->add('author', TextType::class)
        ;
    }










    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="android", type="boolean", nullable=true)
     */
    private $android;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ios", type="boolean", nullable=true)
     */
    private $ios;

    /**
     * @var string
     *
     * @ORM\Column(name="appName", type="string", length=100)
     */
    private $appName;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=50, nullable=true)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="countries", type="string", length=255, nullable=true)
     */
    private $countries;

    /**
     * @var string
     *
     * @ORM\Column(name="descShort", type="string", length=80, nullable=true)
     */
    private $descShort;

    /**
     * @var string
     *
     * @ORM\Column(name="descLong", type="text", nullable=true)
     */
    private $descLong;

    /**
     * @var bool
     *
     * @ORM\Column(name="appUpdate", type="boolean", nullable=true)
     */
    private $appUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="updateChanges", type="text", nullable=true)
     */
    private $updateChanges;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=100, nullable=true)
     */
    private $keywords;

    /**
     * @var bool
     *
     * @ORM\Column(name="imgA1", type="boolean", nullable=true)
     */
    private $imgA1;

    /**
     * @var bool
     *
     * @ORM\Column(name="imgA2", type="boolean", nullable=true)
     */
    private $imgA2;

    /**
     * @var bool
     *
     * @ORM\Column(name="imgA3", type="boolean", nullable=true)
     */
    private $imgA3;

    /**
     * @var bool
     *
     * @ORM\Column(name="imgI1", type="boolean", nullable=true)
     */
    private $imgI1;

    /**
     * @var bool
     *
     * @ORM\Column(name="imgI2", type="boolean", nullable=true)
     */
    private $imgI2;

    /**
     * @var string
     *
     * @ORM\Column(name="imgI3", type="string", length=255, nullable=true)
     */
    private $imgI3;

    /**
     * @var bool
     *
     * @ORM\Column(name="imgAT1", type="boolean", nullable=true)
     */
    private $imgAT1;

    /**
     * @var bool
     *
     * @ORM\Column(name="imgAT2", type="boolean", nullable=true)
     */
    private $imgAT2;

    /**
     * @var bool
     *
     * @ORM\Column(name="imgAT3", type="boolean", nullable=true)
     */
    private $imgAT3;

    /**
     * @var bool
     *
     * @ORM\Column(name="imgAI1", type="boolean", nullable=true)
     */
    private $imgAI1;

    /**
     * @var bool
     *
     * @ORM\Column(name="imgAI2", type="boolean", nullable=true)
     */
    private $imgAI2;

    /**
     * @var bool
     *
     * @ORM\Column(name="imgAI3", type="boolean", nullable=true)
     */
    private $imgAI3;


    /**
     * @var string
     * @ORM\Column(name="webUrl", type="string", length=100, nullable=true)
     */
    private $webUrl;

    /**
     * @var string
     * @ORM\Column(name="assistanceUrl", type="string", length=100, nullable=true)
     */
    private $assistanceUrl;

    /**
     * @var string
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="rules", type="string", length=100, nullable=true)
     */
    private $rules;

    /**
     * @var string
     * @ORM\Column(name="marketingUrl", type="string", length=100, nullable=true)
     */
    private $marketingUrl;

    /**
     * @var string
     * @ORM\Column(name="copyright", type="string", length=100, nullable=true)
     */
    private $copyright;

	/**
	 * @var string
	 * @ORM\Column(name="author", type="string", length=100, nullable=false)
	 */
		private $author;

	/**
	 * @var string
	 * @ORM\Column(name="createdDate", type="date")
	 */
	private $createdDate;

	/**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set appName
     *
     * @param string $appName
     *
     * @return Form
     */
    public function setAppName($appName)
    {
        $this->appName = $appName;

        return $this;
    }

    /**
     * Get appName
     *
     * @return string
     */
    public function getAppName()
    {
        return $this->appName;
    }

    /**
     * Set version
     *
     * @param string $version
     *
     * @return Form
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set countries
     *
     * @param string $countries
     *
     * @return Form
     */
    public function setCountries($countries)
    {
        $this->countries = $countries;

        return $this;
    }

    /**
     * Get countries
     *
     * @return string
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Set descShort
     *
     * @param string $descShort
     *
     * @return Form
     */
    public function setDescShort($descShort)
    {
        $this->descShort = $descShort;

        return $this;
    }

    /**
     * Get descShort
     *
     * @return string
     */
    public function getDescShort()
    {
        return $this->descShort;
    }

    /**
     * Set descLong
     *
     * @param string $descLong
     *
     * @return Form
     */
    public function setDescLong($descLong)
    {
        $this->descLong = $descLong;

        return $this;
    }

    /**
     * Get descLong
     *
     * @return string
     */
    public function getDescLong()
    {
        return $this->descLong;
    }

    /**
     * Set appUpdate
     *
     * @param boolean $appUpdate
     *
     * @return Form
     */
    public function setAppUpdate($appUpdate)
    {
        $this->appUpdate = $appUpdate;

        return $this;
    }

    /**
     * Get appUpdate
     *
     * @return bool
     */
    public function getAppUpdate()
    {
        return $this->appUpdate;
    }

    /**
     * Set updateChanges
     *
     * @param string $updateChanges
     *
     * @return Form
     */
    public function setUpdateChanges($updateChanges)
    {
        $this->updateChanges = $updateChanges;

        return $this;
    }

    /**
     * Get updateChanges
     *
     * @return string
     */
    public function getUpdateChanges()
    {
        return $this->updateChanges;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return Form
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set imgA1
     *
     * @param boolean $imgA1
     *
     * @return Form
     */
    public function setImgA1($imgA1)
    {
        $this->imgA1 = $imgA1;

        return $this;
    }

    /**
     * Get imgA1
     *
     * @return bool
     */
    public function getImgA1()
    {
        return $this->imgA1;
    }

    /**
     * Set imgA2
     *
     * @param boolean $imgA2
     *
     * @return Form
     */
    public function setImgA2($imgA2)
    {
        $this->imgA2 = $imgA2;

        return $this;
    }

    /**
     * Get imgA2
     *
     * @return bool
     */
    public function getImgA2()
    {
        return $this->imgA2;
    }

    /**
     * Set imgA3
     *
     * @param boolean $imgA3
     *
     * @return Form
     */
    public function setImgA3($imgA3)
    {
        $this->imgA3 = $imgA3;

        return $this;
    }

    /**
     * Get imgA3
     *
     * @return bool
     */
    public function getImgA3()
    {
        return $this->imgA3;
    }

    /**
     * Set imgI1
     *
     * @param boolean $imgI1
     *
     * @return Form
     */
    public function setImgI1($imgI1)
    {
        $this->imgI1 = $imgI1;

        return $this;
    }

    /**
     * Get imgI1
     *
     * @return bool
     */
    public function getImgI1()
    {
        return $this->imgI1;
    }

    /**
     * Set imgI2
     *
     * @param boolean $imgI2
     *
     * @return Form
     */
    public function setImgI2($imgI2)
    {
        $this->imgI2 = $imgI2;

        return $this;
    }

    /**
     * Get imgI2
     *
     * @return bool
     */
    public function getImgI2()
    {
        return $this->imgI2;
    }

    /**
     * Set imgI3
     *
     * @param string $imgI3
     *
     * @return Form
     */
    public function setImgI3($imgI3)
    {
        $this->imgI3 = $imgI3;

        return $this;
    }

    /**
     * Get imgI3
     *
     * @return string
     */
    public function getImgI3()
    {
        return $this->imgI3;
    }

    /**
     * Set imgAT1
     *
     * @param boolean $imgAT1
     *
     * @return Form
     */
    public function setImgAT1($imgAT1)
    {
        $this->imgAT1 = $imgAT1;

        return $this;
    }

    /**
     * Get imgAT1
     *
     * @return bool
     */
    public function getImgAT1()
    {
        return $this->imgAT1;
    }

    /**
     * Set imgAT2
     *
     * @param boolean $imgAT2
     *
     * @return Form
     */
    public function setImgAT2($imgAT2)
    {
        $this->imgAT2 = $imgAT2;

        return $this;
    }

    /**
     * Get imgAT2
     *
     * @return boolean
     */
    public function getImgAT2()
    {
        return $this->imgAT2;
    }

    /**
     * Set imgAT3
     *
     * @param boolean $imgAT3
     *
     * @return Form
     */
    public function setImgAT3($imgAT3)
    {
        $this->imgAT3 = $imgAT3;

        return $this;
    }

    /**
     * Get imgAT3
     *
     * @return boolean
     */
    public function getImgAT3()
    {
        return $this->imgAT3;
    }

    /**
     * Set imgAI1
     *
     * @param boolean $imgAI1
     *
     * @return Form
     */
    public function setImgAI1($imgAI1)
    {
        $this->imgAI1 = $imgAI1;

        return $this;
    }

    /**
     * Get imgAI1
     *
     * @return boolean
     */
    public function getImgAI1()
    {
        return $this->imgAI1;
    }

    /**
     * Set imgAI2
     *
     * @param boolean $imgAI2
     *
     * @return Form
     */
    public function setImgAI2($imgAI2)
    {
        $this->imgAI2 = $imgAI2;

        return $this;
    }

    /**
     * Get imgAI2
     *
     * @return boolean
     */
    public function getImgAI2()
    {
        return $this->imgAI2;
    }

    /**
     * Set imgAI3
     *
     * @param boolean $imgAI3
     *
     * @return Form
     */
    public function setImgAI3($imgAI3)
    {
        $this->imgAI3 = $imgAI3;

        return $this;
    }

    /**
     * Get imgAI3
     *
     * @return boolean
     */
    public function getImgAI3()
    {
        return $this->imgAI3;
    }

    /**
     * Set webUrl
     *
     * @param string $webUrl
     *
     * @return Form
     */
    public function setWebUrl($webUrl)
    {
        $this->webUrl = $webUrl;

        return $this;
    }

    /**
     * Get webUrl
     *
     * @return string
     */
    public function getWebUrl()
    {
        return $this->webUrl;
    }

    /**
     * Set assistanceUrl
     *
     * @param string $assistanceUrl
     *
     * @return Form
     */
    public function setAssistanceUrl($assistanceUrl)
    {
        $this->assistanceUrl = $assistanceUrl;

        return $this;
    }

    /**
     * Get assistanceUrl
     *
     * @return string
     */
    public function getAssistanceUrl()
    {
        return $this->assistanceUrl;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Form
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set rules
     *
     * @param string $rules
     *
     * @return Form
     */
    public function setRules($rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * Get rules
     *
     * @return string
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Set marketingUrl
     *
     * @param string $marketingUrl
     *
     * @return Form
     */
    public function setMarketingUrl($marketingUrl)
    {
        $this->marketingUrl = $marketingUrl;

        return $this;
    }

    /**
     * Get marketingUrl
     *
     * @return string
     */
    public function getMarketingUrl()
    {
        return $this->marketingUrl;
    }

    /**
     * Set copyright
     *
     * @param string $copyright
     *
     * @return Form
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;

        return $this;
    }

    /**
     * Get copyright
     *
     * @return string
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Set android
     *
     * @param boolean $android
     *
     * @return Form
     */
    public function setAndroid($android)
    {
        $this->android = $android;

        return $this;
    }

    /**
     * Get android
     *
     * @return boolean
     */
    public function getAndroid()
    {
        return $this->android;
    }

    /**
     * Set ios
     *
     * @param boolean $ios
     *
     * @return Form
     */
    public function setIos($ios)
    {
        $this->ios = $ios;

        return $this;
    }

    /**
     * Get ios
     *
     * @return boolean
     */
    public function getIos()
    {
        return $this->ios;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Form
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return Form
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }
}
