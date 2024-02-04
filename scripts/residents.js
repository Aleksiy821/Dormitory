$(document).ready(function () {
    $(".slider-inner").slick({
      autoplay: true,
      autoplaySpeed: 2000,
      dots: false,
      arrows: true,
      slidesToShow: 5,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });
});

  
function ButtonClick() {
  var cardNumber = $("#cardNumber").val();
  $.ajax({
    url: "./getData.php",
    type: "GET",
    data: { id_card: cardNumber }, 
    dataType: "json",
    success: function (data) {
      displayData(data);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    },
  });
}


function displayData(data) {
  var tableBody = document.getElementById("residentData");
  tableBody.innerHTML = "";

  if (data) {
    var item = data.data;
    item.forEach(element => {
      var row = tableBody.insertRow(0);
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      var cell4 = row.insertCell(3);

      cell1.innerHTML = element.id_card;
      cell2.innerHTML = element.full_name;
      cell3.innerHTML = element.room_number;
      cell4.innerHTML = element.what_is_on_a_person;
    });

      
  } else {
    tableBody.innerHTML = "Данные не найдены.";
  }
}




