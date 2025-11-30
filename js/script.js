// js/script.js (VERSÃO 100% JQUERY)

$(document).ready(function () {

    // ====== TEMA ======
    const savedTheme = localStorage.getItem("theme");
    $("html").attr("data-bs-theme", savedTheme || "light");

    window.toggleTheme = function () {
        const currentTheme = $("html").attr("data-bs-theme");
        const newTheme = currentTheme === "dark" ? "light" : "dark";
        $("html").attr("data-bs-theme", newTheme);
        localStorage.setItem("theme", newTheme);
    };

    // ====== MODAL DE IMAGEM ======
    window.openImageModal = function (src) {
        $("#modalImageSource").attr("src", src);
        $("#imageModal").modal("show");
    };

    // ====== DOWNLOAD DA IMAGEM ======
    $(".btnDownload").on("click", function () {
        const img = $(this).closest(".card").find("img");
        if (img.length) {
            const url = img.attr("src");
            $("<a>", { href: url, download: url.split("/").pop() })[0].click();
        }
    });

    // ====== MOSTRAR/OCULTAR SENHA ======
    $("#toggleSenha").on("click", function () {
        const senha = $("#senha_usuario");
        const newType = senha.attr("type") === "password" ? "text" : "password";
        senha.attr("type", newType);

        $(this).find("i").toggleClass("bi-eye bi-eye-slash");
    });

    // ====== MODAIS ======
    if (window.location.search.includes("modal=open")) {
        $("#modalCadastro").modal("show");
        window.history.replaceState(null, null, window.location.pathname);
    }

    $("#modalCadastro").on("hidden.bs.modal", function () {
        window.history.replaceState(null, null, window.location.pathname);
    });

    // ====== BOTÃO VOLTAR AO TOPO ======
    const btnTopo = $("#btnTopo");

    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 100) {
            btnTopo.stop(true, true).fadeIn(200);
        } else {
            btnTopo.stop(true, true).fadeOut(200);
        }
    });

    btnTopo.on("click", function () {
        $("html, body").animate({ scrollTop: 0 }, 550);
    });

    // ====== CARROSSEL DE CARDS 100% JQUERY ======
    function initCardsCarousel() {

        const container = $("#cardsCarousel");
        const track = container.find(".cards-carousel-track");
        const cards = container.find(".cards-carousel-card");
        const prevBtn = container.find(".cards-carousel-prev");
        const nextBtn = container.find(".cards-carousel-next");

        if (!track.length || cards.length === 0) return;

        let currentIndex = 0;

        function getCardsPerView() {
            const w = $(window).width();
            if (w < 768) return 1;
            if (w < 1024) return 1;
            if (w < 1280) return 2;
            return 5;
        }

        function getCardWidth() {
            return cards.first().outerWidth(true);
        }

        function updateCarousel() {
            const cardWidth = getCardWidth();
            const translateValue = -currentIndex * cardWidth;

            track.css("transform", `translateX(${translateValue}px)`);
            updateButtons();
        }

        function updateButtons() {
            const max = cards.length - getCardsPerView();

            prevBtn.css({
                opacity: currentIndex === 0 ? "0.5" : "1",
                pointerEvents: currentIndex === 0 ? "none" : "auto"
            });

            nextBtn.css({
                opacity: currentIndex >= max ? "0.5" : "1",
                pointerEvents: currentIndex >= max ? "none" : "auto"
            });
        }

        prevBtn.on("click", function () {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        nextBtn.on("click", function () {
            const max = cards.length - getCardsPerView();
            if (currentIndex < max) {
                currentIndex++;
                updateCarousel();
            }
        });

        $(window).on("resize", function () {
            const max = cards.length - getCardsPerView();
            if (currentIndex > max) currentIndex = max;
            updateCarousel();
        });

        setTimeout(updateCarousel, 300);
    }

    initCardsCarousel();

});
