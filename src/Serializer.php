<?php

declare(strict_types=1);

/*
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Shapin\Vimeo;

use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer;
use Symfony\Component\Serializer\Serializer as BaseSerializer;

class Serializer extends BaseSerializer
{
    public function __construct(array $normalizers = [], array $encoders = [])
    {
        parent::__construct(
            array_merge([
                new Normalizer\ArrayDenormalizer(),
                new Normalizer\DateTimeNormalizer(),
                new Normalizer\ObjectNormalizer(null, new CamelCaseToSnakeCaseNameConverter(), null, new ReflectionExtractor()),
            ], $normalizers),
            array_merge([
                new JsonEncoder(),
            ], $encoders)
        );
    }
}
