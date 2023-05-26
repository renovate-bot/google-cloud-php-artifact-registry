<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/artifact.proto

namespace Google\Cloud\ArtifactRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to get maven artifacts.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.GetMavenArtifactRequest</code>
 */
class GetMavenArtifactRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the maven artifact.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The name of the maven artifact. Please see
     *                     {@see ArtifactRegistryClient::mavenArtifactName()} for help formatting this field.
     *
     * @return \Google\Cloud\ArtifactRegistry\V1\GetMavenArtifactRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the maven artifact.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\Artifact::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the maven artifact.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the maven artifact.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

