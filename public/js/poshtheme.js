$(function() {
    $('#favoritesModal').on("show.bs.modal", function (e) {
         /*$("#favoritesModalLabel").html($(e.relatedTarget).data('title'));*/
         $("#fav-title").html($(e.relatedTarget).data('title'));
    });
});