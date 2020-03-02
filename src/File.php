<?php

namespace JPB\Lint;

use PHP_CodeSniffer\Files\File as BaseFile;

class File extends BaseFile {

	public function addRawMessage( $error, $message, $line, $column, $code, $data, $severity, $fixable ) {
		return $this->addMessage( $error, $message, $line, $column, $code, $data, $severity, $fixable );
	}

}
