var dropZone = document.getElementById('dropZone');
var fileInput = document.getElementById('fileInput');
var filePreview = document.getElementById('filePreview');
var uploadButton = document.getElementById('uploadButton');
var fileList = []; // Список загруженных файлов

function handleFileDrop(event) {
    event.preventDefault();
    var files = event.dataTransfer.files;
    handleFiles(files);
}

function handleFileInput(event) {
    var files = event.target.files;
    handleFiles(files);
}

function handleFiles(files) {
    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        saveFile(file);
        previewFile(file);
    }
    enableUploadButton();
}

function saveFile(file) {
    fileList.push(file);
}

function removeFile(index) {
    fileList.splice(index, 1);
    renderFilePreview();
    enableUploadButton();
}

function previewFile(file) {
    var reader = new FileReader();

    reader.onload = function(event) {
        var fileData = event.target.result;
        var fileType = file.type;

        if (fileType.startsWith('image/')) {
            var imgElement = document.createElement('img');
            imgElement.src = fileData;
            var removeButton = document.createElement('button');
            removeButton.textContent = 'Удалить';
            removeButton.addEventListener('click', function() {
                removeFile(fileList.indexOf(file));
            });
            var container = document.createElement('div');
            container.appendChild(imgElement);
            container.appendChild(removeButton);
            filePreview.appendChild(container);
        } else if (fileType.startsWith('text/')) {
            var textElement = document.createElement('p');
            textElement.textContent = fileData;
            var removeButton = document.createElement('button');
            removeButton.textContent = 'Удалить';
            removeButton.addEventListener('click', function() {
                removeFile(fileList.indexOf(file));
            });
            var container = document.createElement('div');
            container.appendChild(textElement);
            container.appendChild(removeButton);
            filePreview.appendChild(container);
        }
    };

    reader.readAsDataURL(file);
}

function enableUploadButton() {
    if (fileList.length > 0) {
        uploadButton.disabled = false;
    } else {
        uploadButton.disabled = true;
    }
}

function uploadFiles() {
    for (var i = 0; i < fileList.length; i++) {
        var file = fileList[i];
        console.log('Выгрузка файла:', file.name);
        // Добавьте код для загрузки файла на сервер
    }
    fileList = [];
    renderFilePreview();
    enableUploadButton();
}

function renderFilePreview() {
    filePreview.innerHTML = '';
    for (var i = 0; i < fileList.length; i++) {
        var file = fileList[i];
        previewFile(file);
    }
}
dropZone.addEventListener('dragleave', function(event) {
event.preventDefault();
dropZone.classList.remove('drag-over');
});

dropZone.addEventListener('drop', handleFileDrop);
fileInput.addEventListener('change', handleFileInput);
uploadButton.addEventListener('click', uploadFiles);