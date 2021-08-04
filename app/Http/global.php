<?php

function _redirect($url)
{
    if (env("USE_HTTP", 0) == 1) {
        return redirect($url);
    } else {
        return redirect($url, 302, [], true);
    }
}
