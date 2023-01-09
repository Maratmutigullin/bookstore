<?php

namespace Container68Wn6Fl;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf96b8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera6380 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdeb39 = [
        
    ];

    public function getConnection()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'getConnection', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'getMetadataFactory', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'getExpressionBuilder', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'beginTransaction', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'getCache', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->getCache();
    }

    public function transactional($func)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'transactional', array('func' => $func), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'wrapInTransaction', array('func' => $func), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'commit', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->commit();
    }

    public function rollback()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'rollback', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'getClassMetadata', array('className' => $className), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'createQuery', array('dql' => $dql), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'createNamedQuery', array('name' => $name), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'createQueryBuilder', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'flush', array('entity' => $entity), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'clear', array('entityName' => $entityName), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->clear($entityName);
    }

    public function close()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'close', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->close();
    }

    public function persist($entity)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'persist', array('entity' => $entity), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'remove', array('entity' => $entity), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'refresh', array('entity' => $entity), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'detach', array('entity' => $entity), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'merge', array('entity' => $entity), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'getRepository', array('entityName' => $entityName), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'contains', array('entity' => $entity), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'getEventManager', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'getConfiguration', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'isOpen', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'getUnitOfWork', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'getProxyFactory', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'initializeObject', array('obj' => $obj), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'getFilters', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'isFiltersStateClean', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'hasFilters', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return $this->valueHolderf96b8->hasFilters();
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

        $instance->initializera6380 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderf96b8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf96b8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf96b8->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, '__get', ['name' => $name], $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        if (isset(self::$publicPropertiesdeb39[$name])) {
            return $this->valueHolderf96b8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf96b8;

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

        $targetObject = $this->valueHolderf96b8;
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
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf96b8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf96b8;
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
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, '__isset', array('name' => $name), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf96b8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf96b8;
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
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, '__unset', array('name' => $name), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf96b8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf96b8;
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
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, '__clone', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        $this->valueHolderf96b8 = clone $this->valueHolderf96b8;
    }

    public function __sleep()
    {
        $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, '__sleep', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;

        return array('valueHolderf96b8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera6380 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera6380;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera6380 && ($this->initializera6380->__invoke($valueHolderf96b8, $this, 'initializeProxy', array(), $this->initializera6380) || 1) && $this->valueHolderf96b8 = $valueHolderf96b8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf96b8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf96b8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
