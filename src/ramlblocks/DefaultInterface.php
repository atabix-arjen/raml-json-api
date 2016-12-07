<?php
/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 02/11/2016
 * Time: 17:26
 */

namespace rjapi\extension\yii2\raml\ramlblocks;

interface DefaultInterface
{
    const DEFAULT_POSTFIX      = 'Controller';
    const QUERY_SEARCH_POSTFIX = 'QuerySearch';
    const DEFAULT_MODULE       = 'Module';
    const DEFAULT_CONTROLLER   = 'BaseMapperController';
    const DEFAULT_MODEL_IN     = 'BaseResourceFormIn';
    const DEFAULT_MODEL_OUT    = 'BaseResourceFormOut';
    const DEFAULT_MAPPER       = 'BaseActiveDataMapper';

    const MAPPER_PREFIX = 'Mapper';
    const FORM_BASE     = 'Base';
    const FORM_PREFIX   = 'Form';
    const FORM_ACTION   = 'Action';
    const FORM_IN       = 'In';
    const FORM_OUT      = 'Out';
}