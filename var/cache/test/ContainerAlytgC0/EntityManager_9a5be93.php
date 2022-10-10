<?php

namespace ContainerAlytgC0;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5dccd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1b960 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties04ce6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'getConnection', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'getMetadataFactory', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'getExpressionBuilder', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'beginTransaction', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'getCache', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'transactional', array('func' => $func), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'commit', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->commit();
    }

    public function rollback()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'rollback', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'getClassMetadata', array('className' => $className), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'createQuery', array('dql' => $dql), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'createNamedQuery', array('name' => $name), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'createQueryBuilder', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'flush', array('entity' => $entity), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'clear', array('entityName' => $entityName), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->clear($entityName);
    }

    public function close()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'close', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->close();
    }

    public function persist($entity)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'persist', array('entity' => $entity), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'remove', array('entity' => $entity), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'refresh', array('entity' => $entity), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'detach', array('entity' => $entity), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'merge', array('entity' => $entity), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'contains', array('entity' => $entity), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'getEventManager', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'getConfiguration', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'isOpen', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'getUnitOfWork', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'getProxyFactory', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'initializeObject', array('obj' => $obj), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'getFilters', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'isFiltersStateClean', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'hasFilters', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return $this->valueHolder5dccd->hasFilters();
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

        $instance->initializer1b960 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder5dccd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5dccd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5dccd->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, '__get', ['name' => $name], $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        if (isset(self::$publicProperties04ce6[$name])) {
            return $this->valueHolder5dccd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5dccd;

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

        $targetObject = $this->valueHolder5dccd;
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
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5dccd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5dccd;
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
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, '__isset', array('name' => $name), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5dccd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5dccd;
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
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, '__unset', array('name' => $name), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5dccd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5dccd;
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
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, '__clone', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        $this->valueHolder5dccd = clone $this->valueHolder5dccd;
    }

    public function __sleep()
    {
        $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, '__sleep', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;

        return array('valueHolder5dccd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1b960 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1b960;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1b960 && ($this->initializer1b960->__invoke($valueHolder5dccd, $this, 'initializeProxy', array(), $this->initializer1b960) || 1) && $this->valueHolder5dccd = $valueHolder5dccd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5dccd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5dccd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
