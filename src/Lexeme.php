<?php

namespace Wikibase\Wiktionary\Model;

use Wikibase\DataModel\Entity\EntityDocument;
use Wikibase\DataModel\Entity\EntityId;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class Lexeme implements EntityDocument {

	public function __construct( LexemeId $id ) {

	}

	/**
	 * @see EntityDocument::getId
	 *
	 * @return EntityId|null
	 */
	public function getId() {

	}

	/**
	 * @see EntityDocument::getId
	 *
	 * @return string
	 */
	public function getType() {
		return 'lexeme';
	}

}