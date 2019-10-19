$(document).ready(function() {
    $(document).on('click', '.view_data', function() {
        var id_news = $(this).attr("id");
        $.ajax({
            url: "action/viewNews.php",
            method: "POST",
            data: {
                id_news: id_news
            },
            success: function(data) {
                $('#news_detail').html(data);
                $('#dataModal').modal('show');
            }
        });
    });
})