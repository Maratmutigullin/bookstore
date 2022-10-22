<?php

namespace ContainerFyMxSml;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder08185 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8cdc5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties12008 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'getConnection', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'getMetadataFactory', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'getExpressionBuilder', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'beginTransaction', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'getCache', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'transactional', array('func' => $func), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'commit', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->commit();
    }

    public function rollback()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'rollback', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'getClassMetadata', array('className' => $className), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'createQuery', array('dql' => $dql), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'createNamedQuery', array('name' => $name), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'createQueryBuilder', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'flush', array('entity' => $entity), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'clear', array('entityName' => $entityName), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->clear($entityName);
    }

    public function close()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'close', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->close();
    }

    public function persist($entity)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'persist', array('entity' => $entity), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'remove', array('entity' => $entity), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'refresh', array('entity' => $entity), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'detach', array('entity' => $entity), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'merge', array('entity' => $entity), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'contains', array('entity' => $entity), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'getEventManager', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'getConfiguration', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'isOpen', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'getUnitOfWork', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'getProxyFactory', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'initializeObject', array('obj' => $obj), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'getFilters', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'isFiltersStateClean', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'hasFilters', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return $this->valueHolder08185->hasFilters();
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

        $instance->initializer8cdc5 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder08185) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder08185 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder08185->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, '__get', ['name' => $name], $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        if (isset(self::$publicProperties12008[$name])) {
            return $this->valueHolder08185->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08185;

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

        $targetObject = $this->valueHolder08185;
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
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08185;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder08185;
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
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, '__isset', array('name' => $name), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08185;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder08185;
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
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, '__unset', array('name' => $name), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08185;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder08185;
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
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, '__clone', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        $this->valueHolder08185 = clone $this->valueHolder08185;
    }

    public function __sleep()
    {
        $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, '__sleep', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;

        return array('valueHolder08185');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8cdc5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8cdc5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8cdc5 && ($this->initializer8cdc5->__invoke($valueHolder08185, $this, 'initializeProxy', array(), $this->initializer8cdc5) || 1) && $this->valueHolder08185 = $valueHolder08185;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder08185;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder08185;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
