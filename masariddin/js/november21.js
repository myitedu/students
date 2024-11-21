$(document).ready(function () {
    // Change video player source when clicking on thumbnails
    $('#videoThumbnails a').on('click', function (e) {
        e.preventDefault();
        const videoSrc = $(this).data('video');
        $('#videoPlayer').attr('src', videoSrc);
    });
});
