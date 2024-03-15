const inputElement = document.querySelector('input[type="file"]');
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

const pond = FilePond.create(inputElement, {
    labelIdle: 'Hãy kéo thả ảnh vào đây hoặc <span class="text-teal-400">Tìm kiếm</span>'
}).setOptions({
    server: {
        process: '/tmp-upload-avt',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
        }
    },
    onprocessfiles: () => {
        location.reload();
    },
});
