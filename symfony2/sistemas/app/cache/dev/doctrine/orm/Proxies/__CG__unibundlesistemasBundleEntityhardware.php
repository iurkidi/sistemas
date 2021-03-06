<?php

namespace Proxies\__CG__\uni\bundle\sistemasBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class hardware extends \uni\bundle\sistemasBundle\Entity\hardware implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return array('__isInitialized__', '' . "\0" . 'uni\\bundle\\sistemasBundle\\Entity\\hardware' . "\0" . 'id', '' . "\0" . 'uni\\bundle\\sistemasBundle\\Entity\\hardware' . "\0" . 'nombre', '' . "\0" . 'uni\\bundle\\sistemasBundle\\Entity\\hardware' . "\0" . 'ipreal', '' . "\0" . 'uni\\bundle\\sistemasBundle\\Entity\\hardware' . "\0" . 'memoria', '' . "\0" . 'uni\\bundle\\sistemasBundle\\Entity\\hardware' . "\0" . 'disco', '' . "\0" . 'uni\\bundle\\sistemasBundle\\Entity\\hardware' . "\0" . 'cpu', 'maquinas');
        }

        return array('__isInitialized__', '' . "\0" . 'uni\\bundle\\sistemasBundle\\Entity\\hardware' . "\0" . 'id', '' . "\0" . 'uni\\bundle\\sistemasBundle\\Entity\\hardware' . "\0" . 'nombre', '' . "\0" . 'uni\\bundle\\sistemasBundle\\Entity\\hardware' . "\0" . 'ipreal', '' . "\0" . 'uni\\bundle\\sistemasBundle\\Entity\\hardware' . "\0" . 'memoria', '' . "\0" . 'uni\\bundle\\sistemasBundle\\Entity\\hardware' . "\0" . 'disco', '' . "\0" . 'uni\\bundle\\sistemasBundle\\Entity\\hardware' . "\0" . 'cpu', 'maquinas');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (hardware $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpreal($ipreal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpreal', array($ipreal));

        return parent::setIpreal($ipreal);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpreal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpreal', array());

        return parent::getIpreal();
    }

    /**
     * {@inheritDoc}
     */
    public function setMemoria($memoria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMemoria', array($memoria));

        return parent::setMemoria($memoria);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemoria()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemoria', array());

        return parent::getMemoria();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisco($disco)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisco', array($disco));

        return parent::setDisco($disco);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisco()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisco', array());

        return parent::getDisco();
    }

    /**
     * {@inheritDoc}
     */
    public function setCpu($cpu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCpu', array($cpu));

        return parent::setCpu($cpu);
    }

    /**
     * {@inheritDoc}
     */
    public function getCpu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCpu', array());

        return parent::getCpu();
    }

    /**
     * {@inheritDoc}
     */
    public function addMaquina(\uni\bundle\sistemasBundle\Entity\maqvirtual $maquinas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMaquina', array($maquinas));

        return parent::addMaquina($maquinas);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMaquina(\uni\bundle\sistemasBundle\Entity\maqvirtual $maquinas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMaquina', array($maquinas));

        return parent::removeMaquina($maquinas);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaquinas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaquinas', array());

        return parent::getMaquinas();
    }

}
