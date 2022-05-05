<?php

namespace Container2oDCpG4;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera46cf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfb635 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc5b04 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'getConnection', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'getMetadataFactory', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'getExpressionBuilder', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'beginTransaction', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'getCache', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'transactional', array('func' => $func), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'commit', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->commit();
    }

    public function rollback()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'rollback', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'getClassMetadata', array('className' => $className), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'createQuery', array('dql' => $dql), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'createNamedQuery', array('name' => $name), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'createQueryBuilder', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'flush', array('entity' => $entity), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'clear', array('entityName' => $entityName), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->clear($entityName);
    }

    public function close()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'close', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->close();
    }

    public function persist($entity)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'persist', array('entity' => $entity), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'remove', array('entity' => $entity), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'refresh', array('entity' => $entity), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'detach', array('entity' => $entity), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'merge', array('entity' => $entity), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'contains', array('entity' => $entity), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'getEventManager', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'getConfiguration', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'isOpen', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'getUnitOfWork', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'getProxyFactory', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'initializeObject', array('obj' => $obj), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'getFilters', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'isFiltersStateClean', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'hasFilters', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return $this->valueHoldera46cf->hasFilters();
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

        $instance->initializerfb635 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera46cf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera46cf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera46cf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, '__get', ['name' => $name], $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        if (isset(self::$publicPropertiesc5b04[$name])) {
            return $this->valueHoldera46cf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera46cf;

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

        $targetObject = $this->valueHoldera46cf;
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
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera46cf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera46cf;
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
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, '__isset', array('name' => $name), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera46cf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera46cf;
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
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, '__unset', array('name' => $name), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera46cf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera46cf;
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
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, '__clone', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        $this->valueHoldera46cf = clone $this->valueHoldera46cf;
    }

    public function __sleep()
    {
        $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, '__sleep', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;

        return array('valueHoldera46cf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfb635 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfb635;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfb635 && ($this->initializerfb635->__invoke($valueHoldera46cf, $this, 'initializeProxy', array(), $this->initializerfb635) || 1) && $this->valueHoldera46cf = $valueHoldera46cf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera46cf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera46cf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
