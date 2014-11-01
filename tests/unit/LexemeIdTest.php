<?php

namespace Wikibase\Wiktionary\Model\Test;

use Wikibase\Wiktionary\Model\LexemeId;

/**
 * @covers Wikibase\Wiktionary\Model\LexemeId
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class LexemeIdTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @dataProvider idSerializationProvider
	 */
	public function testCanConstructId( $idSerialization ) {
		$id = new LexemeId( $idSerialization );

		$this->assertEquals(
			$idSerialization,
			$id->getSerialization()
		);
	}

	public function idSerializationProvider() {
		return array(
			array( 'kittens' ),
		);
	}

	/**
	 * @dataProvider idSerializationProvider
	 */
	public function testSerializationRoundtrips( $idSerialization ) {
		$id = new LexemeId( $idSerialization );
		$newId = unserialize( serialize( $id ) );

		$this->assertEquals(
			$id,
			$newId
		);
	}

}
