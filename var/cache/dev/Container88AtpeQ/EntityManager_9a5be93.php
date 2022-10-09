<?php

namespace Container88AtpeQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder63a4d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4a99d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties300ad = [
        
    ];

    public function getConnection()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'getConnection', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'getMetadataFactory', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'getExpressionBuilder', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'beginTransaction', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'getCache', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'transactional', array('func' => $func), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'commit', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->commit();
    }

    public function rollback()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'rollback', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'getClassMetadata', array('className' => $className), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'createQuery', array('dql' => $dql), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'createNamedQuery', array('name' => $name), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'createQueryBuilder', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'flush', array('entity' => $entity), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'clear', array('entityName' => $entityName), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->clear($entityName);
    }

    public function close()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'close', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->close();
    }

    public function persist($entity)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'persist', array('entity' => $entity), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'remove', array('entity' => $entity), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'refresh', array('entity' => $entity), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'detach', array('entity' => $entity), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'merge', array('entity' => $entity), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'contains', array('entity' => $entity), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'getEventManager', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'getConfiguration', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'isOpen', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'getUnitOfWork', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'getProxyFactory', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'initializeObject', array('obj' => $obj), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'getFilters', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'isFiltersStateClean', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'hasFilters', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return $this->valueHolder63a4d->hasFilters();
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

        $instance->initializer4a99d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder63a4d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder63a4d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder63a4d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, '__get', ['name' => $name], $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        if (isset(self::$publicProperties300ad[$name])) {
            return $this->valueHolder63a4d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63a4d;

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

        $targetObject = $this->valueHolder63a4d;
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
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63a4d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder63a4d;
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
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, '__isset', array('name' => $name), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63a4d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder63a4d;
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
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, '__unset', array('name' => $name), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63a4d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder63a4d;
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
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, '__clone', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        $this->valueHolder63a4d = clone $this->valueHolder63a4d;
    }

    public function __sleep()
    {
        $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, '__sleep', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;

        return array('valueHolder63a4d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4a99d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4a99d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4a99d && ($this->initializer4a99d->__invoke($valueHolder63a4d, $this, 'initializeProxy', array(), $this->initializer4a99d) || 1) && $this->valueHolder63a4d = $valueHolder63a4d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder63a4d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder63a4d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
