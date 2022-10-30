<?php

namespace ContainerXbl2QXH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder003c4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercba81 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd2a07 = [
        
    ];

    public function getConnection()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'getConnection', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'getMetadataFactory', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'getExpressionBuilder', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'beginTransaction', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'getCache', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->getCache();
    }

    public function transactional($func)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'transactional', array('func' => $func), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'wrapInTransaction', array('func' => $func), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'commit', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->commit();
    }

    public function rollback()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'rollback', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'getClassMetadata', array('className' => $className), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'createQuery', array('dql' => $dql), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'createNamedQuery', array('name' => $name), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'createQueryBuilder', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'flush', array('entity' => $entity), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'clear', array('entityName' => $entityName), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->clear($entityName);
    }

    public function close()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'close', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->close();
    }

    public function persist($entity)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'persist', array('entity' => $entity), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'remove', array('entity' => $entity), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'refresh', array('entity' => $entity), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'detach', array('entity' => $entity), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'merge', array('entity' => $entity), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'getRepository', array('entityName' => $entityName), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'contains', array('entity' => $entity), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'getEventManager', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'getConfiguration', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'isOpen', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'getUnitOfWork', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'getProxyFactory', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'initializeObject', array('obj' => $obj), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'getFilters', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'isFiltersStateClean', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'hasFilters', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return $this->valueHolder003c4->hasFilters();
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

        $instance->initializercba81 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder003c4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder003c4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder003c4->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, '__get', ['name' => $name], $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        if (isset(self::$publicPropertiesd2a07[$name])) {
            return $this->valueHolder003c4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder003c4;

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

        $targetObject = $this->valueHolder003c4;
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
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder003c4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder003c4;
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
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, '__isset', array('name' => $name), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder003c4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder003c4;
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
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, '__unset', array('name' => $name), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder003c4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder003c4;
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
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, '__clone', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        $this->valueHolder003c4 = clone $this->valueHolder003c4;
    }

    public function __sleep()
    {
        $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, '__sleep', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;

        return array('valueHolder003c4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercba81 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercba81;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercba81 && ($this->initializercba81->__invoke($valueHolder003c4, $this, 'initializeProxy', array(), $this->initializercba81) || 1) && $this->valueHolder003c4 = $valueHolder003c4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder003c4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder003c4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
