<?php

namespace Colibri\Core\Domain;

use Colibri\Connection\ConnectionInterface;
use Colibri\Connection\Statement\StatementIterator;
use Colibri\Connection\StmtInterface;
use Colibri\Core\ClassManager;
use Colibri\Core\Hydrator\AbstractHydratorEntity;
use Colibri\Core\Repository\AbstractRepositoryQueryFactory;
use Colibri\Core\ResultSet\ResultSet;
use Colibri\Core\Storage\FinderInterface;
use Colibri\Core\Storage\PersisterInterface;
use Colibri\Core\Storage\RemoverInterface;
use Colibri\EventDispatcher\DispatcherInterface;
use Colibri\EventDispatcher\EventInterface;
use Colibri\Exception\NotFoundException;
use Colibri\Query\Builder\Delete;
use Colibri\Query\Builder\Insert;
use Colibri\Query\Builder\Select;
use Colibri\Query\Builder\Select as SelectQueryBuilder;
use Colibri\Query\Builder\Update;
use Colibri\ServiceContainer\ServiceLocatorInterface;

/**
 * Interface RepositoryInterface
 * @package Colibri\Core\Domain
 */
interface RepositoryInterface
{
    
    /**
     * @param array $criteria
     *
     * @return StmtInterface
     */
    public function find(array $criteria);
    
    /**
     * @param $criteria
     *
     * @return mixed
     */
    public function findFirst($criteria);
    
    /**
     * @param $criteria
     *
     * @return mixed
     */
    public function findOneBy($criteria);
    
    /**
     * @return mixed
     */
    public function findAll();
    
    /**
     * @param mixed $criteria
     *
     * @return ResultSet
     */
    public function findBy($criteria);
    
    /**
     * @param $criteria
     *
     * @return $this
     */
    public function filterBy($criteria);
    
    /**
     * @param integer $id
     *
     * @return EntityInterface
     */
    public function retrieve($id);
    
    /**
     * @param EntityInterface $entity
     *
     * @return EntityInterface
     */
    public function persist(EntityInterface $entity);
    
    /**
     * @param EntityInterface $entity
     *
     * @return EntityInterface
     */
    public function remove(EntityInterface $entity);
    
    /**
     * @return string
     */
    public function getEntityName();
    
    /**
     * @return \ReflectionClass|\ReflectionObject
     */
    public function getEntityClassReflection();
    
    /**
     * @return string
     * @throws NotFoundException
     */
    public function getEntityIdentifier();
    
    /**
     * @return MetadataInterface
     */
    public function getEntityMetadata();
    
    /**
     * @return SelectQueryBuilder
     */
    public function getQuery();
    
    /**
     * @return ClassManager
     */
    public function getClassManager();
    
    /**
     * @return ConnectionInterface
     */
    public function getConnection();
    
    /**
     * @return AbstractHydratorEntity
     */
    public function getHydrator();
    
    /**
     * @param AbstractHydratorEntity $hydrator
     *
     * @return $this
     */
    public function setHydrator(AbstractHydratorEntity $hydrator);
    
    /**
     * @return DispatcherInterface
     */
    public function getEventDispatcher();
    
    /**
     * @param                     $eventName
     * @param EventInterface|null $event
     *
     * @return $this
     */
    public function dispatchEvent($eventName, EventInterface $event = null);
    
    /**
     * @param $class
     *
     * @return RepositoryInterface
     */
    public function getRepositoryFor($class);
    
    /**
     * @return AbstractRepositoryQueryFactory
     */
    public function getQueryFactory();
    
    /**
     * @param AbstractRepositoryQueryFactory $queryFactory
     *
     * @return RepositoryInterface
     */
    public function setQueryFactory(AbstractRepositoryQueryFactory $queryFactory);
    
    /**
     * @param $criteria
     *
     * @return StatementIterator
     */
    public function executeCriteria($criteria);
    
    /**
     * @param integer $offset
     *
     * @return RepositoryInterface
     */
    public function setOffset($offset);
    
    /**
     * @param integer $length
     *
     * @return RepositoryInterface
     */
    public function setLimit($length);
    
    /**
     * @return ServiceLocatorInterface
     */
    public function getServiceLocator();
    
    /**
     * @return Select
     */
    public function createFinder();
    
    /**
     * @return Insert
     */
    public function createPersister();
    
    /**
     * @return Delete
     */
    public function createRemover();
    
    /**
     * @return RemoverInterface
     */
    public function getRemover();
    
    /**
     * @return PersisterInterface
     */
    public function getPersister();
    
    /**
     * @return FinderInterface
     */
    public function getFinder();
    
    /**
     * @return Update
     * @deprecated
     */
    public function createUpdateQuery();
    
}
