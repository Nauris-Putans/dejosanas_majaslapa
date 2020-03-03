$(document).ready(function(){

    const filterButton = $(".filter-button");
    const filter = $(".filter");

    filterButton.click(function(){

        const value = $(this).attr('data-filter');

        if(value === "viss")
        {
            filter.show("1000");
        }
        else
        {
            filter.not('.'+value).hide('3000');
            filter.filter('.'+value).show("3000");
        }
    });

    if (filterButton.removeClass("active")) {
        $(this).removeClass("active");
    }
    $(this).addClass("active");

});