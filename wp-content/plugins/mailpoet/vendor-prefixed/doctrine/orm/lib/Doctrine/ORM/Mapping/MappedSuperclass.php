<?php
 namespace MailPoetVendor\Doctrine\ORM\Mapping; if (!defined('ABSPATH')) exit; use Attribute; use MailPoetVendor\Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor; final class MappedSuperclass implements \MailPoetVendor\Doctrine\ORM\Mapping\Annotation { public $repositoryClass; public function __construct(?string $repositoryClass = null) { $this->repositoryClass = $repositoryClass; } } 