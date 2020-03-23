jQuery(document).ready(function($) {
    $("#form-loc-sim").submit(function() {
        $(this).find(":input").filter(function() { return !this.value; }).attr("disabled", "disabled");
        return true;
    });

    $("#form-loc-sim").find(":input").prop("disabled", false);

    $('#form-tim-sim').on('submit', function(e) {
        e.preventDefault();
        var keyword = this.keyword.value;
        var searchUrl = '/tim-sim/';
        keyword = new String(keyword);
        keyword = keyword.toLowerCase();
        keyword = keyword.replace(/[^0-9^*^x]/g, '');
        keyword = keyword.replace(/\*+/g, '*');
        if (keyword == '') {
            alert("Nhập số sim cần tìm có ít nhất 2 chữ số!");
            this.keyword.focus();
            return false;
        } else {
            window.location.href = searchUrl + keyword;
            return true;
        }
    });

    $('#form-loc-sim select').on('change', function(e) {
        e.preventDefault();
        var gia = $('#gia').val();
        if (gia) {
            gia = gia.split(",");
            var giaTu = gia[0];
            var giaDen = gia[1];
            $("#gia").after('<input type="hidden" name="giaden" value="' + giaDen + '">');
            $("#gia").after('<input type="hidden" name="giatu" value="' + giaTu + '">');
        }
        $('#form-loc-sim').submit();
    });

    $('li.read-more').on('click', function(e) {
        e.preventDefault();
        $(this).parent().find('li').show();
    });

    $('#loc-them').on('click', function(e) {
        e.preventDefault();
        $('.loc-them').toggle();
    });

    // window.onscroll = headerSticky;
    var header = document.getElementById("headerMenu");
    var sticky = header.offsetTop;

    function headerSticky() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }

    $("#selectAll").click(function() {
        $("input.checkboxsim").prop("checked", $(this).prop("checked"));
    });

    $(".checkboxsim").click(function() {
        if (!$(this).prop("checked")) {
            $("#selectAll").prop("checked", false);

        } else {

        }
    });
    new ClipboardJS('.copy-sim');

    $("#locthem").click(function() {
        if ($('.locthem').css('display') == 'none') {
            $('.locthem').css('display', 'table-row');
        } else {
            $('.locthem').css('display', 'none');
        }
    });

    $('.locnhamang').click(function() {
        $('input[name="nhamang"]').val($(this).data('value'));
        $('#form-loc-sim').submit();
    });

    $('.lockhoanggia').click(function() {
        var gia = $(this).data('value');
        if (gia && gia != "") {
            gia = gia.split(",");
            $('input[name="giatu"]').val(gia[0]);
            $('input[name="giaden"]').val(gia[1]);
        } else {
            $('input[name="giatu"]').val("");
            $('input[name="giaden"]').val("");
        }
        $('#form-loc-sim').submit();

    });

    $('.locloaisim').click(function() {
        $('input[name="loaisim"]').val($(this).data('value'));
        $('#form-loc-sim').submit();
    });

    $('.locthuebao').click(function() {
        $('input[name="loaithuebao"]').val($(this).data('value'));
        $('#form-loc-sim').submit();
    });

    $('.lockhuyenmai').click(function() {
        $('input[name="goicuoc"]').val($(this).data('value'));
        $('#form-loc-sim').submit();
    });

    $('.sapxep').click(function() {
        $('input[name="sapxep"]').val($(this).data('value'));
        $('#form-loc-sim').submit();
    });

    $('.locduoiso').click(function(e) {
        e.preventDefault();
        $('input[name="duoiso"]').val($(this).data('value'));
        $('#form-loc-sim').submit();
    });
});

function openCity(evt, cityName) {

    // Declare all variables
    var i, tabcontent, tablinks;
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent-month");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "flex";
    evt.currentTarget.className += " active";
}