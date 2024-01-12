<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php81\Rector\Array_\FirstClassCallableRector;
use Rector\Php81\Rector\Class_\MyCLabsClassToEnumRector;
use Rector\Php81\Rector\Class_\SpatieEnumClassToEnumRector;
use Rector\Php81\Rector\ClassConst\FinalizePublicClassConstantRector;
use Rector\Php81\Rector\ClassMethod\NewInInitializerRector;
use Rector\Php81\Rector\FuncCall\NullToStrictStringFuncCallArgRector;
use Rector\Php81\Rector\MethodCall\MyCLabsMethodCallToEnumConstRector;
use Rector\Php81\Rector\MethodCall\SpatieEnumMethodCallToEnumConstRector;
use Rector\Php81\Rector\Property\ReadOnlyPropertyRector;
use Rector\Php82\Rector\Class_\ReadOnlyClassRector;
use Rector\Php82\Rector\FuncCall\Utf8DecodeEncodeToMbConvertEncodingRector;
use Rector\Php82\Rector\New_\FilesystemIteratorSkipDotsRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnNeverTypeRector;
use Rector\ValueObject\PhpVersion;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths(
        [
        __DIR__ . '/src',
        ]
    );

    // Enable any of the following and run rector to cause the error
    $rectorConfig->rules([
        // PHP_82
        ReadOnlyClassRector::class,
//        Utf8DecodeEncodeToMbConvertEncodingRector::class,
//        FilesystemIteratorSkipDotsRector::class
        // PHP_81
//        ReturnNeverTypeRector::class,
//        MyCLabsClassToEnumRector::class,
//        MyCLabsMethodCallToEnumConstRector::class,
//        FinalizePublicClassConstantRector::class,
//        ReadOnlyPropertyRector::class,
//        SpatieEnumClassToEnumRector::class,
//        SpatieEnumMethodCallToEnumConstRector::class,
//        NewInInitializerRector::class,
//        NullToStrictStringFuncCallArgRector::class,
//        FirstClassCallableRector::class
    ]);

    $rectorConfig->phpVersion(PhpVersion::PHP_82);

};
