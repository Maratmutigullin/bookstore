<?php

namespace ContainerPRY5gcu;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder56274 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9ace5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties959f1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'getConnection', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'getMetadataFactory', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'getExpressionBuilder', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'beginTransaction', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'getCache', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'transactional', array('func' => $func), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'commit', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->commit();
    }

    public function rollback()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'rollback', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'getClassMetadata', array('className' => $className), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'createQuery', array('dql' => $dql), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'createNamedQuery', array('name' => $name), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'createQueryBuilder', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'flush', array('entity' => $entity), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'clear', array('entityName' => $entityName), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->clear($entityName);
    }

    public function close()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'close', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->close();
    }

    public function persist($entity)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'persist', array('entity' => $entity), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'remove', array('entity' => $entity), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'refresh', array('entity' => $entity), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'detach', array('entity' => $entity), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'merge', array('entity' => $entity), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'contains', array('entity' => $entity), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'getEventManager', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'getConfiguration', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'isOpen', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'getUnitOfWork', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'getProxyFactory', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'initializeObject', array('obj' => $obj), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'getFilters', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'isFiltersStateClean', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'hasFilters', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return $this->valueHolder56274->hasFilters();
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

        $instance->initializer9ace5 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder56274) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder56274 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder56274->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, '__get', ['name' => $name], $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        if (isset(self::$publicProperties959f1[$name])) {
            return $this->valueHolder56274->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56274;

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

        $targetObject = $this->valueHolder56274;
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
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56274;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder56274;
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
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, '__isset', array('name' => $name), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56274;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder56274;
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
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, '__unset', array('name' => $name), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56274;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder56274;
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
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, '__clone', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        $this->valueHolder56274 = clone $this->valueHolder56274;
    }

    public function __sleep()
    {
        $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, '__sleep', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;

        return array('valueHolder56274');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9ace5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9ace5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9ace5 && ($this->initializer9ace5->__invoke($valueHolder56274, $this, 'initializeProxy', array(), $this->initializer9ace5) || 1) && $this->valueHolder56274 = $valueHolder56274;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder56274;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56274;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
