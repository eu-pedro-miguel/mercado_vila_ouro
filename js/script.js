// ===== TEMA =====
$(document).ready(function() {
    const savedTheme = localStorage.getItem("theme");
    $('html').attr("data-bs-theme", savedTheme || "light");

    window.openImageModal = function(imageSrc) {
        $('#modalImageSource').attr('src', imageSrc);
        $('#imageModal').modal('show');
    };

    $(".btnDownload").on("click", function() {
        const img = $(this).closest(".card").find("img");
        if (img.length) {
            const imageUrl = img.attr('src');
            $('<a>', { 
                href: imageUrl, 
                download: imageUrl.split('/').pop() 
            })[0].click();
        }
    });

    $('#toggleSenha').on('click', function() {
        const senhaInput = $('#senha_usuario');
        const type = senhaInput.attr('type') === 'password' ? 'text' : 'password';
        senhaInput.attr('type', type);
        $(this).find('i').toggleClass('bi-eye bi-eye-slash');
    });
});

function toggleTheme() {
    const newTheme = $('html').attr("data-bs-theme") === "dark" ? "light" : "dark";
    $('html').attr("data-bs-theme", newTheme);
    localStorage.setItem("theme", newTheme);
}