<?php
 namespace MailPoetVendor\Doctrine\DBAL\Types; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform; class StringType extends \MailPoetVendor\Doctrine\DBAL\Types\Type { public function getSQLDeclaration(array $column, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return $platform->getVarcharTypeDeclarationSQL($column); } public function getDefaultLength(\MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return $platform->getVarcharDefaultLength(); } public function getName() { return \MailPoetVendor\Doctrine\DBAL\Types\Types::STRING; } } 