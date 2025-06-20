@extends('template')

@section('content')
<div class="container">
    <h3>Chat</h3>
    <div style="border:1px solid #ccc; padding:16px; border-radius:8px; font-size: 1.2em;">
        {!! konversiEmoticon($pesan) !!}
    </div>
</div>
@endsection

@php
function konversiEmoticon($text) {
    $emoticons = [
        ':))' => '<img src="/assets/img/emoticon/1.png" alt=":))" width="28" style="vertical-align:middle;">',
        ':3'  => '<img src="/assets/img/emoticon/2.png" alt=":3" width="28" style="vertical-align:middle;">',
        ':P'  => '<img src="/assets/img/emoticon/3.png" alt=":P" width="28" style="vertical-align:middle;">',
        ':C'  => '<img src="/assets/img/emoticon/4.png" alt=":C" width="28" style="vertical-align:middle;">',
        ';)'  => '<img src="/assets/img/emoticon/5.png" alt=";)" width="28" style="vertical-align:middle;">',
    ];

    $arr = explode(' ', $text);
    foreach ($arr as &$word) {
        if (isset($emoticons[$word])) {
            $word = $emoticons[$word];
        }
    }
    return implode(' ', $arr);
}
@endphp
