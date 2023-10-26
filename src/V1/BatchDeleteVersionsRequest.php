<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/version.proto

namespace Google\Cloud\ArtifactRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to delete multiple versions across a repository.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.BatchDeleteVersionsRequest</code>
 */
class BatchDeleteVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the repository holding all requested versions.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The names of the versions to delete.
     * A maximum of 10000 versions can be deleted in a batch.
     *
     * Generated from protobuf field <code>repeated string names = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $names;
    /**
     * If true, the request is performed without deleting data, following AIP-163.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     */
    private $validate_only = false;

    /**
     * @param string   $parent The name of the repository holding all requested versions.
     * @param string[] $names  Required. The names of the versions to delete.
     *                         A maximum of 10000 versions can be deleted in a batch. Please see
     *                         {@see ArtifactRegistryClient::versionName()} for help formatting this field.
     *
     * @return \Google\Cloud\ArtifactRegistry\V1\BatchDeleteVersionsRequest
     *
     * @experimental
     */
    public static function build(string $parent, array $names): self
    {
        return (new self())
            ->setParent($parent)
            ->setNames($names);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The name of the repository holding all requested versions.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $names
     *           Required. The names of the versions to delete.
     *           A maximum of 10000 versions can be deleted in a batch.
     *     @type bool $validate_only
     *           If true, the request is performed without deleting data, following AIP-163.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the repository holding all requested versions.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The name of the repository holding all requested versions.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The names of the versions to delete.
     * A maximum of 10000 versions can be deleted in a batch.
     *
     * Generated from protobuf field <code>repeated string names = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Required. The names of the versions to delete.
     * A maximum of 10000 versions can be deleted in a batch.
     *
     * Generated from protobuf field <code>repeated string names = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->names = $arr;

        return $this;
    }

    /**
     * If true, the request is performed without deleting data, following AIP-163.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If true, the request is performed without deleting data, following AIP-163.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

