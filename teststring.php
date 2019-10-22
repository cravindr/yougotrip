<?php

echo formatUrl("welcome to     india  .//////// 3456+.$#@ d d           s            s");
function formatUrl($str, $sep='-')
    {
            $res = strtolower($str);
            $res = preg_replace('/[^[:alnum:]]/', ' ', $res);
            $res = preg_replace('/[[:space:]]+/', $sep, $res);
            return trim($res, $sep);
    }
?>