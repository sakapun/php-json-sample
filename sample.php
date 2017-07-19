<?php
/**
 * Created by IntelliJ IDEA.
 * User: さかぷん
 * Date: 2017/07/19
 * Time: 23:59
 */
$json = file_get_contents("./sample.json");
var_dump($json);

/* $jsonをテンプレートに渡す
 * blade5.1では {!! $json.tag !!}
 * blade4では {{{ $json.tag }}}
 *
 */