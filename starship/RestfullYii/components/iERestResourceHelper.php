<?php

interface iERestResourceHelper
{
//	public function __construct(Callable $emitter);
        public function __construct($emitter);

//	public function setEmitter(Callable $emitter);
        public function setEmitter($emitter);

	public function getEmitter();	
}
