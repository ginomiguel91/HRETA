/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


     $("#_atras").button({
    text: false,
    icons: {
    primary: "ui-icon-arrowthick-1-w"
    }
    });
     
    $("#_adelante").button({
    text: false,
    icons: {
    primary: "ui-icon-arrowthick-1-e"
    }
    });
     
    $("#_recargar").button({
    text: false,
    icons: {
    primary: "ui-icon-arrowrefresh-1-e"
    }
    });
     
    $("#_pin").button({
    text: false,
    icons: {
    primary: "ui-icon-pin-w"
    }
    }).click(function () {
    var options;
     
    if ($(this).next().find("span.ui-button-text").text() === "Anclar") {
    options = {
    label: "Desanclar",
    icons: {
    primary: "ui-icon-pin-s"
    }
    };
    } else {
    options = {
    label: "Anclar",
    icons: {
    primary: "ui-icon-pin-w"
    }
    };
    }
    $(this).button("option", options);
    });
     
    $("#_zoom").buttonset();