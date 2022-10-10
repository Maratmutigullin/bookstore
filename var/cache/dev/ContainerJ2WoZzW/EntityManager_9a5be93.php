<?php

namespace ContainerJ2WoZzW;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercb3d8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdf2b9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6db56 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'getConnection', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'getMetadataFactory', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'getExpressionBuilder', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'beginTransaction', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'getCache', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'transactional', array('func' => $func), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'commit', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->commit();
    }

    public function rollback()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'rollback', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'getClassMetadata', array('className' => $className), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'createQuery', array('dql' => $dql), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'createNamedQuery', array('name' => $name), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'createQueryBuilder', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'flush', array('entity' => $entity), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'clear', array('entityName' => $entityName), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->clear($entityName);
    }

    public function close()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'close', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->close();
    }

    public function persist($entity)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'persist', array('entity' => $entity), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'remove', array('entity' => $entity), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'refresh', array('entity' => $entity), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'detach', array('entity' => $entity), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'merge', array('entity' => $entity), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'contains', array('entity' => $entity), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'getEventManager', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'getConfiguration', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'isOpen', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'getUnitOfWork', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'getProxyFactory', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'initializeObject', array('obj' => $obj), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'getFilters', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'isFiltersStateClean', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'hasFilters', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return $this->valueHoldercb3d8->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerdf2b9 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldercb3d8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercb3d8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercb3d8->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, '__get', ['name' => $name], $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        if (isset(self::$publicProperties6db56[$name])) {
            return $this->valueHoldercb3d8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb3d8;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercb3d8;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb3d8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercb3d8;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, '__isset', array('name' => $name), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb3d8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercb3d8;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, '__unset', array('name' => $name), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb3d8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercb3d8;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, '__clone', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        $this->valueHoldercb3d8 = clone $this->valueHoldercb3d8;
    }

    public function __sleep()
    {
        $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, '__sleep', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;

        return array('valueHoldercb3d8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdf2b9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdf2b9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdf2b9 && ($this->initializerdf2b9->__invoke($valueHoldercb3d8, $this, 'initializeProxy', array(), $this->initializerdf2b9) || 1) && $this->valueHoldercb3d8 = $valueHoldercb3d8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercb3d8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercb3d8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
