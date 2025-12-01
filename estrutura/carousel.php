<style>
.carousel-item {
    transition: transform 0.3s ease-in-out;
}
</style>

<div class="d-flex justify-content-center align-items-center mb-3">
        <div id="carouselExampleIndicators" class="carousel slide w-100 mx-5 rounded-bottom border-4 border-top-0 border-yellow-200" data-bs-ride="carousel" data-bs-interval="3000" style="height: 18rem;">
            <div class="carousel-indicators m-0 p-0">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-light rounded-circle p-0" aria-current="true" aria-label="Slide 1" style="width: 10px; height: 10px;"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-light rounded-circle p-0" aria-label="Slide 2" style="width: 10px; height: 10px;"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg-light rounded-circle p-0" aria-label="Slide 3" style="width: 10px; height: 10px;"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <picture>
                        <source media="(max-width: 798px)" srcset="imagem/bolacha_bono_mobile.png">
                        <img src="imagem/bolacha_bono.png" class="d-block w-100" alt="">
                    </picture>
                    <div class="carousel-caption d-flex justify-content-center">
                        <p class="p-1 rounded-1 text-1xl bg-black bg-opacity-50 border-0 text-white w-30">Bolacha Bono(Sabores)</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <picture>
                        <source media="(max-width: 917px)" srcset="imagem/salgadinho_cheetos_mobile.png">
                        <img src="imagem/salgadinho_cheetos.png" class="d-block w-100" alt="">
                    </picture>

                    <div class="carousel-caption d-flex justify-content-center">
                        <p class="p-1 rounded-1 text-1xl bg-black bg-opacity-50 border-0 text-white w-30">Salgadinho Cheetos(Sabores)</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <picture>
                        <source media="(max-width: 843px)" srcset="imagem/desodorante_rexona_mobile.png">
                        <img src="imagem/desodorante_rexona.png" class="d-block w-100" alt="">
                    </picture>

                    <div class="carousel-caption d-flex justify-content-center">
                        <p class="p-1 rounded-1 text-1xl bg-black bg-opacity-50 border-0 text-white w-30">Desodorante Rexona</p>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev ms-2 my-auto" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <div class="bg-black p-2" style="border-radius: 5px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </div>
            </button>
            <button class="carousel-control-next me-2 my-auto" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <div class="bg-black p-2" style="border-radius: 5px;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </div>
            </button>
        </div>
    </div>