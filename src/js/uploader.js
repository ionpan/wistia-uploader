var uploaderDiv = document.getElementById('wistia-uploader');

if (uploaderDiv) {
    window._wapiq = window._wapiq || [];
    _wapiq.push(function (W) {
        window.wistiaUploader = new W.Uploader({
            accessToken: uploaderDiv.dataset.accessToken,
            dropIn: 'wistia-uploader',
            projectId: uploaderDiv.dataset.projectId
        });

        window.wistiaUploader.bind('uploadsuccess', function (file, media) {
            fetch(uploaderDiv.dataset.getExpiringTokenUrl, {method: 'GET'}).then((response) => {
                return response.json();
            }).then((accessToken) => {
                uploaderDiv.dataset.accessToken = accessToken;
            });
        });
    });
}