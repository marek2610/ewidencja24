<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Dokument extends \App\Entity\Dokument implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'data', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'kwota', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'faktura', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'rodzaj', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'uwagi', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'utworzony', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'modyfikacja', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'status', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'owner', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'dataShort'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'data', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'kwota', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'faktura', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'rodzaj', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'uwagi', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'utworzony', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'modyfikacja', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'status', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'owner', '' . "\0" . 'App\\Entity\\Dokument' . "\0" . 'dataShort'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Dokument $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getData(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getData', []);

        return parent::getData();
    }

    /**
     * {@inheritDoc}
     */
    public function setData(\DateTimeInterface $data): \App\Entity\Dokument
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setData', [$data]);

        return parent::setData($data);
    }

    /**
     * {@inheritDoc}
     */
    public function getKwota(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKwota', []);

        return parent::getKwota();
    }

    /**
     * {@inheritDoc}
     */
    public function setKwota(float $kwota): \App\Entity\Dokument
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKwota', [$kwota]);

        return parent::setKwota($kwota);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaktura(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaktura', []);

        return parent::getFaktura();
    }

    /**
     * {@inheritDoc}
     */
    public function setFaktura(string $faktura): \App\Entity\Dokument
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFaktura', [$faktura]);

        return parent::setFaktura($faktura);
    }

    /**
     * {@inheritDoc}
     */
    public function getRodzaj(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRodzaj', []);

        return parent::getRodzaj();
    }

    /**
     * {@inheritDoc}
     */
    public function setRodzaj(string $rodzaj): \App\Entity\Dokument
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRodzaj', [$rodzaj]);

        return parent::setRodzaj($rodzaj);
    }

    /**
     * {@inheritDoc}
     */
    public function getUwagi(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUwagi', []);

        return parent::getUwagi();
    }

    /**
     * {@inheritDoc}
     */
    public function setUwagi(string $uwagi): \App\Entity\Dokument
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUwagi', [$uwagi]);

        return parent::setUwagi($uwagi);
    }

    /**
     * {@inheritDoc}
     */
    public function getUtworzony(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUtworzony', []);

        return parent::getUtworzony();
    }

    /**
     * {@inheritDoc}
     */
    public function setUtworzony(\DateTimeInterface $utworzony): \App\Entity\Dokument
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUtworzony', [$utworzony]);

        return parent::setUtworzony($utworzony);
    }

    /**
     * {@inheritDoc}
     */
    public function getModyfikacja(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModyfikacja', []);

        return parent::getModyfikacja();
    }

    /**
     * {@inheritDoc}
     */
    public function setModyfikacja(\DateTimeInterface $modyfikacja): \App\Entity\Dokument
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModyfikacja', [$modyfikacja]);

        return parent::setModyfikacja($modyfikacja);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(string $status): \App\Entity\Dokument
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner(\App\Entity\User $owner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getDataShort(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataShort', []);

        return parent::getDataShort();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataShort(?\DateTimeInterface $dataShort): \App\Entity\Dokument
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataShort', [$dataShort]);

        return parent::setDataShort($dataShort);
    }

}