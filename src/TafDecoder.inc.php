<?php

/**
 * Use this file if you cannot use class autoloading. It will include all
 * the files needed for the Taf decoder.
 *
 * Use composer to install this library if you want a simple autoloader setup.
 * To know how to use composer, see README.md
 */

$to_include = array(
    'TafDecoder.php',

    'Entity/DecodedTaf.php',
    'Entity/Value.php',

    'Exception/ChunkDecoderException.php',

    'ChunkDecoder/TafChunkDecoder.php',
    'ChunkDecoder/TafChunkDecoderInterface.php',
    'ChunkDecoder/ReportTypeChunkDecoder.php',
    'ChunkDecoder/IcaoChunkDecoder.php',
);

foreach ($to_include as $file) {
    require_once dirname(__FILE__).'/'.$file;
}