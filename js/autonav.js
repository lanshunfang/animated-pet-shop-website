//the audio navigation
$("li:nth-child(odd)").mouseenter(function() {
    $("#myaudio")[0].play()
});

$("li:nth-child(even)").mouseenter(function() {
    $("#myaudio2")[0].play()
});

