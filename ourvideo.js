const videoModal = document.getElementById('videoModal')
const iframe = document.getElementById('video')

videoModal.addEventListener('show.bs.modal', function () {

iframe.src = "https://www.youtube.com/embed/Q_DsV0opv94"

})

videoModal.addEventListener('hidden.bs.modal', function () {

iframe.src = ""

})