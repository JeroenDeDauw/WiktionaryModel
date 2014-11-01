<?php

namespace Wikibase\Wiktionary\Model;

use Wikibase\DataModel\Entity\EntityDocument;
use Wikibase\DataModel\Entity\EntityId;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class LexemeId extends EntityId {

	/**
	 * TODO: restrict ID format
	 *
	 * @param string $serialization
	 */
	public function __construct( $serialization ) {
		$this->serialization = $serialization;
	}

	/**
	 * @see Serializable::serialize
	 */
	public function serialize() {
		return $this->serialization;
	}

	/**
	 * @see Serializable::unserialize
	 */
	public function unserialize( $serialized ) {
		$this->serialization = $serialized;
	}

	/**
	 * @see EntityId::getEntityType
	 *
	 * @return string
	 */
	public function getEntityType() {
		return 'lexeme';
	}

}