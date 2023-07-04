<?php
$radapter->post('/info/select', fn (...$args) => InfoService::select(...$args));
$radapter->post('/info/update', fn (...$args) => InfoService::update(...$args));
