<div class="section px-3 px-lg-4 pt-5" id="certificate">
    <div class="container-narrow">
        <div class="text-center mb-5">
            <h2 class="marker marker-center">Sertifikalarım</h2>
        </div>
        <div class="text-center">
            <p class="mx-auto mb-3" style="max-width:600px">
                Sertifikaları üzerine tıklayarak detaylı inceleyebilirsiniz.
            </p>
        </div>
        <div class="row">
            <?php
            $dir = 'images/certificates/';
            $files = array_diff(scandir($dir), array('.', '..'));
            foreach ($files as $file) {
                echo '<div class="col-md-3 mb-4">';
                echo '<div class="card">';
                echo '<a href="#" data-bs-toggle="modal" data-bs-target="#certificateModal" data-bs-image="' . $dir . $file . '" class="image-hover">';
                echo '<img src="' . $dir . $file . '" class="card-img-top" style="object-fit: cover; width: 235px; height: 166px;" alt="Certificate">';
                echo '<div class="overlay"><i class="fas fa-search-plus"></i></div>';
                echo '</a>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="certificateModal" tabindex="-1" aria-labelledby="certificateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="certificateModalLabel">Sertifika</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="modalImage" src="" class="img-fluid" alt="Certificate">
            </div>
        </div>
    </div>
</div>

<script>
    var certificateModal = document.getElementById('certificateModal');
    certificateModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var imageSrc = button.getAttribute('data-bs-image');
        var modalImage = certificateModal.querySelector('#modalImage');
        modalImage.src = imageSrc;
    });
</script>

<style>
    .image-hover {
        position: relative;
        display: block;
    }

    .image-hover img {
        transition: transform 0.3s ease;
    }

    .image-hover:hover img {
        transform: scale(1.05);
    }

    .image-hover .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .image-hover:hover .overlay {
        opacity: 1;
    }

    .image-hover .overlay i {
        background: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        padding: 10px;
        color: white;
    }
</style>