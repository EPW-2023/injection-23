var fileUploaded = document.getElementById('file_name_uploaded')
var deleteButton = document.getElementById('delete_button')
function getFileData(myFile) {
  var file = myFile.files[0]
  var filename = file.name
  fileUploaded.innerHTML = filename
}

function deleteFile() {
   fileUploaded.innerHTML =
     '<b>The File has been reset, please upload anothter file!</b>'
  fileUploaded.value = ''
}
