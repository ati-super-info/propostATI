<?php
Router::get('/{any}', 'SpaController@index')->where('any', '.*');
