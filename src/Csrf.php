<?php

namespace Csrf;

use SessionHandlerInterface;

class Csrf {

	protected $session = null;
	protected $tokens = [];

	const DEFAULT_MAX_TOKENS = 20;

	public function __construct(StorageInterface $session, $maxTokens = null) {

		$this->session = $session;
		$this->tokens = unserialize($this->session->get('csrf'));
		$this->addToken();
	}

	public function addToken() {

		$this->tokens[] = uniqid();
		$this->session->set('csrf', serialize($this->tokens));
	}

	public function validate($token) {

		if(!in_array($token, $this->tokens)) {
			throw new Exception();
		}
	}

	public function getLastToken() {

		$last = end($this->tokens);
		reset($this->tokens);

		return $last;
	}

	public function __toString() {

		return $this->getLastToken();
	}
}
