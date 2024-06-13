<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/repository.proto

namespace Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for a Npm remote repository.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.RemoteRepositoryConfig.NpmRepository</code>
 */
class NpmRepository extends \Google\Protobuf\Internal\Message
{
    protected $upstream;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $public_repository
     *           One of the publicly available Npm repositories supported by Artifact
     *           Registry.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\Repository::initOnce();
        parent::__construct($data);
    }

    /**
     * One of the publicly available Npm repositories supported by Artifact
     * Registry.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.NpmRepository.PublicRepository public_repository = 1;</code>
     * @return int
     */
    public function getPublicRepository()
    {
        return $this->readOneof(1);
    }

    public function hasPublicRepository()
    {
        return $this->hasOneof(1);
    }

    /**
     * One of the publicly available Npm repositories supported by Artifact
     * Registry.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.NpmRepository.PublicRepository public_repository = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPublicRepository($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\NpmRepository\PublicRepository::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getUpstream()
    {
        return $this->whichOneof("upstream");
    }

}


