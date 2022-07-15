<?php

namespace Container8hKmz3D;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder79dcc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbf49d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfeff0 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'getConnection', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'getMetadataFactory', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'getExpressionBuilder', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'beginTransaction', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'getCache', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'transactional', array('func' => $func), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'commit', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->commit();
    }

    public function rollback()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'rollback', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'getClassMetadata', array('className' => $className), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'createQuery', array('dql' => $dql), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'createNamedQuery', array('name' => $name), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'createQueryBuilder', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'flush', array('entity' => $entity), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'clear', array('entityName' => $entityName), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->clear($entityName);
    }

    public function close()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'close', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->close();
    }

    public function persist($entity)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'persist', array('entity' => $entity), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'remove', array('entity' => $entity), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'refresh', array('entity' => $entity), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'detach', array('entity' => $entity), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'merge', array('entity' => $entity), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'contains', array('entity' => $entity), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'getEventManager', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'getConfiguration', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'isOpen', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'getUnitOfWork', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'getProxyFactory', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'initializeObject', array('obj' => $obj), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'getFilters', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'isFiltersStateClean', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'hasFilters', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return $this->valueHolder79dcc->hasFilters();
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

        $instance->initializerbf49d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder79dcc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder79dcc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder79dcc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, '__get', ['name' => $name], $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        if (isset(self::$publicPropertiesfeff0[$name])) {
            return $this->valueHolder79dcc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79dcc;

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

        $targetObject = $this->valueHolder79dcc;
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
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79dcc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder79dcc;
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
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, '__isset', array('name' => $name), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79dcc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder79dcc;
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
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, '__unset', array('name' => $name), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder79dcc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder79dcc;
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
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, '__clone', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        $this->valueHolder79dcc = clone $this->valueHolder79dcc;
    }

    public function __sleep()
    {
        $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, '__sleep', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;

        return array('valueHolder79dcc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbf49d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbf49d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbf49d && ($this->initializerbf49d->__invoke($valueHolder79dcc, $this, 'initializeProxy', array(), $this->initializerbf49d) || 1) && $this->valueHolder79dcc = $valueHolder79dcc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder79dcc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder79dcc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
